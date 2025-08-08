<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ResetPasswordBasic extends Controller
{
  public function index(Request $request)
  {
    $pageConfigs = ['myLayout' => 'blank'];

    return view('content.authentications.auth-reset-password-basic', [
      'pageConfigs' => $pageConfigs,
      'token' => $request->query('token'),
      'email' => $request->query('email')
    ]);
  }

  public function reset(Request $request)
  {
    $request->validate([
      'token' => 'required',
      'email' => 'required|email',
      'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
      $request->only('email', 'password', 'password_confirmation', 'token'),
      function ($user, $password) use ($request) {
        $user->password = Hash::make($password);
        $user->setRememberToken(Str::random(60));
        $user->save();
      }
    );

    if ($status === Password::PASSWORD_RESET) {
      return back()->with('password_reset_success', __($status));
    }

    return back()->withErrors(['email' => __($status)]);
  }
}
