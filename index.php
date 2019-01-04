<html>
<head>
	<meta charset="UTF-8">
	<title>Responsiviade</title>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css?version=12">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="asset/js/script.js"></script>
</head>
<body>
<header>
	<div class="top">
		<div class="container">
			<!-- Conteudo do menu superior-->
			<div class="topLeft">
				<nav>
					<ul>
						<li><a href="#" class="ativo">Home</a></li>
						<li><a href="#">Quem somos</a></li>
						<li><a href="#">Anuncie aqui</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</nav>

			</div>
			<div class="topRight">
				<!-- Campo de busca-->
				<input type="image" src="asset/image/lupa.svg" name="busca" border = "0" width="26px" height="26px" title="Buscar no site">
				<input type="texte" name="busca" placeholder="Buscar por..." class="topBusca">
				
				<!--Botões de midia social-->
				<a href=""><img src="asset/image/Twitter2.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
				<a href=""><img src="asset/image/youtube.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
				<a href=""><img src="asset/image/facebook.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
				<a href=""><img src="asset/image/google_plus.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
				<a href=""><img src="asset/image/rss3.png" border="0" width="26px" height="26px" title="icon-social-media"></a>

				
			</div>	
		</div> <!-- Fim do container-->
	</div> <!-- fim do top -->		

<div class="topBanner">
	<div class="container">

		<div class="titulo">
			<a href="index.php"><img src="asset/image/portal_logo_website_dark.png" width="230px" border="0"></a>
		</div>
		<div class="bannerAnuncio">
			<h1>PUBLICIDADE 728x90px</h1>
		</div>
		
	</div>
</div> <!-- Fim do banner 2-->
<div class="menu">
	<div class="container">
		<img src="asset/image/menu.svg" width="60px" height="60px" class="menuMobile"  onclick="toggleMenu()">
		<nav id="menu">
			<ul id="menu2" ">
				<li class="active-menu"><a href = "#">Home</li></a>
				<li><a href = "#">Economia</a></li>
				<li><a href = "#">Entretenimento</a>
					<i class="fas fa-sort-down"></i>
				<div div class="subMenu">
						<ul class="sub-item-menu">
							<li class="itList"><a href="#"> sub-menu1</a></li>
							<li class="itList"><a href="#"> sub-menu1</a></li>
							<li class="itList"><a href="#"> sub-menu1</a></li>
						</ul>
						
				</div>

				</li>
				<li><a href = "#">Esportes</a>
					<i class="fas fa-sort-down"></i>
					<div div class="subMenu">
						<ul class="sub-item-menu">
							<li class="itList"><a href="#"> sub-menu2</a></li>
							<li class="itList"><a href="#"> sub-menu2</a></li>
							<li class="itList"><a href="#"> sub-menu2</a></li>
						</ul>
					</div>
				</li>
				<li><a href = "#">Geral</a></li>
				<li>
					<a href = "#">Noticias</a>
					<i class="fas fa-sort-down"></i>
					<div div class="subMenu">
						<ul class="sub-item-menu">
							<li class="itList"><a href="#" > sub-menu3</a></li>
							<li class="itList" ><a href="#"> sub-menu3</a></li>
							<li class="itList" ><a href="#"> sub-menu3</a></li>
						</ul>
					</div>
				</li>
				<li><a href="#">Policia</a></li>
				<li><a href="#">Videos</a></li>

			</ul>	
		</nav>
	</div><!-- fim do container-->
</div><!-- Fim do menu-->

</header>
	<!--Fim do conteudo do top-->
