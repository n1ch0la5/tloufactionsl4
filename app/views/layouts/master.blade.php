<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TLOU Factions - A The Last of Us Multiplayer Fansite</title>
    <meta name="viewport" content="width=device-width" />
    {{--foundation css--}}
    <link rel="stylesheet" href="/css/normalize.css" />
  <link rel="stylesheet" href="/css/foundation.css" />
  <link rel="stylesheet" href="/css/app.css" />
  <link rel="stylesheet" href="/css/general_foundicons.css">
  <script src="/js/jquery.min.hoverintent.js"></script>
  <script src="/js/vendor/custom.modernizr.js"></script>
   <!--[if lt IE 8]>
    <link rel="stylesheet" href="/css/general_foundicons_ie7.css">
  <![endif]-->
  <script type="text/javascript">
  $(function(){
/*
    $('.has-dropdown-custom').on('hover', function(){
      $('.dropdown_custom').fadeIn('slow');
    });
    $(".has-dropdown").hoverIntent( makeTall, makeShort, '.dropdown_custom' );
    function makeTall(){  $(this).animate({"height":75},175);}
    function makeShort(){ $(this).animate({"height":50},175);}
    function toggleHeight(){var h=(parseInt($(this).css('height'),10) > 50) ? 50 : 75; $(this).animate({"height":h},200);}
    */
  });
  </script>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
  <script src="/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
