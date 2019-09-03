<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Siswa</title>
    <script src="https://kit.fontawesome.com/8485c478a6.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color : #33adff;
            padding-top : 25vh;
        }
        .form-container{
            border-radius : 10px;
            padding : 30px;
            box-shadow : -1px, -1px, 1px, -1px;
        }
        form {
            background-color : #fff;
        }
        #nis {
            border-top: none;
            border-right: none;
            border-left: none;
            font-size : 13px;

        }
        #password {
            border-top: none;
            border-right: none;
            border-left: none;
            font-size : 13px;
        }
        #login {
            color : #000;
            font-weight : bold;
            background-color : #33adff;
            border-color: #33adff;
            display : block;
            margin-left : auto;
            margin-right : auto;
        }
        .logo-sekolah{
            width : 30%;
            height : auto;
            display : block;
            margin-left : auto;
            margin-right : auto;
            padding-bottom : 5%;
            
        }
    </style>
</head>
<body>
    <section class="container-fluid">
        <section class="row justify-content-md-center">
            <section class="col-sm-8">
                <section class="row">
                    <section class="col-sm-6">
                        col1
                    </section>
                    <section class="col-sm-6">
                    <form class="form-container">
                        <img src="img/Logo.jpg" class="logo-sekolah" >
                        <div class="form-group">
                            <input type="email" class="form-control form-control-sm" id="nis"  placeholder="Masukkan NIS">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-sm" id="password" placeholder="Masukkan Password ">
                        </div>
                        <button type="submit" class="btn btn-primary" id="login">Masuk</button>
                    </form>
                    </section>
                </section>
            </section>
        </section>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>