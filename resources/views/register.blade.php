<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('regis/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('regis/vendor/jquery-ui/jquery-ui.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('regis/css/style.css') }}">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ url('register/post') }}" id="signup-form" class="signup-form">
                        @csrf
                        <div class="form-group">
                            <label for="phone_number">Full Name</label>
                            <input name="name" type="text" class="form-input" name="phone_number" id="phone_number" />
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Username</label>
                            <input name="username" type="text" class="form-input" name="phone_number"/>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Password</label>
                            <input name="password" type="password" class="form-input" name="phone_number"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('regis/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('regis/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('regis/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('regis/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('regis/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
