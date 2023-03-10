@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">CATEGORY FORM</h4>
      <form class="forms-sample" action="{{ route('category.update',$categoryData->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" value="{{ $categoryData->name }}" name="name" id="exampleInputName1" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Details</label>
          <input type="text" class="form-control" value="{{ $categoryData->details  }}" name="details" id="exampleInputEmail3" placeholder="Details">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">image</label>
          <input type="file" class="form-control" name="image" value="{{ $categoryData->image }}" id="exampleInputPassword4" placeholder="image">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Type</label>
            <select class="form-control" name="type" id="exampleSelectGender" >
              <option>Goods</option>
              <option>Meat</option>
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputCity1">Parent Category</label>
          <input type="text" class="form-control" value="{{ $categoryData->parent_category}}" name="parent_category" id="exampleInputCity1" placeholder="Parent Category">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
