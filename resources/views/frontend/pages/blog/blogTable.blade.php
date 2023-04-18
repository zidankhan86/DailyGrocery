@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{route ('blog.form') }}"><button  class="btn btn-info">ADD BLOG</button></a>
    <h4 class="card-title">Blog List</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>

          <tr>
            <th>Blog Description </th>


            <th> Blog  Image </th>


            <th> Action</th>



          </tr>

        </thead>
        <tbody>

            @foreach ($blogs as $blog)


          <tr>
            <td>
            {{ $blog->description }}
            </td>
            <td>
            <img src="{{url('/uploads/uploads/'.$blog->image)}}" alt="">
            </td>
            {{-- <td> --}}
             {{-- <img width="200px" src="{{ url('/uploads/uploads/'.$brand->logo) }}" alt=""> --}}
             {{-- <img width="200px" src="{{url('/uploads/uploads/'.$customer->image)}}" alt="" srcset=""> --}}
            {{-- </td> --}}
            <td>
             <a href="{{route ('blog.edit',$blog->id) }}" class="btn btn-info">Edit</a>
             <a href="{{route ('blog.delete',$blog->id) }}"><button class="btn btn-danger"
                 onclick="return confirm('Are you sure you want to delete this item?')">Delete</button></a>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection

