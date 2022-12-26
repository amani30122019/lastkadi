<x-page-contents>
   @section('title','Change password')
   <x-slot name="header">
      <x-page-header title='Change Password' />
   </x-slot>
   <div class="container-login100">
      <div class="wrap-login100 p-6">
         <form class="login100-form validate-form" method="POST" action="{{ route('update-password') }}">
            @csrf
            <span class="login100-form-title pb-5">
               Change Password
            </span>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>

            @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
               {{ session('error') }}
            </div>
            @endif
            <div class="panel panel-primary">
               <div class="panel-body tabs-menu-body p-0 pt-5">
                  <div class="tab-content">
                     <form id="form" data-parsley-validate=''>
                        <div class="tab-pane active">
                           <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                              <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                              </a>
                              <input name="old_password" type="password"
                                 class="input100 border-start-0 ms-0 form-control @error('old_password') is-invalid @enderror"
                                 id="oldPasswordInput" required autofocus placeholder="Old Password">
                              @error('old_password')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                              <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                              </a>
                              <input name="new_password" type="password"
                                 class="input100 border-start-0 ms-0 form-control @error('new_password') is-invalid @enderror"
                                 id="newPasswordInput" required placeholder="New Password">
                              @error('new_password')
                              <div class="text-danger">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                              <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                 <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                              </a>
                              <input name="new_password_confirmation" type="password"
                                 class="input100 border-start-0 ms-0 form-control" id="confirmNewPasswordInput" required
                                 placeholder="Confirm New Password">
                           </div>

                           <div class="container-login100-form-btn">
                              <button type="submit" class="login100-form-btn btn-info">
                                 Save new password
                              </button>
                           </div>
                        </div>
                     </form>

                  </div>
               </div>
            </div>

         </form>
      </div>
   </div>
   @push('scripts')
   <script src="{{asset('/assets/js/show-password.min.js')}}"></script>
   <script>
      $('#form').parsley();
   </script>
   @endpush
</x-page-contents>