<!DOCTYPE html>
<html lang="en">
<head>
  <title>LogIn Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  body{
    background:rgba(0,255,0,0.3);
  }
  </style>
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">ATG WORLD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Form</a>
      </li>   
    </ul>
  </div>  
</nav>

<div class="container mt-5 " >
  <h2 class="text-center font-weight-bold text-danger py-3">Login Form</h2>
        <form action="{{url('/register')}}" method="post">
        {{csrf_field()}}
          <div class="form-group">
            @if(session('response'))
              <div class="alert alert-danger">
              {{session('response')}}</div>
            @endif

            <label for="name" class="font-weight-bold">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email" class="font-weight-bold">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="pwd" class="font-weight-bold">Pincode:</label>
            <input type="number" class="form-control" id="pwd" placeholder="Enter pincode" name="pswd" required>
          </div>
          <button type="submit" class="btn btn-primary mb-3" onclick="lengthfxn()">Submit</button>
        </form>
</div>
<script>
function lengthfxn(){
  x=document.getElementById("pwd").value;
  if(x.length<6 || x.length>6){
    alert('Pincode must be of 6 digits!');
  }
}

</script>
</body>
</html>
