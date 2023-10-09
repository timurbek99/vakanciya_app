<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding: 50px;
    }

    .registration-form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="registration-form">
      <h2 class="text-center mb-4">Registration Form</h2>
      @if(session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif


@error('phone_number'){{$message}}


  
@enderror
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

      <form action="{{url('registration_post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" >
        </div>
        <div class="mb-3">
          <label for="surname" class="form-label">Surname</label>
          <input type="text" class="form-control"  name="surname" id="surname" >
        </div>
        <div class="mb-3">
          <label for="phone_number" class="form-label">Phone Number</label>
          <input type="number" class="form-control"  name="phone_number" id="phone_number" >
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control"  name="password" id="password" >
        </div>
        <div class="mb-3">
          <label for="password_verified_at" class="form-label">Confirm Password</label>
          <input type="password" class="form-control"  name="password_verified" id="password_verified_at" >
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
        <p class="mt-3 text-center">Registratsiyadan otgen bolsaniz -> <a href="login">Login</a></p>

      </form>
    </div>
  </div>
</body>
</html>
