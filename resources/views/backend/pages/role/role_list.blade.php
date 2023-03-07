@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{ route('role.create') }}"><button  class="btn btn-info">ADD ROLE</button></a>
    <h4 class="card-title">Role LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
            Role ID
            </th>
            <th>
                Role Name
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
            @foreach ($roles as $role)

          <tr>

            <td>
            {{ $role->id }}
            </td>
            <td>
            {{ $role->role_name }}
            </td>
            <td>
             {{ $role->status }}
            </td>
            <td>
             <a href="{{ route('role.edit',$role->id) }}"><button class="btn btn-danger">Edit</button></a>
            </td>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @endsection

