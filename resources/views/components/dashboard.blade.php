<x-app-layout>

   <!-- GLOBAL-LOADER -->
   <div id="global-loader">
      <img src="{{ asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
   </div>
   <!-- /GLOBAL-LOADER -->

   <!-- PAGE -->
   <div class="page">
      <div class="page-main">

         <!-- app-Header -->
         <x-partials.header />
         <!-- /app-Header -->

         <!--APP-SIDEBAR-->
         <x-partials.sidemenu />

         <!--app-content open-->
         {{$slot}}
         <!--app-content close-->

      </div>
   </div>

   <!-- BACK-TO-TOP -->
   <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
</x-app-layout>