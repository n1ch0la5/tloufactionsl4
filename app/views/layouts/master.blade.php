<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width" />
    {{--foundation css--}}
    <link rel="stylesheet" href="/css/normalize.css" />
  <link rel="stylesheet" href="/css/foundation.css" />
  <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="row">
         @include('partials.footer')
    </footer>
<script>
{{--foundation scripts--}}
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="/js/foundation/foundation.js"></script>
  <script src="/js/foundation/foundation.alerts.js"></script>
  <script src="/js/foundation/foundation.clearing.js"></script>
  <script src="/js/foundation/foundation.cookie.js"></script>
  <script src="/js/foundation/foundation.dropdown.js"></script>
  <script src="/js/foundation/foundation.forms.js"></script>
  <script src="/js/foundation/foundation.joyride.js"></script>
  <script src="/js/foundation/foundation.magellan.js"></script>
  <script src="/js/foundation/foundation.orbit.js"></script>
  <script src="/js/foundation/foundation.placeholder.js"></script>
  <script src="/js/foundation/foundation.reveal.js"></script>
  <script src="/js/foundation/foundation.section.js"></script>
  <script src="/js/foundation/foundation.tooltips.js"></script>
  <script src="/js/foundation/foundation.topbar.js"></script>
  <script src="/js/foundation/foundation.interchange.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
