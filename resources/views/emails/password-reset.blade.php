@extends('emails.layout')

@section('title', 'Password Reset')
@section('header_title', ($appName ?? config('app.name')) . ' — Password Reset')

@section('content')
  <h2>Reset your password</h2>
  <p>You recently requested to reset your password for your {{ $appName ?? config('app.name') }} account. Click the button below to proceed.</p>
  <p style="margin: 24px 0;">
    <a class="btn" href="{{ $resetUrl }}" target="_blank" rel="noopener">Reset password</a>
  </p>
  <p>If the button doesn't work, copy and paste this link into your browser:</p>
  <p class="muted" style="word-break: break-all;">{{ $resetUrl }}</p>
  <p class="muted">If you did not request a password reset, you can safely ignore this email.</p>
@endsection
