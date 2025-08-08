<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Notification')</title>
  <style>
    body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background: #f6f8fb; margin: 0; padding: 0; }
    .container { max-width: 560px; margin: 40px auto; background: #ffffff; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.06); }
    .header { background: #5a8dee; color: #fff; padding: 24px 28px; text-align: center; }
    .header-title { margin: 0; font-size: 20px; display: inline-block; vertical-align: middle; margin-left: 8px; }
    .logo { display: inline-block; vertical-align: middle; margin-right: 8px; }
    .content { padding: 28px; color: #253053; }
    .content h2 { margin-top: 0; font-size: 18px; }
    .btn { display: inline-block; background: #5a8dee; color: #fff !important; text-decoration: none; padding: 12px 18px; border-radius: 8px; font-weight: 600; }
    .muted { color: #6c7a91; font-size: 13px; }
    .footer { padding: 16px 28px 28px; color: #6c7a91; font-size: 12px; }
    a { color: #5a8dee; }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <span class="logo">@include('_partials.macros', ['width' => 40, 'height' => 32])</span>
      <h1 class="header-title">@yield('header_title', (isset($appName) ? $appName : config('app.name')))</h1>
    </div>
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      <p>&copy; {{ date('Y') }} {{ isset($appName) ? $appName : config('app.name') }}. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
