<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset = "UTF-8">
		<title>TSSofrtwoks</title>
		<link href = "CSS/estiloTSS.css" type = "text/css" rel = "stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>	
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet"> 

		
	</head>
	
	<body> 
	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="109605594280760"
  theme_color="#0A7CFF"
  logged_in_greeting="¡Hola! Deja tu mensaje y con gusto te responderemos"
  logged_out_greeting="¡Hola! Deja tu mensaje y con gusto te responderemos">
      </div>
	  
		<header id = "header">
			
			<img src = "Media/Imagenes/TSSNLOGO.png" id = "TSSLOGO"/>
			<div id = "T">
				
				<div id = "subB1">			
						   <a href = "3.php"><button id = "Button1" class = "B" onClick = "">Conocenos</button></a>
			         	   <a href = "7.php"><button class = "B" onClick = "">Soporte</button></a>
			         	   <a href = "5.php"><button class = "B" onClick = "">Noticias</button></a>
			         	   <a href = "4.php"><button class = "B" onClick = "">Juegos</button></a><br/>
				</div>  
			    <div id  = "B0">
			         	   <a href = "1.php"><button class = "B0" onClick = "">Inicio</button></a>
			         	   <a href = "2.php"><button class = "B0" onClick = "">FAQ</button></a>
			         	   <a href = "6.php"><button class = "B0" onClick = "">Contacto</button></a>
			         </div>
			</div>

			<div id = "B1">
			         	  <p id = "slogan">We make games you don't yet know</br></br></p> 
			         	  
						  
						 <div class = "Container">
						   <button id = "Button1" class = "H1" onClick = ""><img src = "Media/Imagenes/RandomRunnerIconCF.png" id = "cs"/></button>
			         	   <button class = "H1" onClick = ""><img src = "Media/Imagenes/Palmas.png" id = "cs"/></button>
			         	   <button class = "H1" onClick = ""><img src = "Media/Imagenes/LogoAntologia.png" id = "cs"/></button>
						</div>
						     
			         </div>
			
		</header>	
			
			<div id = "Main">
				<script>
					window.fbAsyncInit = function() {
					FB.init({
						appId      : '95100348886',
						xfbml      : true,
						version    : 'v2.6'
					});
					};
				
					(function(d, s, id){
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) {return;}
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js";
					fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
					<div id = "slogan">
						<p>Dejanos tu queja o sugerencia a nuestra pagina de facebook.<p>
					</div>
				<div class="fb-page" id = "fb-msg"
						data-href="https://www.facebook.com/109605594280760/"
						data-tabs="messages"
						data-width="750"
						data-height="350"
						data-small-header="true">
					<div class="fb-xfbml-parse-ignore">
					<blockquote></blockquote>
					</div>
				</div>
				
				<div class="fb-messengermessageus" 
  messenger_app_id="<APP_ID>" 
  page_id="<PAGE_ID>"
  color="<blue | white>"
  size="<standard | large | xlarge>">
</div>
				
		</div>
		

    
		<div id = "foter">
			<div id = "bottombuttons">
				<a href = "#">Inicio</a>
				<a href = "#">Terminos</a>
				<a href = "#">Productos</a>
				<a href = "#">FAQ</a>
			</div>
			<div id = "ft">Team Salchicha Softworks, TSS y derivados son propiedad de sus creadores. Todos los derechos reservados. Todas las demas marcas registradas son propiedad de sus respectivos dueños. Team Salchicha Softworks, Ciudad Mante, Tamaulipas, Mexico. Calle Cuahutemoc #206, Col. Altavista. Cualquier queja o sugerencia favor de dirigirse a la pagina oficial de Facebook o a nuestro correco electronico: TSSoftworks@gmail.com. Esta pagina esta hecha con un proposito educativo y no representa un producto final de Team Salchicha Softworks. </div>
		</div>
		
		
	</body>
</html>
		