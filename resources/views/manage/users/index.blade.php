@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Manage Users</h1>
        </div>
        <div class="column">
          <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
        </div>
      </div>
      <hr class="m-t-0">

       <user-list></user-list>

      {{-- {{$users->links()}} --}}
    </div>
@endsection

@section('scripts')
    <script>
         $(function () {

            var table = $('#users-data').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'created_at', name: 'created_at'},

                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });
        var app = new Vue({
            el: '#app',

        });
    </script>
@endsection
