<?php
$orcamento = 0;
@$orcamento = $_REQUEST['orcamento'];
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=defice-width, initial-scale=1.0">
	<meta name="author" content="Mauricio Carvalho">
	<meta name="description" content="Assistência técnica de celulares">
	<meta name="keywords" content="Celulares, Conserto, Smartphones, Assistência">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript/jquery-3.2.1.min.js"></script>
    <script src="javascript/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="icon" href="imagens/logojeffcell.png" type="image/x-png"/>
    
    <title>JeffCell - Orçamamento Online</title>
    <script>
        $(document).ready(function(e){
             $('#reverterM').click( reverterObjetoM);
           
        });
         function reverterObjetoM() {
           
        $('#bdy').hide(0);
        
        }
    </script>

    </head>
    <body>
         <?php
            if($orcamento == 'enviado'){
             echo "<script>
                        swal({
                        title: 'Enviado com Sucesso!',
                        text: 'Nós entraremos em contato o mais rápido possível!',
                        icon: 'success',
                        button: 'Ok',});
                    </script>";
            }
        ?>
       
    <header>
        <div class="logo">
           <a href="index.html">
               <img class ="logolg2" src="imagens/logolg2.png">
            </a>
        </div>
            <a href="#voltar"></a>
        <nav>
            <ul> 
                <li><a href="index.html" id="reverterI">Inicio</a></li>
                <li><a href="orcamento.php" id="orcamento">Orçamento</a></li>
                <li><a href="https://www.google.com/maps/place/R.+Cl%C3%A1udio+Savieto,+802+-+Jardim+Zaira,+Mau%C3%A1+-+SP,+09320-450/@-23.6565296,-46.4376081,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce6eb3c1480681:0x3947314021e7a671!8m2!3d-23.6565296!4d-46.4354194">Localização</a></li>
                <li><a href="#contato" id="reverterC">Contato</a></li>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fas fa-bars" id="reverterM"></i></div>
     </header>
        <section>
            <div class="container" id="boxform">
                <div class="formBox">
                    <div class="col-sm-12">
                        <h1>Orçamento Online </h1>
                    </div>
                    
                    <form action="processaForm.php" method="post">
                    <!--nome-->
                     <div class="col-sm-12 col-lg-12">
                         <div class="inputBox">
                             <label class="inputText name" for="nome" id="name">Nome</label>
                             <input type="text" id="nome" name="nome" class="input" required autofocus>
                         </div>
                    </div>
                        <!--telefone-->
                        
                    <div class="col-sm-12 col-lg-12">
                        <div class="inputBox">
                                 <label class="inputText" for="telefone">Telefone</label>
                           <input class="input" type="tel" name="telefone" id="telefone" maxlength="11" required autofocus>
                        </div>
                    </div>
                        <!--Email-->
                    <div class="col-sm-12 col-lg-12">
                            <div class="inputBox">
                                      <label class="inputText" for="email">Email</label>
        	                   <input type="email" name="email" id="email"  maxlength="60" class="input" required autofocus>
                            </div>
                    </div>
                        
                        <!--marca-->
                        
                    <div class="col-sm-12 col-lg-12">
                             <div class="inputBox">
                                     <label class="inputText" for="marca">Marca</label>
                                 <input type="text"  list="marcas" name="marca" id="marca" class="input" required autofocus>
                               <datalist id="marcas">
                                <option value="Apple Iphone">Apple Iphone</option>
                                <option value="Alcatel">Alcatel</option>
                                <option value="Asus">Asus</option>
                                <option value="Blu">Blu</option>
                                <option value="Cce">Cce</option>
                                <option value="Motorola Lenovo">Motorola Lenovo</option>
                                <option value="Nokia">Nokia</option>
                                <option value="Microsoft">Microsoft</option>
                                <option value="Sony">Sony</option>
                                <option value="Sansung">Sansung</option>
                                <option value="Windows Fone">Windows Fone</option>
                                <option value="Xiaomi">Xiaomi</option>
                                <option value="ZTE">ZTE</option>
                                <option value="Outros">Outros</option>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12">
                            <div class="inputBox">
                                     <label class="inputText" for="modelo">Modelo</label>
                            <input type="text" name="modelo" class="input" class="input" required autofocus id="modelo">
                            </div>
                        </div>
                        
                        <!--Defeito-->
                        
                        <div class="col-sm-12 col-lg-12">
                             <div class="inputBox"> 
                                     <label class="inputText" for="defeito">Defeito</label>
                                <input type="text"  list="defeitos" name="defeito" id="defeito"  class="input" required autofocus>
                               <datalist id="defeitos">
                                <option value="Não Liga">Não Liga</option>
                                <option value="Tela Quebrada">Tela Quebrada</option>
                                <option value="Não Aparece Imagem na Tela">Não Aparece Imagem na Tela</option>
                                <option value="Manchas na Tela">Manchas na Tela</option>
                                <option value="Touch Screen Quebrado">Touch Screen Quebrado</option>
                                <option value="Celular Molhou">Celular Molhou</option>
                                <option value="Não Funciona Wi-fi">Não Funciona Wi-fi</option>
                                <option value="Não Funciona Câmera Frontal">Não Funciona Câmera Frontal</option>
                                <option value="Não Funciona Câmera Traseira">Não Funciona Câmera Traseira</option>
                                <option value="Botão Home">Botão Home</option>
                                <option value="Botão de Ligar">Botão de Ligar</option>
                                <option value="Botão de Volume">Botão de Volume</option>
                                <option value="Não tem Sinal de Operadora">Não tem Sinal de Operadora</option>
                                <option value="Não Carrega">Não Carrega</option>
                                <option value="Desligando Sozinho">Desligando Sozinho</option>
                                <option value="Travado">Travado</option>
                                <option value="Com Erros de Aplicativo">Com Erros de Aplicativo</option>
                                <option value="Não Reconhece Chip">Não Reconhece Chip</option>
                                <option value="Descarregando Rápido">Descarregando Rápido</option>
                                <option value="Eu não Escuto Ligações">Eu não Escuto Ligações</option>
                                <option value="Não me Escutam em Ligações">Não me Escutam em Ligações</option>
                                <option value="Não Toca Música">Não Toca Música</option>
                                <option value="Não Funciona Viva Voz">Não Funciona Viva Voz</option>
                                <option value="Outros">Outros</option>   
                                </datalist>
                            </div>
                        </div>
                        
                       
                        <!--Estado-->
                        <div class="col-sm-12 col-lg-12">
                             <div class="inputBox">
                                 <label class="inputText" for="estado">Estado</label>
                                <input type="text"  list="estados" name="estado" id="estado" class="input" required autofocus>
                                    <datalist id="estados">
                                          <option value="São Paulo">São Paulo</option> 
                                    </datalist>
                            </div>
                        </div>
                        
                        <!--Cidade-->
                        
                        <div class="col-sm-12 col-lg-12">
                             <div class="inputBox">
                                <label class="inputText" for="cidade">Cidade</label>
                                <input type="text"  list="cidades" name="cidade" id="cidade" class="input" required autofocus>
                            </div>
                        </div>
                        
                        <!--Bairro-->
                        
                         <div class="col-sm-12 col-lg-12">
                             <label class="inputText" for="bairro">Bairro</label>
                            <input type="text"  list="bairros" name="bairro" id="bairros" class="input" required autofocus>
                        </div>
                        
                        <!--mensagem-->
                        
                        <div class="col-sm-12 col-lg-12">
                             <div class="inputBox">
                                <textarea type="text" name="observacao" id="observacao" placeholder="Observações" maxlength="200" autofocus></textarea>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-lg-12">
                            <input type="submit" value="Enviar" name="enviar" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        
        

                <footer class="container-fluid text-center">
                    <div  class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="foot">

                                <a href="+551194149-5581"><h4><i class="fab fa-whatsapp"></i>11 94149-5581</h4></a>
                                 <h3>Contato</h3>
                                 <span id="contato"></span>
                            </div>
                        </div>

                         <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="foot">
                                 <a href="https://www.facebook.com/jeffersonjardi/"><i class="fab fa-facebook-f"></i></a>
                         <a href="https://www.instagram.com/jeffersondesouzajardim/"><i class="fab fa-instagram"></i></a>
                          <a href="https://www.youtube.com/channel/UCPkR1H5GE66Hp7QRMkuaIuQ"><i class="fab fa-youtube"></i></a>
                                 <h3>Mídias</h3>
                            </div>
                            </div>

                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="foot">
                                    <div class="pag">
                                        <img src="imagens/visa_master.png">
                                    </div>
                                 <h3>Pagamento</h3>
                                </div>
                            </div>

                        </div>
                    
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="cop">
                        <p> <small> &copy Copyright 2019 </small> </p> 
                        <p><small>JeffCell - Assistência Técnica.</small></p>
                    </div>
            </footer>   
    </body>
</html>