<?php 
	
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Login</title>
      <!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/font-awesome/font-awesome.min.css">

      <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    </head>
  	<body>
  		<div class="container">
        <div class="row">
          <div class="banner col-md-9">
            <div class="row">
              <div class="col-md-5 info-side">
                <div class="container" style="margin-top: 5%;">
                  <div class="logo">
                   
                  </div>
                  <div class="welcome">
                    <h2 align="center" class="text-white">Olá Pessoinha!</h2>
                    <p align="center" class="text-white">Onde Você Quer Chegar?</p>
                    <div class="message-login">
                      <p align="justify" class="text-white">
                        "Você pode ficar parado imaginando como seria, ou lutar e ver como será transformar seus sonhos em realidade."
                      </p>
                    </div>
                    <div class="services">
                      <ul class="list-group">
                        <li><i class="fas fa-circle"></i>&emsp;Blá mais curto</li>
                        <li><i class="fas fa-circle"></i>&emsp;Blá Blá Blá mais longo</li>
                        <li><i class="fas fa-circle"></i>&emsp;Sem Blá Blá Blá</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-7 actions-side" style="">
                <div class="container" style="margin-top: 50px; margin-left: 5%;">
                  <div class="row">
                    <div class="col-md-12">
                      <h4>Login</h4>
                    </div>
                  </div>
                  <form method="post" action="login" style="margin-top: 50px;">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Usuário</label>
                          <input type="text" name="usuario" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Senha</label>
                          <input type="password" name="senha" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 offset-md-8">
                        <button type="submit" name="logar" class="btn btn-dark btn-block">Logar</button>
                      </div>
                    </div>
                  </form>
                  <div class="row" style="margin-top: 50px;">
                    <div class="col-md-12">
                      <p align="center">
                        <a class="text-dark" href="#">Ainda não sou cadastrado</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>			
  		</div>
    	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
  	</body>
</html>