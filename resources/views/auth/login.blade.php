<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login Page</title>

    <style>
        /* 2. TERAPKAN FONT POPPINS KE SELURUH HALAMAN */
        body {
            font-family: 'Poppins', sans-serif;
        }

        .login {
            min-height: 100vh;
        }

        .bg-image {
            /* Gambar Background */
            background-image: url("{{ asset('assets/images/Rectangle 196.png') }}");
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 700; /* Ditebalkan sedikit biar mirip desain */
            color: #333;
        }
        
        /* Style Text Muted di bawah input */
        .text-muted {
            font-size: 12px; 
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 50px; /* Bikin tombol agak bulat kayak desain modern */
        }
        
        .login .container {
            max-width: 90%;
        }
    </style>
  </head>
  <body>
   
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
          
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Welcome back!</h3>
  
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login.proccess') }}" method="POST">
                      @csrf 
                      
                      <div class="form-group mb-3">
                        <label for="emailInput" style="font-weight: 500;">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com" required autofocus style="padding: 20px; border-radius: 10px;">
                        <small class="form-text text-muted mt-2">We'll never share your email with anyone else.</small>
                      </div>

                      <div class="form-group mb-3">
                        <label for="passwordInput" style="font-weight: 500;">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required style="padding: 20px; border-radius: 10px;">
                      </div>

                      <div class="form-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="rememberCheck">
                        <label class="form-check-label" for="rememberCheck" style="font-size: 14px;">Remember me</label>
                      </div>

                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                        <div class="text-center mt-3">
                          <a class="small" href="#" style="text-decoration: none;">Forgot password?</a>
                        </div>
                      </div>
  
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>