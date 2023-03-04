@extends('backend.index')
@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="card-title">SHOP EDIT</h4>

      <form class="forms-sample" action="{{ route('shop.update',$shopData->id) }}" method="post"  enctype="">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="exampleInputName1">Shop Logo</label>
          <input type="file" class="form-control"   name="shop_logo"id="exampleInputName1" placeholder="Shop Logo">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail3">Shop Name</label>
          <input type="text" class="form-control" value="{{ $shopData->shop_name }}" name="shop_name" id="exampleInputEmail3" placeholder="Shop Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword4">Owner Name</label>
          <input type="text" class="form-control" value="{{ $shopData->owner_name }}" name="owner_name" id="exampleInputPassword4" placeholder="Owner Name">
        </div>
        <div class="form-group">
          <label for="exampleSelectGender">Gender</label>
            <select class="form-control" name="gender" value="{{ $shopData->gender }}"  id="exampleSelectGender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

        <div class="form-group">
          <label for="exampleInputCity1">Phone Number</label>
          <input type="number" class="form-control" value="{{ $shopData->phone }}"  name="phone" id="exampleInputCity1" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <label for="exampleInputCity1">E-mail</label>
            <input type="email" class="form-control" value="{{ $shopData->email }}" name="email" id="exampleInputCity1" placeholder="Email">
          </div>
        <div class="form-group">
          <label for="exampleTextarea1">Description</label>
          <textarea class="form-control" id="exampleTextarea1" value="{{ $shopData->description }}" name="description"  rows="4" placeholder="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputCity1">Status</label>
            <input type="text" class="form-control"  value="{{ $shopData->status }}"  name="status" id="exampleInputCity1" placeholder="Status">
          </div>
        <button type="submit" class="btn btn-primary me-2">UPDATE CHANGES</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>



@endsection
