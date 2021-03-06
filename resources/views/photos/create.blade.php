@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card mt-3">
          <div class="card-body pt-0">
            @include('error_card_list')
            <div class="card-text">
              <form method="POST" action="{{ route('photos.store') }}" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                  <label>Photo</label>
                  <input type="file" name="photo" class="form-control-file">
                </div>

                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="写真のタイトル（必須ではありません）">
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
