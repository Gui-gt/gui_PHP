<?php
/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/
if (isset($_POST['enviarFormulario']))
{
    /*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/

    $enviaFormularioParaNome = 'Elo Software - E-mail Website';
    $enviaFormularioParaEmail = 'elosoftware@elosoftware.com.br';

    $caixaPostalServidorNome = 'Elo Software - E-mail Website';
    $caixaPostalServidorEmail = 'elosoftware@elosoftware.com.br';
    $caixaPostalServidorSenha = 'elosoftware.elo';

    $tipo = "";

    /*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/


    /* abaixo as veriaveis principais, que devem conter em seu formulario*/

    $remetenteNome  = $_POST['remetenteNome'];
    $remetenteEmail = $_POST['remetenteEmail'];
    $telefone = $_POST['telefone'];
    $assunto  = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    if($remetenteNome == "" or $remetenteEmail == "" or $mensagem == "" or $telefone == "" or $assunto == "")
    {
        $mensagemRetorno = "Verifique se todos os campos do formulário estão preenchidos.";
        $tipo = "danger";
    }
    else
    {
        $mensagemConcatenada = 'Formulário gerado via website.'.'<br/>';
        $mensagemConcatenada .= '-------------------------------<br/><br/>';
        $mensagemConcatenada .= '<b>Nome:</b> '.$remetenteNome.'<br/>';
        $mensagemConcatenada .= '<b>E-mail</b>: '.$remetenteEmail.'<br/>';
        $mensagemConcatenada .= '<b>Telefone:</b> '.$telefone.'<br/>';
        $mensagemConcatenada .= '<b>Assunto:</b> '.$assunto.'<br/><br/>';
        $mensagemConcatenada .= '-------------------------------<br/><br/>';
        $mensagemConcatenada .= '<b>Mensagem:</b> "'.$mensagem.'"<br/>';

        require_once('PHPMailer-master/PHPMailerAutoload.php');

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Charset = 'utf8_decode()';
        $mail->Host  = 'smtps.uol.com.br';
        $mail->Port  = 587;
        $mail->SMTPAuth  = true;
        $mail->Username  = $caixaPostalServidorEmail;
        $mail->Password  = $caixaPostalServidorSenha;
        $mail->From  = $caixaPostalServidorEmail;
        $mail->FromName  = utf8_decode($caixaPostalServidorNome);
        $mail->isHTML(true);
        $mail->Subject  = utf8_decode($assunto);
        $mail->Body  = utf8_decode($mensagemConcatenada);

        $mail->addAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));

        if(!$mail->send())
        {
            $mensagemRetorno = 'Erro ao enviar e-mail!';
            $tipo = "danger";
        }
        else
        {
            $mensagemRetorno = 'E-mail enviado com sucesso!';
            $tipo = "success";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elo Software - Soluções Inovadoras</title>
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">-->

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navegação
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ELO SOFTWARE</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Início</a></li>
            <li><a href="#tf-about" class="page-scroll">Sobre</a></li>
            <li><a href="#tf-services" class="page-scroll">Serviços</a></li>
            <li><a href="#tf-contact" class="page-scroll">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Início
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1 class="sizeFontStart"><strong><span class="color">ELO SOFTWARE</span></strong></h1>
                <p class="lead"><strong>Soluções Inovadoras</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- Sobre
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>Sobre</h4>
                            <h2><strong>ELO SOFTWARE</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">A Elo Software é uma empresa atuante no mercado de desenvolvimento de sistemas desde 1988. Possui diversas soluções para diversos segmentos, tais como:</p>
						<p class="intro">Adegas, atacados, bares e similares, comércio de pneus, comércio de tintas, confecções, cosméticos e perfumarias,
                        livrarias e papelarias, lojas de bijuterias, lojas de brinquedos, lojas de calçados, lojas de conveniências e comércio em geral.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Serviços
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Serviços</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <em>Serviços disponibilizados pelo nosso sistema:</em>
            </div>
            <div class="space"></div>
            <div class="row">
				<div class="col-md-2 col-sm-2 service"></div>
                <div class="col-md-3 col-sm-2 service">
					<ul class="ul-color">
					  <li><p class="ul-text-color">Controle financeiro</p></li>
					  <li><p class="ul-text-color">Contas a receber</p></li>
					  <li><p class="ul-text-color">Contas a pagar</p></li>
					  <li><p class="ul-text-color">Emissão/Controle de boletos bancários</p></li>
					  <li><p class="ul-text-color">Conciliação bancária</p></li>
					  <li><p class="ul-text-color">Controle de caixa</p></li>
					</ul>
                </div>
				<div class="col-md-3 col-sm-2 service">
					<ul class="ul-color">
					  <li><p class="ul-text-color">Controle de estoque</p></li>
					  <li><p class="ul-text-color">Faturamento</p></li>
					  <li><p class="ul-text-color">Orçamento de venda</p></li>
					  <li><p class="ul-text-color">Pedido de venda</p></li>
					  <li><p class="ul-text-color">Orçamento de compra</p></li>
					  <li><p class="ul-text-color">Ordem de compra</p></li>
					  
					</ul>
                </div>
				<div class="col-md-3 col-sm-2 service">
					<ul class="ul-color">
					  <li><p class="ul-text-color">NF-e, NFC-e</p></li>
					  <li><p class="ul-text-color">CT-e, MDF-e</p></li>
					  <li><p class="ul-text-color">Manifesto</p></li>
					  <li><p class="ul-text-color">Controle de acesso</p></li>
					  <li><p class="ul-text-color">Envio/Controle de e-mails</p></li>
					  <li><p class="ul-text-color">Backup Online</p></li>
					  <li><p class="ul-text-color">Atualização online</p></li>
					  
                      
					 
					</ul>
                </div>				
            </div>
        </div>
    </div>
	
			
    <!-- Contato
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2><strong>Contato</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
						
						<address>
						  elosoftware@elosoftware.com.br<br>
						  Av. Tiradentes, 957 - Sala 2<br>
						  Rolândia, Paraná<br>
						  (43) 3051-5656
						</address>
                        <em><p>Entre em contato conosco através deste formulário.</em>
                    </div>

                    <form name="enviar" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="remetenteNome" id="remetenteNome" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="remetenteEmail" id="remetenteEmail" placeholder="Digite seu email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="number" class="form-control" name="telefone" id="telefone" placeholder="Digite seu telefone">
                                </div>
                                <div>
                                    <label for="assunto">Assunto</label>
                                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Digite o assunto">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="enviarFormulario" id="enviarFormulario" class="btn tf-btn btn-default">Enviar</button>
                            <br/>
                            <br/>
                        </div>
                        <!-- Mensagem retorno PHP -->
                        <?php
                            if (isset($_POST['enviarFormulario']))
                            {
                                echo "<div class='form-groupo'>".
                                        "<div class='alert alert-{$tipo}'>".
                                            $mensagemRetorno.
                                        "</div>".
                                     "</div>";
                            }
                        ?>
                        <!-- FIM -->
                    </form>
                </div>

            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-center fnav">
				<p class="text-center"> &copy Elo Software 2024</p>
			</div>
        </div>
    </nav>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascript
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>