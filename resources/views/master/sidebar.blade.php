<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://kit.fontawesome.com/8485c478a6.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <style type="text/css">
    #body-row {
    margin-left:0;
    margin-right:0;
    }
    #sidebar-container {
        min-height: 100vh;   
        background-color: #333;
        padding: 0;
    }


    .sidebar-expanded {
        width: 230px;
    }
    .sidebar-collapsed {
        width: 60px;
    }


    #sidebar-container .list-group a {
        height: 50px;
        color: white;
    }


    #sidebar-container .list-group .sidebar-submenu a {
        height: 45px;
        padding-left: 30px;
    }
    .sidebar-submenu {
        font-size: 0.9rem;
    }
    .sidebar-separator-title {
        background-color: #333;
        height: 35px;
    }
    .sidebar-separator {
        background-color: #333;
        height: 25px;
    }
    #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
      content: " \f0d7";
      font-family: FontAwesome;
      display: inline;
      text-align: right;
      padding-left: 10px;
    }

    #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
      content: " \f0da";
      font-family: FontAwesome;
      display: inline;
      text-align: right;
      padding-left: 10px;
    }
    .icon {
        font-size: 15px;
    }
  </style>
</head>
<body>
     
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            <a href="/dashboard" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="icon ion-md-home fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <a href="{{Route('data_siswa')}}" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-users fa-fw mr-3"></span>
                    <span class="menu-collapsed">Siswa</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="{{Route('logout')}}" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Logout</span>
                </a>
            </div>            
           
        </ul>
    </div> <!-- End Sidebar -->

    <!-- MAIN -->
    
</body>
</html>