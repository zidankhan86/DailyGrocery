@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{ route('category.form') }}"><button class="btn btn-primary">+ ADD CATEGORY</button></a><br><br>
    <h4 class="card-title">CATEGORY LIST</h4>
    <div class="table-responsive">
      <table class="table table-striped" >
        <thead>
          <tr>
            <th>
             ID
            </th>
            <th>
                Category Name
            </th>
            <th>
                Image
            </th>
            <th>
                Type
            </th>
            <th>
                Parent Category
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
            @foreach ($categories as $category)


          <tr>
            <td>
            {{  $category->id }}
            </td>
            <td>
             {{ $category->name }}
            </td>
            <td>
              {{ $category->image  }}
            </td>
            <td>
              {{ $category->type }}
            </td>
            <td>
            {{ $category->parent_category }}
            </td>


              <td>
                <select name="" id=""><option value="">Active</option><option value="">Inactive</option></select>
              </td>
              <td>
                <a href="{{ route('category.delete',$category) }}" class="btn btn-danger"><i class="mdi mdi-key-change"></i></a>
                <a href="{{ route('category.edit',$category) }}" class="btn btn-info">Edit</a>

              </td>
          </tr>

          @endforeach
        </tbody>
      </table>

    </div>
  </div>
  @endsection

