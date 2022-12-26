<x-page-contents>
    @section('title','Roles')
    <x-slot name="header">
        <x-page-header title='New Role' />
    </x-slot>
    <div class="bg-white py-3 px-3 rounded-1">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
                </div>
            </div>
        </div>


        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{--form --}}
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add new news category</h3>
                    </div>
                    <div class="card-body">
                        <form id="parsley-form">
                            <div class="form-row ">
                                <div class="col-xl-6 mb-3">
                                    <label for="name">Category name</label>
                                    <input type="text" name="name" value="{{old('name')}}"
                                        class="form-control @error('name') is-invalid @enderror" id="validationCustom01"
                                        required data-parsley-required-message='Please fill in this field client error'>
                                    @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-page-contents>