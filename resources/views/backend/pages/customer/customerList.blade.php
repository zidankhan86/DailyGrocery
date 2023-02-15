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
          <tr>
            <td class="py-1">
              <img src="../../images/faces/face1.jpg" alt="image"/>
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
            <td>
                May 15, 2015
              </td>
              <td>
                May 15, 2015
              </td>
              <td>
                May 15, 2015
              </td>
              <td>
                Active
              </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  @endsection

