@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

        <div class="col-sm-12">
          <div class="card border-0">

            <img src="{{ asset('storage/' . $photo->filepath) }}" class="card-img photo-rounded">

            <div class="card-body">
              <h6 class="card-title">image</h6>
              <div class="card-text text-right">
                <form method="POST" action="{{ route('photos.bookmark', ['photo' => $photo]) }}" >
                  @if($photo->isBookmarkedBy(Auth::User()))
                    @method('DELETE')
                  @else
                    @method('PUT')
                  @endif
                  @csrf
                  <button type="submit" class="btn shadow-none">
                    <i class="fas fa-heart {{ $photo->isBookmarkedBy(Auth::User()) ? 'bookmark-enable' : '' }} mr-1"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

    </div>
  </div>
@endsection
