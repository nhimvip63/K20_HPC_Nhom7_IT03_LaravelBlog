@extends('layout.master')
@section('content')
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Đăng blog</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('blog.store') }}" method="POST">
        @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Tiêu đề</label>
            <input type="text" class="form-control" name="title">
          <div class="mb-3">
            <label class="form-label" for="basic-default-message">Nội dung</label>
            <textarea id="basic-default-message" class="form-control" name="detail"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
      </div>
    </div>
  </div>
@endsection
