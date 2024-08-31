@extends('layouts.app')
@section("title", "Image Storage - DI")
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Upload image</div>
        <div class="card-body">

        <form action="{{ route('imagenotdi.save') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Image:</label>
            <input type="file" name="profile_image" />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <img src="{{ URL::asset('storage/test.png') }}" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
