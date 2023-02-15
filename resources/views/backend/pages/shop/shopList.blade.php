@extends('backend.index')
@section('content')

<div class="card-body">
    <h4 class="card-title">SHOP LIST</h4>
    <a href="{{route ('shop.form') }}"><h4><button class="btn btn-primary">+ ADD SHOP</button></h4></a>

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
              Product Quntity
            </th>
            <th>
              Orders
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
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  @endsection

