<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name') }}</title>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/favicon.ico')}}" />
      <!-- BOOTSTRAP CSS -->
      <link id="style" href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

      <!-- STYLE CSS -->
      <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" />
      <link href="{{asset('/assets/css/dark-style.css')}}" rel="stylesheet" />
      <link href="{{asset('/assets/css/transparent-style.css')}}" rel="stylesheet">
      <link href="{{asset('/assets/css/skin-modes.css')}}" rel="stylesheet" />

      <!--- FONT-ICONS CSS -->
      <link href="{{asset('/assets/css/icons.css')}}" rel="stylesheet" />

      <!-- COLOR SKIN CSS -->
      <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('/assets/colors/color1.css')}}" />
      @yield('style')
   </head>

   <body class="app sidebar-mini ltr light-mode login-img">

      @yield('body-content')

      <!-- JQUERY JS -->
      <script src="{{asset('/assets/js/jquery.min.js')}}"></script>

      <!-- BOOTSTRAP JS -->
      <script src="{{asset('/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

      <!-- SPARKLINE JS-->
      <script src="{{asset('/assets/js/jquery.sparkline.min.js')}}"></script>

      <!-- Sticky js -->
      <script src="{{asset('/assets/js/sticky.js')}}"></script>

      <!-- CHART-CIRCLE JS-->
      <script src="{{asset('/assets/js/circle-progress.min.js')}}"></script>

      <!-- PIETY CHART JS-->
      <script src="{{asset('/assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/peitychart/peitychart.init.js')}}"></script>

      <!-- SIDEBAR JS -->
      <script src="{{asset('/assets/plugins/sidebar/sidebar.js')}}"></script>

      <!-- Perfect SCROLLBAR JS-->
      <script src="{{asset('/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
      <script src="{{asset('/assets/plugins/p-scroll/pscroll.js')}}"></script>
      <script src="{{asset('/assets/plugins/p-scroll/pscroll-1.js')}}"></script>

      <!-- INTERNAL CHARTJS CHART JS-->
      <script src="{{asset('/assets/plugins/chart/Chart.bundle.js')}}"></script>
      <script src="{{asset('/assets/plugins/chart/rounded-barchart.js')}}"></script>
      <script src="{{asset('/assets/plugins/chart/utils.js')}}"></script>

      <!-- INTERNAL SELECT2 JS -->
      <script src="{{asset('/assets/plugins/select2/select2.full.min.js')}}"></script>

      <!-- INTERNAL Data tables js-->
      <script src="{{asset('/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
      <script src="{{asset('/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

      <!-- INTERNAL APEXCHART JS -->
      <script src="{{asset('/assets/js/apexcharts.js')}}"></script>
      <script src="{{asset('/assets/plugins/apexchart/irregular-data-series.js')}}"></script>

      <!-- INTERNAL Flot JS -->
      <script src="{{asset('/assets/plugins/flot/jquery.flot.js')}}"></script>
      <script src="{{asset('/assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
      <script src="{{asset('/assets/plugins/flot/chart.flot.sampledata.js')}}"></script>
      <script src="{{asset('/assets/plugins/flot/dashboard.sampledata.js')}}"></script>

      <!-- INTERNAL Vector js -->
      <script src="{{asset('/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
      <script src="{{asset('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

      <!-- SIDE-MENU JS-->
      <script src="{{asset('/assets/plugins/sidemenu/sidemenu.js')}}"></script>

      <!-- TypeHead js -->
      <script src="{{asset('/assets/plugins/bootstrap5-typehead/autocomplete.js')}}"></script>
      <script src="{{asset('/assets/js/typehead.js')}}"></script>

      <!-- INTERNAL INDEX JS -->
      <script src="{{asset('/assets/js/index1.js')}}"></script>

      <!-- Color Theme js -->
      <script src="{{asset('/assets/js/themeColors.js')}}"></script>

      <!-- CUSTOM JS -->
      <script src="{{asset('/assets/js/custom.js')}}"></script>
      @yield('script')
   </body>

</html>