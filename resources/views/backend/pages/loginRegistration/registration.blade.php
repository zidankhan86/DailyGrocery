<div class="card">
    <div class="card-body">
      <h4 class="card-title">Default form</h4>

      <form class="forms-sample" action="{{route ('create.registration') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputUsername1">Your Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1">Phone</label>
          <input type="number" name="phone" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
          </div>
        <div class="form-check form-check-flat form-check-primary">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
