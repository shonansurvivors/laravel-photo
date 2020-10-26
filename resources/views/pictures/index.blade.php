@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12">
        <div class="card-deck">
          @foreach($pictures as $picture)
          <div class="card">

            <div class="card-body">

              <img src="{{ asset('storage/' . $picture->filepath) }}" class="card-img">

            </div>
          </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
@endsection
