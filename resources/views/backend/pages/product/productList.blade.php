@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{ route('product.form') }}"><button class="btn btn-primary">+ ADD PRODUCT</button></a><br><br>
    <h4 class="card-title">PRODUCT LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
             ID
            </th>
            <th>
                Product Name
            </th>
            <th>
                Shop Name
            </th>
            <th>
                Image
            </th>
            <th>
                Price
              </th>
              <th>
                Quantity
              </th>
              <th>
                Product Details
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

