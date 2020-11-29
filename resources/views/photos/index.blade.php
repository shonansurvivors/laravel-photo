@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="card-group">
        @foreach($photos as $photo)
          <div class="col-sm-6 col-md-3 col-lg-2">
            <a href="{{ route('photos.show', ['photo' => $photo]) }}">
              <div class="card border-0 mb-4">

                <img src="{{ asset('storage/' . $photo->filepath) }}" class="card-img photo-index photo-rounded">

                <div class="card-body">
                  <h6 class="card-title">image</h6>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      </div>

    </div>
  </div>
@endsection
