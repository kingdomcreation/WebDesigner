<?php defined('PHP_') OR die('Locking direct access to script');
  ?><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/glyphicon.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> 
    -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- CSS -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container">

<?php index($data, $index); ?>  

  </div>

    
    <script>
        var data = <?php echo json($data); ?>

    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- Latest compiled and minified JavaScript 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    -->

    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    
    <!-- JavaScript Client -->
    <script>
    window.client=function(){
        client.q.push(arguments)
    };
    client.q=[];
    client.d=+new Date;
    client('send',{});
    client('init');
    </script>
    <script src="/js/main.js"></script>
