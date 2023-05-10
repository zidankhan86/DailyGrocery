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
                <a href="{{route('approve',$seller->id)}}" class="btn btn-success" onclick="return confirm('Do you wants to Approve ?')">Approve</a>
                <a href="{{route('reject',$seller->id) }}" class="btn btn-danger"  onclick="return confirm('Do you wanst to Reject ?')">Reject</a>

            </td>


        </tr>

        @endforeach




    </tbody>
  </table>






@endsection
