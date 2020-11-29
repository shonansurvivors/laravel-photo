@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

        <div class="col-sm-12">
          <div class="card border-0">

            <img src="{{ asset('storage/' . $photo->filepath) }}" class="card-img photo-rounded">

            <div class="card-body">
              <h6 class="card-title">image</h6>
            </div>
          </div>
        </div>

    </div>
  </div>
@endsection
