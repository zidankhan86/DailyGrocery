@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{route ('brand.create') }}"><button  class="btn btn-info">ADD BRAND</button></a>
    <h4 class="card-title">BRAND LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>

          <tr>
            <th>Brand ID </th>


            <th> Brand Name </th>


            <th>  Brand Logo </th>

            <th>
                Action
            </th>

          </tr>

        </thead>
        <tbody>

            @foreach ($brands as $brand)


          <tr>
            <td>
            {{ $brand->id }}
            </td>
            <td>
             {{ $brand->name }}
            </td>
            <td>
             <img width="200px" src="{{ url('/uploads/uploads/'.$brand->logo) }}" alt="">
             {{-- <img width="200px" src="{{url('/uploads/uploads/'.$customer->image)}}" alt="" srcset=""> --}}
            </td>
            <td>
             <a href="{{route('brand.edit',$brand->id)}}" class="btn btn-info">Edit</a>
             <a href=""><button class="btn btn-danger">Delete</button></a>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection

