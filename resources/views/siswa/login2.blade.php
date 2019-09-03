<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk | Raport Siswa</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('asset_login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('asset_login/css/style.css')}}">
    <style>
        .main {
            background-color : #33adff;
        }
        .logo-sekolah{
            width : 30%;
            height : auto;
            display : block;
            margin-left : auto;
            margin-right : auto;
            padding-bottom : 15%;
            
        }
        #btn-masuk {
            color : #000;
            background-color : #33adff;
            border-color: #33adff;
            display : block;
            margin-left : auto;
            margin-right : auto;
            border: 1px;
        }
        #btn-masuk:hover {
            background-color : #1aa3ff;
        }
    </style>
</head>
<body>

    <div class="main">

        

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <img src="img/siswa.png">
                    </div>

                    <div class="signin-form">
                    <img src="img/Logo.jpg" class="logo-sekolah" >
                        <form method="POST" class="register-form" id="login-form" action="">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="nama"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="nama" placeholder="NIS"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="btn-masuk" class="btn btn-primary btn-lg btn-block" value="Masuk"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('asset_login/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset_login/js/main.js')}}"></script>
</body>
</html>