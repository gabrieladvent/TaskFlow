<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        .verify-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            width: 30%;
        }

        .verify-button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ asset('assets/img/rmlogo.png') }}" alt="Logo Perusahaan" class="logo">
        <h1 class="fw-bold">Confirm your account</h1>
        <p class="fs-5">Hi, {{ $user }}</p>
        <p class="fs-5">Please click the button below to confirm your email address and finish setting up your
            account. <b>This link is valid for <span id="countdown">5:00</span> minutes.</b></p>
        <a href="{{ $verificationUrl }}" class="verify-button fs-5">Confirm</a>

        <p class="fs-5 mt-3">Or via the following link:</p>
        <p class="fs-5">{{ $verificationUrl }}</p>

        <p class="fs-5 fw-bold">If you didn't sign up, ignore this email!</p>

        <!-- Regenerate link button -->
        <p class="fs-5 mt-4">Did the link expire? Click the button below to regenerate:</p>
        <form action="{{ route('verification.resend') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Regenerate Link</button>
        </form>
    </div>

    <script>
        // Countdown timer script
        let timer = 300; // 5 minutes in seconds
        let countdownElement = document.getElementById('countdown');

        let countdown = setInterval(() => {
            let minutes = Math.floor(timer / 60);
            let seconds = timer % 60;

            // Add a leading zero if seconds are less than 10
            seconds = seconds < 10 ? '0' + seconds : seconds;

            countdownElement.innerHTML = minutes + ":" + seconds;
            timer--;

            // Stop the countdown when it reaches 0
            if (timer < 0) {
                clearInterval(countdown);
                countdownElement.innerHTML = 'Expired';
            }
        }, 1000);
    </script>


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
</body>

</html>
