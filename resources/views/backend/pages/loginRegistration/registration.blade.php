
<!DOCTYPE html>
<html lang="en">


<!------ Include the above in your HEAD tag ---------->
<head>
    <br><br><br><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>

<form action="{{route ('create.registration') }}" method="post" enctype="multipart/form-data">
    @csrf
<div style="background-color:#41aaa2; height:400px; width:400px; border-radius:30px; text-align:center;" class="col-md-offset-4">
<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Sign Up</h1>

<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control"  placeholder=" Name"  name="name" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="email" class="form-control"  placeholder="Email" name="email" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="email" placeholder="Enter Address" name="address" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile No." name="phone" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="password" class="form-control" id="password" placeholder="Type your Password" name="password" style="border-radius:15px;">
</div>


<button class="col-md-4 col-md-offset-4 btn" style="background-color:#ffffff; color:#626a69; font-size:20px; margin-top:10px;" type="submit"> Submit
</button>
</div>
</form>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>






