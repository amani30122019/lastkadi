<div class="sticky">
   <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
   <div class="app-sidebar">
      <div class="side-header">
         <a class="header-brand1" href="{{route('home')}}">
            <img src="{{ asset('/assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
         </a>
         <!-- LOGO -->
      </div>
      <div class="main-sidemenu">
         <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
               width="24" height="24" viewBox="0 0 24 24">
               <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
            </svg></div>
         <ul class="side-menu">
            <li class="sub-category">
               <h3>Main</h3>
            </li>
            <li class="slide">
               <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('home')}}"><i
                     class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
            </li>
            <li class="sub-category">
               <h3>Settings</h3>
            </li>
            @role('Super admin|Standard User')
            <li class="slide">
               <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                     class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Settings</span><i
                     class="angle fe fe-chevron-right"></i></a>
               <ul class="slide-menu">

                  <li class="side-menu-label1"><a href="javascript:void(0)">Roles and Permissions</a></li>
                  @can('permission-list')
                  <li><a href="{{route('permissions.index')}}" class="slide-item"> Permissions</a></li>
                  @endcan
                  @can('role-list')
                  <li><a href="{{route('roles.index')}}" class="slide-item"> Roles</a></li>
                  @endcan
                  @can('user-list')
                  <li><a href="{{route('users.index')}}" class="slide-item"> Users</a></li>
                  @endcan
                  @can('product-list')
                  <li><a href="{{route('categories.index')}}" class="slide-item"> Categories</a></li>
                  @endcan
                  @can('product-list')
                  <li><a href="{{route('sub-categories.index')}}" class="slide-item"> Sub Categories</a></li>
                  @endcan

               </ul>
            </li>
            @endrole
            <li class="sub-category">
               <h3>Application</h3>
            </li>
            <li class="slide">
               <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                     class="side-menu__icon fe fe-book"></i><span class="side-menu__label">News</span><i
                     class="angle fe fe-chevron-right"></i></a>
               <ul class="slide-menu">

                  <li class="side-menu-label1"><a href="javascript:void(0)">News</a></li>
                  @can('permission-list')
                  <li><a href="javascript:void(0)" class="slide-item"> Sports</a></li>
                  @endcan
                  @can('role-list')
                  <li><a href="{{route('roles.index')}}" class="slide-item"> Jobs</a></li>
                  @endcan
                  @can('user-list')
                  <li><a href="{{route('users.index')}}" class="slide-item"> Videos</a></li>
                  @endcan
                  @can('product-list')
                  <li><a href="{{route('products.index')}}" class="slide-item"> Pictures</a></li>
                  @endcan

               </ul>
            </li>

         </ul>
         <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
               height="24" viewBox="0 0 24 24">
               <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
            </svg></div>
      </div>
   </div>
   <!--/APP-SIDEBAR-->
</div>