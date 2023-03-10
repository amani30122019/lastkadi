<x-page-contents>
   @section('title','Users')
   <x-slot name="header">
      <x-page-header title='Create New User' />
   </x-slot>

   <div class="bg-white py-3 px-3 rounded-1">
      <div class="row">
         <div class="col-lg-12 margin-tb">
            <div class="pull-right">
               <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
         </div>
      </div>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      {!! Form::open(array('route' => 'users.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Name:</strong>
               {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Email:</strong>
               {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>Role:</strong>
               {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <strong>User photo:</strong>
               {!! Form::file('photo',array('class' => 'form-control')) !!}
            </div>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </div>
      {!! Form::close() !!}
   </div>
</x-page-contents>