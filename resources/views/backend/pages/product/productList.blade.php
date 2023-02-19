@extends('backend.index')
@section('content')

<div class="card-body">
    <a href="{{ route('product.form') }}"><button class="btn btn-primary btn-bg">+ ADD PRODUCT</button></a><br><br>
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

            @foreach ($productlist as $product)


          <tr>
            <td>
               {{ $product->id }}
            </td>
            <td>
              {{ $product->product_name }}
            </td>
            <td>
            {{ $product->shop_name }}
            </td>
            <td>
             {{ $product->image }}
            </td>
            <td>
             {{ $product->price }}
            </td>
            <td>

               {{ $product->quantity }}
              </td>
              <td>
                <select name="" id=""><option value="">Active</option>
                    <option value="">Inactive</option></select>
              </td>
              <td>
                {{ $product->details }}
              </td>
              <td>
               <a href="" class="btn btn-danger">Delete</a>
              </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
  @endsection

