
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-br"
	xml:lang="pt-br">

<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/tdefaut.css" type="text/css"
	media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/regras.js"></script>

<script type="text/javascript">
    
   			 $(document).ready(function(){
    		
    		        $("#system-message-container").show();
    		 });


			/*
   			$(document).ready(function() {
   			    $("div.desc").hide();
   			    $("input[name$='ano']").click(function() {
   			        var test = $(this).val();
   			        $("div.desc").hide();
   			        $("#" + test).show();      			   
   			     	$('input:text[name="mudar2011"]').attr('name', 'filipeta');
      			    //$('input:text[name="mudar"]').attr('name', 'filipeta');
			     	
   			    	if ($("#rd2013").attr("checked")){
   			    		$("div.btnenviar").hide();
   			    	 }else{
   			    		$("div.btnenviar").show();
   	   			   	}
   			    });
   			});
			
	

			*/


			
   			$(document).ready(function() {
   				var atual = "";

   			    
   			    $("input[name$='ano']").click(function() {
						

   			        var varAno = $(this).val();
   			     	var scntDiv = $('#inputFilipeta');
   			     	
   			     	

   			     	if ((varAno == "2011") && (atual != "2011")){
   			     		$('<div id="ano2011"><input id="ano2011" name="filipeta" type="filipeta" class="required" minlength="21" maxlength="21" size="30" /></div>').appendTo(scntDiv);
   			     		$("#ano2012").remove();
   			     		$("#ano2013").remove();		
   			     		atual = "2011";
   		   			}

   			    	if ((varAno == "2012") && (atual != "2012")){
			     		$('<div id="ano2012"><input id="ano2012" name="filipeta" type="filipeta" class="required" minlength="22" maxlength="22" size="30" /></div>').appendTo(scntDiv);
			     		$("#ano2011").remove();	
			     		$("#ano2013").remove();			     		
			     		atual = "2012";
		   			}

   			    	if ((varAno == "2013") && (atual != "2013")){
			     		$('<div id="ano2013"><input id="ano2013" name="filipeta" type="filipeta" class="required" minlength="27" maxlength="27" size="30" /></div>').appendTo(scntDiv);
			     		$("#ano2011").remove();	
			     		$("#ano2012").remove();			     		
			     		atual = "2013";
		   			}

		   			

   
   			    });
   			});
			
   		
    		 
    	</script>

</head>
<body>
	<div class="pagewidth">
				    <div id="header">
					
			         <h2><br /><br />Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, Campus Bragança Paulista</h2>
                     <h3>Emissão de certificados</h3>   
			    
			</div>			   
	</div>
	<div id="wrapper">
		<div class="pagewidth">


			<div id="left">
                        							<div class="module_menu">
								<div>
									<div>
										<div>
											<h3>Menu Principal</h3>
											<ul class="menu">
                                               	<li><a href="index.php">Inicial</a></li>
                                                <li><a href="cadastro.php">Cadastro</a></li>
                                                <li><a href="filipeta.php">Gerar certificados</a></li>
												<li><a href="validar-certificado.php">Verificar autenticidade</a></li>
                                                <li><a href="material.php">Slides e vídeos</a></li>
                                                <li><a href="pesquisa.php">Dê sua opinião</a></li>
                                                <li><a href="contato.php">Contato</a></li>
                                            </ul>
                                        </div>
									</div>			
                				</div>
							</div>	           			</div>


			<div id="main-mid">
				<div id="system-message-container">		
				   	<p class='destaqueMsg'>Dados invpados</p>  
	</div>

				<form class="cmxform" id="commentForm" method="post"
					action="certificado.php">
					<fieldset>
						<legend>Digite seu e-mail já cadastrado e todos os dígitos da
							filipeta, incluindo os pontos </legend>

						<table border="0" width="500" cellpadding="3" cellspacing="3">
							<tr>
								<td width="160"><label for="cemail">E-Mail: </label></td>
								<td width="300"><input id="cemail" type="email" name="email" size="30"
									class="required" /></td>
							</tr>
							<tr>
								<td><label for="cemail">Ano (do evento): </label></td>
								<td>
									<input type="radio" name="ano" value="2011"><span class="corBranca">2011</span> 
									<input type="radio" name="ano" value="2012"><span class="corBranca">2012</span> 									
									<input type="radio" name="ano" value="2013"><span class="corBranca">a partir de 2013</span>
								</td>
							</tr>
							<tr>
								<td><label for="cfilipeta">Filipeta: </label></td>
								<td>									
									<div id="inputFilipeta"></div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td><div class="btnenviar">
										<input class="submit" type="submit" value="Enviar" />
									</div></td>
							</tr>
						</table>


					</fieldset>
				</form>



			</div>

		</div>
	</div>



	<div id="footer_tm">
		<div class="pagewidth">
			<div class="ftb">
				Copyright© 2013 Concistec 2013 . Design by <a target=" _blank"
					href="http://bra.ifsp.edu.br/">IFSP-BRA</a>
			</div>
			<div id="top">
				<div class="top-button">
					<a href="#"><img src="images/top.png" width="22" height="22"
						alt="top" /></a>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>
