@extends('backend.index')
@section('content')

<div class="card-body">
    <h4 class="card-title">SHOP LIST</h4>
    <a href="{{route ('shop.form') }}"><h4><button  class="btn btn-primary btn-bg">+ ADD SHOP</button></h4></a>

    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
              Logo
            </th>
            <th>
              Name
            </th>
            <th>
              Owner Name
            </th>
            <th>
                Phone
              </th>
            <th>
              Product Quntity
            </th>
            <th>
               Shop Joined
            </th>

            <th>
                Status
              </th>
              <th>
                Action
              </th>
          </tr>
        </thead>

        <tbody>

                  @foreach ($shoplist as $data)
          <tr>
            <td >
             <img width="200px" src="{{ url('/uploads/uploads/'.$data->shop_logo) }}" alt="">
            </td>
            <td>
             {{ $data->shop_name }}
            </td>
            <td>
              {{ $data->owner_name }}
            </td>
            <td>
                {{ $data->phone }}
            </td>

            <td>
                {{ $data->quantity }}
               </td>
            <td>
               {{ $data->created_at->diffForHumans() }}
              </td>
              <td>
                <select name="" id=""> <option value=""> Active  </option>
                 <option value="">Inactive</option> </select>
               </td>
              <td>

               <a href="{{ route('shop.edit',$data->id) }}" class="btn btn-info">Edit</a>
               <a href="{{ route('shop.delete',$data->id) }}" class="btn btn-danger">Delete</a>
              </td>
          </tr>

          @endforeach

        </tbody>
      </table>
      {{ $shoplist->links() }}
    </div>
  </div>
  @endsection

