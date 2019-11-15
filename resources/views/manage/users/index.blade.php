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

    <user-list list-url="'{{route('users.index')}}'"></user-list>
    </div>
@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
        });
    </script>
@endsection
