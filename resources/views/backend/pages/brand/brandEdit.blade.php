@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">BRAND EDIT</h4>
      <form class="forms-sample" action="{{ route('brand.update',$brandData->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputName1">Brand Name</label>
          <input type="text" class="form-control" value="{{ $brandData->name }}" name="name" id="exampleInputName1" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="exampleInputName1">Brand logo</label>
            <input type="file" class="form-control" value="{{ $brandData->image }}" name="logo" id="exampleInputName1" placeholder="Name">
          </div>

        <button type="submit" class="btn btn-primary me-2">UPDATE CHANGE</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
