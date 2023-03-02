@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{ route('customer.form') }}"><button class="btn btn-primary">+ ADD CUSTOMER</button></a><br><br>
    <h4 class="card-title">CUSTOMER LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
             ID
            </th>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Phone
            </th>
            <th>
                Email
            </th>
            <th>
                Image
              </th>
              <th>
                Address
              </th>
              <th>
                Status
              </th>
              <th>
                Actions
              </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customerlist as $customer)


          <tr>
            <td>
            {{  $customer->id }}
            </td>
            <td>
             {{ $customer->first_name }}
            </td>
            <td>
              {{ $customer->last_name  }}
            </td>
            <td>
              {{ $customer->phone }}
            </td>
            <td>
            {{ $customer->email }}
            </td>
            <td>
                <img width="200px" src="{{url('/uploads/uploads/'.$customer->image)}}" alt="" srcset="">
              </td>
              <td>
                {{ $customer->address }}
              </td>
              <td>
                <select name="" id=""><option value="">Active</option><option value="">Inactive</option></select>
              </td>
              <td>
                <a href="{{ route('customer.delete',$customer->id) }}" class="btn btn-danger">Delete</a>
              </td>
          </tr>

          @endforeach
        </tbody>
      </table>
      {{ $customerlist->links() }}
    </div>
  </div>
  @endsection

