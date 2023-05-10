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
                <a href="{{ route('customer.delete',$customer->id) }}"
                     onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger" onclick="return confirm('Do you wants to delete ?')">Delete <i class="mdi-delete-circle"></i></a>
                <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-info">Edit</a>
                



                {{-- Demo --}}
                {{-- @if($customer->status=='Accept')
                    <button>View</button>
                    <button>Rject</button>
                @elseif($customer->status=='Reject')
                    <h4>Rejected</h4>
                @else
                    <button>View</button>
                    <button>Accept</button>
                    <button>Rject</button>
                @endif --}}



                {{-- Swith Case --}}

                {{-- @switch($customer)
                    @case($customer->status=="Accept")
                        <button>View</button>
                        <button>Rject</button>
                        @break
                    @case($customer->status=="Reject")
                        <h4>Rejected</h4>
                        @break
                    @default
                        <button>View</button>
                        <button>Accept</button>
                        <button>Rject</button>
                    @endswitch --}}


                {{-- ENd Demo --}}



              </td>
          </tr>

          @endforeach
        </tbody>
      </table>
      {{ $customerlist->links() }}
    </div>
  </div>
  @endsection

