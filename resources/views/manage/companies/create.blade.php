@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New Company</h1>
      </div>
    </div>
    <hr class="m-t-0">
{{-- <test-1 :when-click="name"></test-1>
<test-2 :when-clicked="setName"></test-2> --}}
    <company-create :route-url="'{{route('companies.store')}}'"
        :csrf-token="'{{csrf_token()}}'" :_token="'{{\Auth::user()->api_token}}'"></company-create>
  </div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        name: 'test sdfsdf'
      },
      methods: {
          setName: function(name){
            this.name = name;
          }
      }
    });
  </script>
@endsection
