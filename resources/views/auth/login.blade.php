<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/style.css') }}" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif

        @if(Session::has('error'))
            <li>{{ Session::get('error') }}</li>
        @endif
        @if(Session::has('success'))
            <li>{{ Session::get('success') }}</li>
        @endif
          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
          @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" name="email" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password"  name="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            
          </form>
          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
          @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="ptext" type="text" name="name" placeholder="Username" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="inputEmail" type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="inputPassword" type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="inputPassword1" type="password" name="password_confirmation" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="{{ asset('frontend/img/favicon.png') }}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{ asset('frontend/img/favicon.png') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
    </script>
  </body>
</html>