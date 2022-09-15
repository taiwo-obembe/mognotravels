<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />

<!-- Toastr -->
<link href="https://cdn.jsdelivr.net/npm/vue-toast-notification/@0.6/dist/theme-sugar.css" rel="stylesheet">


<body>

  <!-- Section: Design Block -->
  <section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>

    <!-- Jumbotron -->
    <div class="container py-4" id="social-auth">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Sign in</h2>
              @include('Includes.messages')
              <form method="post"  action="{{ route('auth.login.account') }}">
                 @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" name="email" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" name="password" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Remember Me
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign In
                </button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4" alt="" />
        </div>
      </div>
    </div>


    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"></script>

<script src="{{ asset('libraries/axios.js') }}"></script>
<script src="{{ asset('libraries/vuejs3.js') }}"></script>
<!-- Toastr -->
<script src="https://cdn.jsdelivr.net/npm/vue-toast-notification@0.6"></script>

<script src="{{ asset('app/js/social-auth.js') }}" type="text/javascript"></script>
