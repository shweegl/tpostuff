    @extends('layout')

    <title>Sign Up</title>

    @section('content')
    <div class="out-container">
        <div class="container">
            <div class="txt-container">
                <p class="login-titletext">Sign up</p>
                <div>Already a member? <a href="/login">Log In</a></div>
            </div>

            <form class="login-box">

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">First name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="City">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Postal code</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PostalCode">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary login-btn">Sign me up</button>
            </form>


           {{-- <div class="img-container">
                <img src="images/signupline.png" alt="logo" style="height: 20px;">
            </div>
            <div class="img-container">
              <img src="images/fbs.png" alt="logo" style="height: 40px;">
            </div>
            <div class="img-container">
                <img src="images/googles.png" alt="logo" style="height: 40px;">
          </div>--}}
        </div>
    </div>

    </div>
        @endsection('content')
