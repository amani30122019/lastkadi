<x-page-contents>
    @section('title','Permissions')
    <x-slot name="header">
        <x-page-header title='Permissions Management' />
    </x-slot>
    <div class="bg-white py-3 px-3 rounded-1">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    @can('permission-create')
                    <a class="btn btn-success mb-4" href="javascript:void(0)"> New Permission</a>
                    @endcan
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        @if (count($permissions)>0)
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th width="250px">Action</th>
            </tr>
            @foreach ($permissions as $permission)
            <tr>
                <td>{{ $permission->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">Show</a>
                    @can('permission-edit')
                    <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
                    @endcan
                    @can('permission-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy',
                    $permission->id],'style'=>'display:inline'])
                    !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
            @endforeach
        </table>

        @else
        <p>No any Permission</p>
        @endif
    </div>
</x-page-contents>