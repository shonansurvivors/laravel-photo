@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">

      <div class="card-deck">
        @foreach($pictures as $picture)
          <div class="col-sm-6 col-md-2">
            <div class="card">

              <img src="{{ asset('storage/' . $picture->filepath) }}" class="card-img-top">

              <div class="card-body">
                <h6 class="card-title">image</h6>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div>
@endsection
