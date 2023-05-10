@extends('backend.index')
@section('content')

<table class="table">
    <thead class="table table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($sellers as $seller)

        <tr>
            <th scope="row">{{$seller->id  }}</th>
            <td>{{ $seller->name }}</td>
            <td>{{ $seller->phone }}</td>
            <td>{{ $seller->email }}</td>
            <td>{{ $seller->status }}</td>
            <td>
                <a href="" class="btn btn-success">Approve</a>
                <a href="" class="btn btn-danger">Reject</a>

            </td>


        </tr>

        @endforeach




    </tbody>
  </table>






@endsection
