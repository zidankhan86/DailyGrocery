@extends('frontend.index')
@section('content')
<br><br><br><br>

<div class="container">
    <div class="main-body">

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3"><br>
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ auth()->user()->name }}</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">{{ auth()->user()->address }}</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   {{ auth()->user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ auth()->user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   {{ auth()->user()->phone }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ auth()->user()->address }}
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">

                <div class="col-sm-6 mb-3">

                </div>
              </div>



            </div>
          </div>



          <div class="row gutters-sm">

            <div class="col-sm-12 mb-3">
                <h3 class="text-center">Order Information</h3>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $key=>$item)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->amount }} TK</td>
                            <td>{{ $item->status }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
          </div>




        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>

              </tr>
            </thead>
            <tbody>

                @foreach ($order as $item)
              <tr>
                <th scope="row">1</th>
                <td>{{ $item->ProductRelation->product_name}}</td>

              </tr>
              @endforeach


            </tbody>
          </table>
    </div>

@endsection
