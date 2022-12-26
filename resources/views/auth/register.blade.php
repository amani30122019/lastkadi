<x-guest-layout>
   @section('title','Register')
   <div class="page">
      <div class="">

         <!-- CONTAINER OPEN -->
         <div class="col col-login mx-auto mt-7">
            <div class="text-center">
               <a href="index.html"><img src="../assets/images/brand/logo-white.png" class="header-brand-img"
                     alt=""></a>
            </div>
         </div>

         <div class="container-login100">
            <div class="wrap-login100 p-6">
               <form class="login100-form validate-form" method="POST" action="{{ route('register') }}"
                  enctype="multipart/form-data">
                  @csrf
                  <span class="login100-form-title">
                     Registration
                  </span>
                  <div class="wrap-input100 validate-input input-group"
                     data-bs-validate="Valid email is required: ex@abc.xyz">
                     <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="mdi mdi-account" aria-hidden="true"></i>
                     </a>
                     <input class="input100 border-start-0 ms-0 form-control @error('name') is-invalid @enderror"
                        type="text" name="name" value="{{ old('name') }}" placeholder="Full name">
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="wrap-input100 validate-input input-group"
                     data-bs-validate="Valid email is required: ex@abc.xyz">
                     <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                     </a>
                     <input class="input100 border-start-0 ms-0 form-control @error('email') is-invalid @enderror"
                        name="email" type="email" value="{{ old('email') }}" placeholder="Email">
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                     <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                     </a>
                     <input class="input100 border-start-0 ms-0 form-control @error('password') is-invalid @enderror"
                        value="{{ old('password') }}" name="password" type="password" placeholder="Password">
                     @error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                     <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                     </a>
                     <input
                        class="input100 border-start-0 ms-0 form-control @error('password_confirmation') is-invalid @enderror"
                        value="{{ old('password_confirmation') }}" name="password_confirmation" type="password"
                        placeholder="Password Confirmation">
                     @error('password_confirmation')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="wrap-input100 validate-input input-group">
                     <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                        <i class="mdi mdi-file" aria-hidden="true"></i>
                     </a>
                     <input class="input100 border-start-0 ms-0 form-control @error('photo') is-invalid @enderror"
                        value="{{ old('photo') }}" name="photo" type="file" placeholder="My image">
                     @error('photo')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <label class="custom-control custom-checkbox mt-4">
                     <input type="checkbox" class="custom-control-input">
                     <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                  </label>
                  <div class="container-login100-form-btn">
                     <button type="submit" class="login100-form-btn btn-primary">
                        Register
                     </button>
                  </div>
                  <div class="text-center pt-3">
                     <p class="text-dark mb-0">Already have account?<a href="{{route('login')}}"
                           class="text-primary ms-1">Sign In</a></p>
                  </div>
               </form>
            </div>
         </div>
         <!-- CONTAINER CLOSED -->
      </div>
   </div>
   @push('scripts')
   <script src="{{asset('assets/js/show-password.min.js')}}"></script>
   @endpush
</x-guest-layout>