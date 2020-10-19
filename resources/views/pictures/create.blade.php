@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{ route('pictures.store') }}">

                @csrf
                <div class="form-group">
                  <label></label>
                  <input type="file" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-primary">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
