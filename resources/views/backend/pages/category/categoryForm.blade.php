@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">Category Form</h4>
      <form class="forms-sample">
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Details</label>
          <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Details">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">image</label>
          <input type="file" class="form-control" id="exampleInputPassword4" placeholder="image">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Type</label>
            <select class="form-control" id="exampleSelectGender" >
              <option>Goods</option>
              <option>Meat</option>
            </select>
          </div>
        <div class="form-group">
          <label for="exampleInputCity1">Parent Category</label>
          <input type="text" class="form-control" id="exampleInputCity1" placeholder="Parent Category">
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