<div class="container">
	<section> <!-- Incio do conteudo do corpo-->
		<div class="ultimasNoticias">
				<div class="intUltimasNoticias">
					<div class="news">
						<div class="tituloNews">
							ÚLTIMAS NOTICIAS
						</div>
						<div class="newsInt">
							Ultimas noticias serão exebidas aqui
						</div>	

					</div>
				</div>
		</div><!-- Fim do ultimas noticias-->
		<div class="conteudoPrincipal">
			<div class="slideshow" id="slideshow" >
					<div class="slideControler">
						<div class="circle" onclick="mudarSlide(0)"></div>
						<div class="circle" onclick="mudarSlide(1)"></div>
						<div class="circle" onclick="mudarSlide(2)"></div>
						<div class="circle" onclick="mudarSlide(3)"></div>
					</div>
					<div class="slideshow-area" >
						<div class="slide" style = "background-image: url('asset/image/belize-web-developer.jpg');">
							<div class="slideInfo">
								<div class="slideInfoTitulo">Titulo de teste do slide show </div>
								<div class="slideInfoSubtitulo">Conteudo da noticia do slide show</div>

							</div>
							
						</div>
						<div class="slide" style = "background-image: url('asset/image/Web-Designer-x-Web-Developer-c-sem-sombra.png');">
							<div class="slideInfo">
								<div class="slideInfoTitulo">Titulo de teste do slide show </div>
								<div class="slideInfoSubtitulo">Conteudo da noticia do slide show</div>

							</div>
						</div>
						<div class="slide" style = "background-image: url('asset/image/saiba-como-se-tornar-um-desenvolvedor-mobile.jpg');">
							<div class="slideInfo">
								<div class="slideInfoTitulo">Titulo de teste do slide show </div>
								<div class="slideInfoSubtitulo">Conteudo da noticia do slide show</div>

							</div>
						</div>
						<div class="slide" style = "background-image: url('asset/image/1.ffrCHZV35jeXDw5ck7yF0A.jpeg');">
							<div class="slideInfo">
								<div class="slideInfoTitulo">Titulo de teste do slide show </div>
								<div class="slideInfoSubtitulo">Conteudo da noticia do slide show</div>

							</div>
						</div>
						
					</div> <!-- Fim do slide show area - modulo que movimenta-->
				</div> <!--fim do container slide show-->

			<div class="widget">
				<div class="widgetTitulo">NOTICIAS</div>
					<div class="widgetCorpo">
						<div class="notPrincipal">
							 
							 <div class="notMiniatura noticiaBig">
								<div class="notImage">
									<img src="asset/image/artificial-intelligence.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia essa informação fica em destaque para noticias mais relevantes</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>

						</div>	
						<div class="notSecundaria">
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
			</div>

				<!-- Segunda area de noticias-->

			<div class="widget">
				<div class="widgetTitulo">NOTICIAS</div>
					<div class="widgetCorpo">
						<div class="notPrincipal">
							 
							 <div class="notMiniatura noticiaBig">
								<div class="notImage">
									<img src="asset/image/artificial-intelligence.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia essa informação fica em destaque para noticias mais relevantes</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>

						</div>	
						<div class="notSecundaria">
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
							<div class="notMiniatura">
								<div class="notImage">
									<img src="asset/image/32-es6.jpg" border="0" width="80" height="80">
								</div>
								<div class="notTitulo">Titulo da noticia</div>
								<div class="notInfo">Informação da noticia em miniatura</div>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
			</div>


			</div> <!-- fim do conteudo principal-->
	</section>

	<aside>
		<div class="conteudoLaterial">
			<div class="widget">
				<div class="widgetTitulo">SOCIAL</div>
				<div class="widgetCorpo">
					<a href=""><img src="asset/image/Twitter2.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
					<a href=""><img src="asset/image/youtube.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
					<a href=""><img src="asset/image/facebook.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
					<a href=""><img src="asset/image/google_plus.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
					<a href=""><img src="asset/image/rss3.png" border="0" width="26px" height="26px" title="icon-social-media"></a>
				</div>
			</div>
			<div class="widget">
				<div class="widgetTitulo">ÚLTIMAS NOTICIAS</div>
					<div class="widgetCorpo">
						<div class="noticiaItem">
							<a href="#"><p>Noticias vistas de manteira a ficar um acima da outra apenas com um borda, bolsonaro 2018</p></a>
						</div>	
						<div class="noticiaItem">
							<a href="#"><p>Noticias vistas de manteira a ficar um acima da outra apenas com um borda, bolsonaro 2018</p></a>
						</div>	
						<div class="noticiaItem">
							<a href="#"><p>Noticias vistas de manteira a ficar um acima da outra apenas com um borda, bolsonaro 2018</p></a>
						</div>	
					</div>
			</div>
			<div class="widget">
				<div class="widgetTitulo">
					PUBLICIDADE
				</div>
					<div class="widgetCorpo">

						<img src="asset/image/logo-oito-anos.png" alt="Banner Publicitario" border="0px" width="263px"> 

					</div>
			</div>
			<div class="widget">
				<div class="widgetTitulo">ENCONTRE-NOS NO FACEBOOK</div>
				<div class="widgetCorpo">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FColegioAnchietaRecife%2F&tabs&width=263&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="263" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

				</div>
			</div>
		</div>
	</aside>
</div><!--Container pricipal-->
</body>
</html>