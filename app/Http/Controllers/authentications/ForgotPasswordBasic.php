<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Carbon;

class ForgotPasswordBasic extends Controller
{
  public function index(Request $request)
  {
    $pageConfigs = ['myLayout' => 'blank'];

    // Determine when user can resend next
    $lastSent = $request->session()->get('password_reset_last_sent');
    $resendNotBefore = $lastSent ? ($lastSent + 30) : null; // epoch seconds

    return view('content.authentications.auth-forgot-password-basic', [
      'pageConfigs' => $pageConfigs,
      'resendNotBefore' => $resendNotBefore,
      'sentTo' => $request->session()->get('password_reset_sent_to')
    ]);
  }

  public function sendResetLink(Request $request)
  {
    $validated = $request->validate([
      'email' => ['required', 'email']
    ]);

    // Simple session-based throttle: 30 seconds between sends
    $lastSent = $request->session()->get('password_reset_last_sent');
    if ($lastSent && (time() - $lastSent) < 30) {
      $wait = 30 - (time() - $lastSent);
      return back()
        ->withErrors(['email' => "Please wait {$wait} seconds before requesting another reset link."])
        ->withInput();
    }

    $status = Password::sendResetLink(
      ['email' => $validated['email']]
    );

    if ($status === Password::RESET_LINK_SENT) {
      // Store last sent time and who it was sent to for UI/Resend
      $request->session()->put('password_reset_last_sent', time());
      $request->session()->put('password_reset_sent_to', $validated['email']);

      return redirect()->route('admin.forget-password')
        ->with('status', __($status));
    }

    return back()->withErrors(['email' => __($status)])->withInput();
  }
}
