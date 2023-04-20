@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Blog FORM</h4>

      <form class="forms-sample" action="{{route ('blog.update',$blogData->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')


        @if($errors->any())
        @foreach($errors->all() as $message)
        <p class="btn btn-danger">{{ $message }}</p>
        @endforeach
        @endif


        <div class="form-group">
          <label for="tex">Blog Description</label>
          <input type="text" class="form-control" value="{{ $blogData->description }}" name="description"  id="text" placeholder="Add Description">
        </div>

        <div class="form-group">
            <label for="tex">Upload Date</label>
            <input type="datetime-local" value="{{ $blogData->date }}" class="form-control" name="date"  id="text" placeholder="Add date">
          </div>

        <div class="form-group">
          <label for="exampleInputPassword4">Product Image</label>
          <input type="file" class="form-control" value="{{ $blogData->image }}" name="image" required id="exampleInputPassword4" placeholder="Upload Image">
        </div>

        <button type="submit" class="btn btn-primary me-2">Update</button>
        <button class="btn btn-info">Cancel</button>
      </form>
    </div>
  </div>



@endsection