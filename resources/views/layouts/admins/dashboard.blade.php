@extends('layouts.admins.auth')
@section('body-content')
<!-- GLOBAL-LOADER -->
<div id="global-loader">
   <img src="{{ asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
   <div class="page-main">

      <!-- app-Header -->
      @include('includes.backend.header')
      <!-- /app-Header -->

      <!--APP-SIDEBAR-->
      @include('includes.backend.sidemenu')

      <!--app-content open-->
      <div class="main-content app-content mt-0">
         <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

               <!-- PAGE-HEADER -->
               <x-page-header />
               <!-- PAGE-HEADER END -->
               <div class="bg-white py-3 px-3 rounded-1">
                  @yield('content')
               </div>
            </div>
            <!-- CONTAINER END -->
         </div>
      </div>
      <!--app-content close-->

   </div>

   <!-- FOOTER -->
   @include('includes.backend.footer')
   <!-- FOOTER END -->

</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection