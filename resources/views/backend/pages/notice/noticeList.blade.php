@extends('backend.index')
@section('content')

<div class="card-body">
    <h4 class="card-title">NOTICE</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
             ID
            </th>
            <th>
                Notice
            </th>
            <th>
                Description
            </th>
            <th>
                Type
            </th>
            <th>
                Effective From
            </th>
            <th>
                Expired At
              </th>
              <th>
                Issued By
              </th>
              <th>
                Priority
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

