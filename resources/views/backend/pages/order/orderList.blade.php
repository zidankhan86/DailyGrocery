@extends('backend.index')
@section('content')

<div class="card-body">
    <h4 class="card-title">ORDER LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
              Order Numbers
            </th>
            <th>
                Delivery Fee
            </th>
            <th>
                Total
            </th>
            <th>
                Order Date
            </th>
            <th>
              Deadline
            </th>
            <th>
                Status
              </th>
              <th>
                Shipping Address
              </th>
              <th>
                Actions
              </th>
          </tr>
        </thead>
        <tbody>


@foreach ($orders as $order)
          <tr>
            <td>{{ $order->date }}</td>
            <td> </td>
            <td>{{ $order->amount }} </td>
            <td> </td>
            <td> </td>
            <td>{{ $order->status }} </td>
            <td>{{ $order->address }} </td>

            <td>
<a href="" class="btn btn-info">View</a>
<a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach



        </tbody>
      </table>
    </div>
  </div>
  @endsection

