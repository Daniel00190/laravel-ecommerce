<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/user/register.css') }}">



  

</head>

<body>
  <div class="form-container">

  <form method="POST" action="/login">
      <h2>Hello!</h2>
      <p>Use your email to continue</p>
      @csrf
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="your email" value="{{old('email')}}">
      @error('email')
          <div class="error_message">{{$message}}</div>
        @enderror

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="choose a password" >
      @error('password')
          <div class="error_message">{{$message}}</div>
        @enderror
      @if (session('status'))
          <div class="error_message">{{session('status')}}</div>
      @endif
      <button type="submit">Login</button>
    </form>

  </div>

</body>

</html>