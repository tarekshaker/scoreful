@php
  $width = $width ?? '40';
  $height = $height ?? '32';
  $wrap = isset($wrap) ? (bool) $wrap : true;
  // Optional color override: when provided, SVG uses this color instead of currentColor
  $color = $color ?? null;
  $effectiveColor = $color ?: 'currentColor';
@endphp

@if($wrap)
<span class="text-primary">
@endif
  <!-- Simple placeholder logo with the letter S -->
  <svg width="{{ $width }}" height="{{ $height }}" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-label="Brand logo: S">
    <!-- Optional subtle background shape -->
    <rect x="1" y="1" width="30" height="30" rx="6" ry="6" fill="none" stroke="{{ $effectiveColor }}" opacity="0.25" />
    <!-- Centered S letter -->
    <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" font-size="20" font-weight="700" fill="{{ $effectiveColor }}" font-family="system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Liberation Sans', sans-serif">S</text>
  </svg>
@if($wrap)
</span>
@endif
