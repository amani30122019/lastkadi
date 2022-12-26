<x-guest-layout>
   @section('title','Login')
   <!-- PAGE -->
   <div class="page">
      <div class="">

         <!-- CONTAINER OPEN -->
         <div class="col col-login mx-auto mt-7">
            <div class="text-center">
               <a href="{{route('login')}}"><img src="{{asset('assets/images/brand/logo-white.png')}}"
                     class="header-brand-img" alt=""></a>
            </div>
         </div>

         <div class="container-login100">
            <div class="wrap-login100 p-6">
               <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                  @csrf
                  <span class="login100-form-title pb-5">
                     Login
                  </span>
                  <div class="panel panel-primary">
                     <div class="panel-body tabs-menu-body p-0 pt-5">
                        <div class="tab-content">
                           <div class="tab-pane active">
                              <div class="wrap-input100 validate-input input-group"
                                 data-bs-validate="Valid email is required: ex@abc.xyz">
                                 <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                 </a>
                                 <input
                                    class="input100 border-start-0 form-control ms-0 @error('email') is-invalid @enderror"
                                    type="email" value="{{ old('email') }}" name="email" placeholder="Email">
                                 @error('email')
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                 <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                 </a>
                                 <input
                                    class="input100 border-start-0 form-control ms-0 @error('password') is-invalid @enderror"
                                    name="password" type="password" placeholder="Password">

                              </div>
                              <div class="text-end pt-4">
                                 @if (Route::has('password.request'))
                                 <p class="mb-0">
                                    <a href="{{ route('password.request') }}" class="text-primary ms-1">Forgot
                                       Password?</a>
                                 </p>
                                 @endif
                              </div>
                              <div class="container-login100-form-btn">
                                 <button type="submit" class="login100-form-btn btn-primary">
                                    Login
                                 </button>
                              </div>
                              <div class="text-center pt-3">
                                 <p class="text-dark mb-0">Not a member?<a href="{{ route('register')}}"
                                       class="text-primary ms-1">Register</a></p>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>

               </form>
            </div>
         </div>
         <!-- CONTAINER CLOSED -->
      </div>
   </div>
   @push('scripts')
   <script src="{{asset('/assets/js/show-password.min.js')}}"></script>
   @endpush
</x-guest-layout>