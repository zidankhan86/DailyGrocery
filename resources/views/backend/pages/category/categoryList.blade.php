@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{ route('category.form') }}"><button  class="btn btn-info">ADD CATEGORY</button></a>
    <h4 class="card-title">CATEGORY LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>

          <tr>

            <th> CATEGORY ID </th>

            <th> CATEGORY NAME </th>

            <th>  Category Details </th>

            <th>  Category Details </th>

            <th>  Category image </th>

            <th>  Category Type </th>

            <th> Parent Category </th>


            <th>Action</th>



          </tr>

        </thead>
        <tbody>




          <tr>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>
             <a href="" class="btn btn-info">Edit</a>
             <a href=""><button class="btn btn-danger">Delete</button></a>
            </td>

          </tr>


        </tbody>
      </table>
    </div>
  </div>
  @endsection

