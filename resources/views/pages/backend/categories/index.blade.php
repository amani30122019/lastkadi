<x-page-contents>
    @section('title','Category')
    <x-slot name="header">
        <x-page-header title='Category Management' />
    </x-slot>
    <div class="bg-white py-3 px-3 rounded-1">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    @can('category-create')
                    <a class="btn btn-success mb-4" href="{{route('categories.create')}}">New category</a>
                    @endcan
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if (count($categories)>0)
        <table class="table table-striped">
            <thead class="bg-secondary">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col" width="250px">Action</th>
                </tr>
            </thead>
            @foreach ($categories as $category)
            <tr>

                <td>{{ $category->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
                    @can('category-edit')
                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                    @endcan
                    @can('category-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy',
                    $category->id],'style'=>'display:inline'])
                    !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
            @endforeach
        </table>
        @else
        <p>No any Category</p>
        @endif
    </div>
</x-page-contents>