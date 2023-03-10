@extends('Backend.layouts.main')
@section('main-container')
<div class="container mt-lg-auto mx-auto" style="margin-top: 10rem; padding-left:5rem;">
<form method="POST" action="{{ route('recentnews.update', $image->id) }}" enctype="multipart/form-data">


            @csrf
            @method('POST')
            <label for="">Title</label>
          <input type="text" name="caption" class="form-control"  value="{{ $image->caption }}"  required>
          <label for="">Description</label>
          <input type="text" name="span" class="form-control" value="{{ $image->span }}" required>
          <label for="">Publish-date</label>
          <input type="text" name="date" class="form-control" value="{{ $image->date }}" required>
            <input type="file" name="image" class="form-control"  required id="">
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        
</div>
@endsection