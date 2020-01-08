@extends('layout')

    <title>Login</title>

    @section('content')
    <div class="out-container">
        <div class="container">
            <div class="img-container">
                <p class="login-titletext">Log in</p>
                <div>New to this site?
                    <a href="/signup">Sign Up</a></div>
            </div>

            <form class="login-box">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary login-btn">Log me in</button>
            </form>

            <div class="img-container">
              <img src="images/loginline.png" alt="logo" style="height: 20px;">
          </div>

            <div class="img-container">
              <img src="images/fb.png" alt="logo" style="height: 40px;">
            </div>
            <div class="img-container">
            <img src="images/google.png" alt="logo" style="height: 40px;">
          </div>
        </div>
    </div>

    @endsection('content')
