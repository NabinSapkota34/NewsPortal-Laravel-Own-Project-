@extends('Backend.layouts.main')
@section('main-container')
<div class="container mt-lg-auto mx-auto" style="margin-top: 10rem; padding-left:5rem;">
        <form action="{{route('recentnews.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Title</label>
          <input type="text" name="caption" class="form-control" placeholder="Enter caption for your blog">
          <label for="">Description</label>
          <input type="text" name="span" class="form-control" placeholder="Enter description for your blog">
          <label for="">Publish-date</label>
          <input type="text" name="date" class="form-control" placeholder="Enter description for your blog">
            <input type="file" name="image" class="form-control" id="">
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
        
</div>
@endsection