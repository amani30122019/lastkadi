<x-page-contents>
   @section('title','Users')
   <x-slot name="header">
      <x-page-header title='Users Management' />
   </x-slot>

   <div class="row row-sm">
      <div class="row">
         <div class="col-lg-12 margin-tb">
            <div class="pull-right">
               <a class="btn btn-success mb-4" href="{{ route('users.create') }}"> Create New User</a>
            </div>
         </div>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
         <p>{{ $message }}</p>
      </div>
      @endif
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="table-responsive">
                  <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                     <thead>
                        <tr>
                           <th class="border-bottom-0">No</th>
                           <th class="border-bottom-0">Name</th>
                           <th class="border-bottom-0">Email</th>
                           <th class="border-bottom-0">Roles</th>
                           <th class="border-bottom-0">Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($data as $key => $user)
                        <tr>
                           <td>{{ ++$i }}</td>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                           <td>
                              @if(!empty($user->getRoleNames()))
                              @foreach($user->getRoleNames() as $v)
                              <label class="badge bg-secondary px-3 py-2">{{ $v }}</label>
                              @endforeach
                              @endif
                           </td>
                           <td>
                              <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                              <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                              $user->id],'style'=>'display:inline']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                              {!! Form::close() !!}
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
   @push('scripts')
   <script src="{{ asset('/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/jszip.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
   <script src="{{ asset('/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
   <script src="{{ asset('/assets/js/table-data.js')}}"></script>
   @endpush
</x-page-contents>