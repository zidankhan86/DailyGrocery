@extends('backend.index')
@section('content')
<div class="container">
    <div class="container">
        <div class="container mx-auto my-5">
            <h2 class="text-center">
               Order Report
            </h2>
        </div>
    </div>
</div>

<div class="container"  >
    <div class="container">
        <form action=""{{ route('generate.report.post') }} >

            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Date</label>
              <input type="date" class="form-control" id="exampleInputEmail1"  placeholder="Date" name="from_date">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Date</label>
              <input type="date" class="form-control" id="date" placeholder="Date" name="to_date">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>



<div class="card-body">

    <h4 class="card-title" id="printableArea">PRODUCT LIST</h4>
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
                Category Name
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
                {{ $product->CategoryRelation->name }}
              </td>
            <td>
            {{ $product->shop_name }}
            </td>
            <td>
            <img width="200px" src="{{ url('/uploads/uploads/'.$product->image) }}" alt="">
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

                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-info">Edit</a>
                <a href="{{ route('product.delete',$product->id) }}" class="btn btn-danger">Delete</a>
              </td>
          </tr>
          @endforeach

        </tbody>
      </table>

    </div>
    <button onclick="printDiv('printMe')">Print only the above div</button>
  </div>



  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-1"></div>
        <button class="btn btn-success" onclick="printDiv('printableArea')" value="print a div!" >Print</button>
    </div>
    <div class="col-md-7"></div>
</div>


<script>
    function printDiv(divName){
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    }
</script>
<div>
<h1> do not print this </h1>

<div id='printMe'>
Print this only
</div>

<button onclick="printDiv('printMe')">Print only the above div</button>

</div>


  @endsection
