@extends('layouts.manage')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Manage Company</h1>
        </div>
        <div class="column">
          <a href="{{route('company.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Company</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th></th>
              </tr>
            </thead>

            <tbody>

            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{-- {{$users->links()}} --}}
    </div>
@endsection
