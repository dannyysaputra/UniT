<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniT</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/start.css') }}">

</head>

<body class="register-body2">
    <form class="form2" action="forget-password" method="POST">
        @csrf
        <p>Lupa Kata Sandi?</p>
        <h6>Masukan Email anda untuk mendapatkan kode OTP</h6>
        <div class="group2">
            <input required="true" name="email" id="email" class="main-input1" type="text">
            <span class="highlight-span1"></span>
            <label class="lebal-email1">Email</label>
        </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <button type="submit" class="btn btn-secondary btn-sm btn-custom-login-white"> Ganti Kata Sandi
            </button>
        </div>
    </form>
    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
