<!DOCTYPE html>
<html lang="en">
<head>
     <!-- meta's Etiquetas -->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="author" content="pardalispboutiquedigitalcreativa">
     <meta name="description" content="hju">
     <meta name="keywords" content="hju">
     <meta name="robots" content="index, follow">
     <!-- favicon -->
     <link rel="icon" href="resources/img/icosPage/favicon.png">
     <!-- stylesheet framework -->
     <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/bootstrap.min.css" media="all">
     <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap/normalize.min.css" media="all">
     <!-- stylesheet plugins-->
     <link rel="stylesheet" type="text/css" href="plugins/LoadPage/loader_page.css" media="all">
     <link rel="stylesheet" type="text/css" href="plugins/select/bootstrap-select.css" media="all">
     <!-- stylesheet page -->
     <link rel="stylesheet" type="text/css" href="css/page/index.min.css" media="all">
     <!--fonts -->
     <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
     <!-- icos -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--  javascript  framework-->
     <script type="text/javascript" src="js/vendor/jquery.min.js"></script>
     <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>
     <script type="text/javascript" src="js/vendor/popper/popper.min.js"></script>
     <script type="text/javascript" src="js/vendor/bootstrap/bootstrap.min.js"></script>
     <!--  javascript plugins -->
     <script type="text/javascript" src="plugins/LoadPage/loader_page.js"></script>
     <script type="text/javascript" src="plugins/select/bootstrap-select.js"></script>
     <!-- Etiqueta tittle -->
     <title>Home</title>
</head>
<body>
     <!-- Section header -->
     <header class="header">
          <div class="container-fluid">
               <div class="row align-items-center">
                    <div class="col-12" id="logo">
                         <a href="../index.php">
                              <img src="resources/img/logo/Logo_2018.png" class="img-fluid rounded mx-auto d-block img-logo" alt="logo">
                         </a>
                    </div>
               </div>
          </div>
     </header>
     <!-- section nav -->
     <nav class="navbar sticky-top navbar-expand-lg bg-blue ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"><i class="material-icons icoStyle">menu</i></span>
          </button>
          <div class="search d-inline d-sm-inline d-md-inline d-lg-none">
               <div class="input-group">
                    <div class="input-group-prepend">
                         <button class="btn btn-search" type="submit"><i class="material-icons iconsSearch">search</i></button>
                    </div>
                    <input type="search" class="form-control inputSearch" placeholder="¿Qué buscas?" aria-label="Search" aria-describedby="basic-addon1">
               </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav" align="center">
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link active " href="../index.php"><h1>Home</h1><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link " href="../html/quienesSomos.php"><h1>Quienes somos</h1></a>
                    </li>
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link" href="../html/servicios.php"><h1>Servicios</h1></a>
                    </li>
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link" href="../html/asesores.php"><h1>Asesores</h1></a>
                    </li>
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link " href="../html/preguntasF.php"><h1>Preguntas frecuentes</h1></a>
                    </li>
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link disabled " href="../html/trabajeconNosotros.php"  aria-disabled="true"><h1>Trabaja con nosotros</h1></a>
                    </li>
                    <li class="nav-item itemNavPrincipal">
                         <a class="nav-link " href="../html/contacto.php"><h1>Contacto</h1></a>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-item itemNavPrincipal d-inline d-sm-inline d-md-inline d-lg-none">
                         <a class="nav-link " href="#"><h1>Login</h1></a>
                    </li>
               </ul>
               <div class="search d-none d-sm-none d-md-none d-lg-block ">
                    <div class="input-group">
                         <div class="input-group-prepend">
                              <button class="btn btn-search" type="submit"><i class="material-icons">search</i></button>
                         </div>
                         <input type="search" class="form-control" placeholder="¿Qué buscas?" aria-label="Search" aria-describedby="basic-addon1">
                    </div>
               </div>
               <div class="login d-none d-sm-none d-md-none d-lg-block">
                    <a class="btn btn-login" href="#" role="button"><i class="material-icons">account_circle</i></a>
               </div>
          </div>
     </nav>
