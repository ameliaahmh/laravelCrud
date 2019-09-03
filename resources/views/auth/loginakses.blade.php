<!DOCTYPE html>
<html>
<head>
	<title>Login | User</title>
	<script src="https://kit.fontawesome.com/8485c478a6.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    	display-flex, .display-flex, .display-flex-center, .signin-content {
		  display: flex;
		  display: -webkit-flex;
		}
		.main {
		  background: #f8f8f8;
		  padding: 150px 0; 
		}
		.container {
		  width: 500px;
		  background: #fff;
		  margin: 0 auto;
		  box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
		  -moz-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
		  -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
		  -o-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
		  -ms-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
		   
		}
		label {
		  position: absolute;
		  left: 32%;
		  transform: translateY(7%);
		  -moz-transform: translateY(7%);
		  -webkit-transform: translateY(7%);
		  -o-transform: translateY(7%);
		  -ms-transform: translateY(7%);
		  color: #222; 
		}
		input {
		  width: 100%;
		  display: block;
		  font-size: 13px;
		  border: none;
		  background: none;
		  border-bottom: 1px solid #999;
		  padding: 6px 30px;
		  box-sizing: border-box;
		  outline: none; }
		input:focus {
		    border-bottom: 1px solid #222; }
		input:focus::-webkit-input-placeholder {
		    color: #222; }
		input:focus::-moz-placeholder {
		    color: #222; }
		input:focus:-ms-input-placeholder {
		    color: #222; }
		.signin-form {
        	padding: 5%;
        }
        .signin-image {
        	background-image: url(img/login-bg.jpg);
        	padding: 0%;
        	width: 100%;
        	height: auto;
        }
        .signin-image:after{
        	background-color: #0066ff;
        }
        .container{
        	padding: 0%;
        }
    	.logo-sekolah{
            width : 20%;
            height : auto;
            display : block;
            margin-left : auto;
            margin-right : auto;
            padding-bottom : 5%;
            
        }
        .gmbr-siswa {
        	width: 10%;
        	height: auto;
        }
        i {
        	font-size: 10px;
        }
        #btn-masuk{
        	font-size: 14px;
        	border-radius: 0%;
        }
        @media screen and (max-width: 1200px) {
		  .container {
		    width: calc( 100% - 30px);
		    max-width: 100%; } 
		}
		@media screen and (min-width: 1024px) {
		  .container {
		    max-width: 1200px; } 
		}
		@media screen and (max-width: 768px) {
		  .signin-content {
		    flex-direction: column;
		    -moz-flex-direction: column;
		    -webkit-flex-direction: column;
		    -o-flex-direction: column;
		    -ms-flex-direction: column;
		    justify-content: center;
		    -moz-justify-content: center;
		    -webkit-justify-content: center;
		    -o-justify-content: center;
		    -ms-justify-content: center; 
		}
		
    </style>
 
</head>
<body>
	<div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-form">
                    <img src="img/Logo.jpg" class="logo-sekolah" >
                        <form method="POST" class="register-form" id="login-form" action="/postlogin">
                        	{{csrf_field()}}
                            <div class="form-group">
                                <label for="nama"><i class="fas fa-user"></i></label>
                                <input type="text" name="pengenal" id="nama" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="fas fa-key"></i></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <br>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="btn-masuk" class="btn btn-primary btn-lg btn-block" value="MASUK"/>
                            </div>
                        </form>
                    </div>

                    
                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>