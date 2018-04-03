<?php
require_once "config.php";
?>

<html>
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <title><?=$titulo?></title>
	  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
	  <script src="js/jquery.js"></script>
	  <script src="js/jquery_mask.js"></script>
	  <script src="js/bootstrap.js"></script>
	  <script src="js/bootstrap-select.js"></script>
	  <script type="text/javascript">
	   $(document).ready(function(){
	     $('.time').mask('00:00:00');
	   })
	  </script>
	</head>

	<body>
	 <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a href="./" class="navbar-brand">STANDUPPRO - ABASUP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="./atletas.php">ATELETAS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./eventos.php">EVENTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./resultados.php">RESULTADOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./ranking.php">RANKING</a>
            </li>
          </ul>

          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./contato.php" target="_blank">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php" target="_blank">Quem Somos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">
     <div class="page-header" id="banner">	
       <div class="row">	
    	  <div class="col-lg-12 col-md-7 col-sm-6">	
    		  <div class="bs-component">	
    			  <div class="jumbotron">	
  					 <h1 class="display-3">Aloha!</h1>	
  					 <p class="lead">Bem-vindo ao site oficial dos resultados das competições de Standup do 	estado da Bahia.</p>					
  					 <hr class="my-4">					
  					 <p>Aqui você encontra informações sobre etapas de anos anteriores e o ranking final.</p>
				    </div>	
			    </div>
    	  </div>
       </div>
      </div>		
     </div>  
     <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="./img/evento3.jpg" src="./img/evento3.jpg" alt="Terceira Etapa">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="./img/evento2.jpg" src="./img/evento2.jpg" alt="Segunda Etapa">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="./img/evento1.jpg" src="./img/evento1.jpg" alt="Primeira Etapa 2017">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

           </div>
          </div>
          </div>
        

     <div class="container">
    	<footer id="footer">
    	    <div class="row">
    	      <div class="col-lg-12">
		        <ul class="list-unstyled">
    	          <li class="float-lg-right"><a href="#top">Back to top</a></li>
    	          <li><a href="https://github.com/agucarvalho/standuppro/">GitHub</a></li>
    	        </ul>
    	        <p>Made by <a href=".">Augusto Carvalho</a>.</p>
    	      </div>
    	    </div>
    	</footer>
  	</div>	
  </body>	

</html>




