<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      padding: 50px;
    }
    .login-form {
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
    <div class="login-form">
      <h2 class="text-center mb-4">Login Form</h2>
      <form>
        <div class="mb-3">
          <label for="username" class="form-label" >Telefon nomer</label>
          <input type="number" class="form-control"  id="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Parol</label>
          <input type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
        <p class="mt-3 text-center">Registratsiyadan otpegen bolsaniz -> <a href="registration">Registratsiyadan otiw</a></p>
      </form>
    </div>
  </div>
</body>
</html>
