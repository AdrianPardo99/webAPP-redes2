
<script src="/js/fonts.js" crossorigin="anonymous"></script>
<link href="/css/font-awesome.css" media="all" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<script type = "text/javascript" src = "/js/jquery-3.4.1.min.js"></script>
<script type = "text/javascript" src="/js/materialize.js"></script>
<link href="/css/icon.css" rel="stylesheet">

</head>
<body>
  <header>
     <nav class="row grey darken-3 col s12 l12 m12">
       <div class="col s12 l12 m12 nav-wrapper">
         <a href="#!" class="brand-logo center"><img src="/img/logoEscom2.png" alt="" class="responsive-img" width="15%"></a>
         <a href="#" data-target="mobile-demo" class="sidenav-trigger">
           <i class="fas fa-bars"></i>
         </a>
         <ul class="nav nav-justified right hide-on-med-and-down " id="nav-mobile">
           <?php
             $path=($var=="index")?("bash ./script.sh ./"):("bash ../script.sh ../");
             $salida = shell_exec($path);
             echo "$salida";
            ?>
         </ul>
       </div>
     </nav>
     <ul class="sidenav" id="mobile-demo">
       <?php
           $path=($var=="index")?("bash ./script.sh ./"):("bash ../script.sh ../");
           $salida = shell_exec($path);
           echo "$salida";
        ?>
     </ul>
   </header>
