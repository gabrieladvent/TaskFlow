<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>Login</title>

</head>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0 me-5">
                <img src="{{ asset('assets/img/homeLogo.png') }}" alt=""
                    class="img-fluid mb-3 d-none d-md-block" />
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <!-- Pills navs -->
                <header class="justify-content-center d-flex">
                    <h1>
                        <a href="#" class="navbar-brand justify-content-center d-flex">
                            <img src="{{ asset('assets/img/rmlogo.png') }}" alt="logo" width="150" />
                        </a>
                        GEOEXPLORER
                    </h1>
                </header>

                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active fs-5 fw-bold" id="tab-login" data-mdb-pill-init href="#pills-login"
                            role="tab" aria-controls="pills-login" aria-selected="true">Login
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link fs-5 fw-bold" id="tab-register" data-mdb-pill-init href="#pills-register"
                            role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>


                <div class="text-center mb-3">
                    <p class="text-center fs-5">Sign in with:</p>

                    <div class="row justify-content-center d-flex">
                        <div class="col-auto">
                            <a href="#" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fa-brands fa-facebook-f fs-1"></i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fa-brands fa-google fs-1"></i>
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="#" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-link btn-floating mx-1">
                                <i class="fa-brands fa-github fs-1"></i>
                            </a>
                        </div>
                    </div>
                    <hr>

                </div>

                <p class="text-center fs-5">or:</p>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form action="#" method="POST">
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Email or username</label>
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4 position-relative">
                                <input type="password" id="registerPassword" class="form-control" name="password"
                                    required />
                                <label class="form-label" for="registerPassword">Password</label>
                                <i class="far fa-eye position-absolute" id="togglePassword"
                                    style="cursor: pointer; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                Not a member? <a href="#!">Register</a> | <a href="#!">Forgot password?</a>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>

                            <!-- Name input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" name="name" required />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" name="email"
                                    required />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input with eye icon -->
                            <div data-mdb-input-init class="form-outline mb-4 position-relative">
                                <input type="password" id="registerPassword" class="form-control" name="password"
                                    required />
                                <label class="form-label" for="registerPassword">Password</label>
                                <i class="far fa-eye position-absolute" id="togglePassword"
                                    style="cursor: pointer; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                            </div>

                            <!-- Password match message -->
                            <div id="passwordMessage" class="text-danger mb-2"></div>

                            <!-- Repeat Password input with eye icon -->
                            <div data-mdb-input-init class="form-outline mb-4 position-relative">
                                <input type="password" id="registerRepeatPassword" class="form-control"
                                    name="password_confirmation" required />
                                <label class="form-label" for="registerRepeatPassword">Password Confirmation</label>
                                <i class="far fa-eye position-absolute" id="toggleRepeatPassword"
                                    style="cursor: pointer; right: 10px; top: 50%; transform: translateY(-50%);"></i>
                            </div>



                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="registerCheck" aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/34e9a4f39d.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
    <script>
        // Toggle visibility for password input
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('registerPassword');
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        // Toggle visibility for password confirmation input
        const toggleRepeatPassword = document.getElementById('toggleRepeatPassword');
        const repeatPassword = document.getElementById('registerRepeatPassword');
        toggleRepeatPassword.addEventListener('click', function() {
            const type = repeatPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            repeatPassword.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        // Validate password match
        const passwordMessage = document.getElementById('passwordMessage');
        repeatPassword.addEventListener('keyup', function() {
            if (password.value !== repeatPassword.value) {
                passwordMessage.textContent = "Passwords do not match!";
                passwordMessage.classList.remove('text-success');
                passwordMessage.classList.add('text-danger');
            } else {
                passwordMessage.textContent = "Passwords match!";
                passwordMessage.classList.remove('text-danger');
                passwordMessage.classList.add('text-success');
            }
        });
    </script>
</body>

</html>
