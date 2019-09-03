<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: #f8f8f8;
        }
        #navbar {
            background-color: #ffffff;
            box-shadow: 0px 10px 16px 0.17px rgba(0, 0, 0, 0.05);
            padding: 1% 0% 1% 1%;
        }
        #menu {
            padding-left : 10%;
        }
        .user-img {
            width : 7%;
            height : auto;
            border : 1px solid white;
            border-radius : 100%;
        }
        * {
            font-size: 13px;
        }
        #cari {
            padding-left: 10%;
            padding-right: 20%;
            margin: auto;
            position: fixed;
        }
        #user {
            padding-left: 20%;
            margin: auto;
            position: fixed;
        }
        .nav-link {
            color: #8c8c8c;
        }
        .nav-link:hover{
            color: #666666;
        }
        .navbar-brand {
            font-weight: bold;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="nav navbar-collapse justify-content-end" id="menu">
        <form class="form-inline my-2 my-lg-0" id="cari" method="get" action="/siswa" name="cari">
            <input class="form-control mr-sm-2 form-control-sm"  type="search" placeholder="Cari siswa..." aria-label="Search" name="cari">
            <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
        
        
       
    </div>
    </div>
    </nav>


</body>
</html>