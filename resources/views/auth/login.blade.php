<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/login/style.css') }}">
    <title>Konnichiwa minna | Portofolio rahmi</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('register') }}" method="POST" class="user">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <span>Use your email for registeration</span>
                </div>

                @csrf
                <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

                <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Email Address">
                    @error('email')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            
                <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                
                <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleInputConfirmPassword" placeholder="Confirm Password">

                    
                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="POST" class="user">
                @csrf
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                  </div>
                @endif
                <h1>Sign In</h1>
                <div class="social-icons">
                    <span>Use your email dan password</span>
                </div>
                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <a href="#">Forget Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Okaerinasai, Minna!</h1>
                    <p>Sign In with your account to see my portofolio! &#128156; &#128071; </p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Konnichiwa, Minna!</h1>
                    <p>Sign Up with your personal details to see my portofolio &#128156; &#128071; <br /> <br />
                        Arigatou Gozaimazu!</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/login/script.js') }}"></script>
</body>

</html>