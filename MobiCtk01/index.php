    <!DOCTYPE <!DOCTYPE html>
    <html>
    <head>
    	<title>Sistema | Imobiliário ctk 01</title>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Login:::Sistema Imobiliário ctk Exemplo 01">
        <meta name="author" content="Eduardo Alexandre">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" href="imgagens/favicon.ico">
    </head>
    <body>
          <div id="box">
          <div id="header">

          <div id="header_topo">

    	             <a href="index.php"><img src="imagens/ctkimobi_logo.png" alt="Home" title="Home" border="0" /></a>
    	         	<ul>
    	         		<li><a href="#">Comprar</a></li>
    	         		<li><a href="#">Alugar</a></li>
    	         		<li><a href="#">Anúnciar</a></li>
    	         		<li><a href="#">Fale Conosco</a></li>

    	         	</ul>
    	   </div><!--fecha a DIV topo-->
          <div id="header_navegar">
          <div id="header_navegar_central">
          <div id="header_navegar_central_anunciante">
          <form name="central_anunciante" action="" method="POST">
    	   <label>
    	           <span>Usuário:</span>
    	                 <input type="text" name="usuario"/>
        	   </label>
    	   <label>
    	           <span>Senha:</span>
    	                 <input type="password" name="senha" class="senha" />
    	   </label>
    	                 <input type="submit" name="Enviar" value="Entrar" class="btn"/>
                        <p>[Esqueci a Senha]</p>
          </form>

          </div><!--fecha div header_navegar_central_anunciante-->
          <div id="header_navegar_central_anuncie">
          <div class="header_navegar_central_anuncie">
                        <a href="#"></a>
                        <p> Anúnciar na ctkImob, é a melhor maneira de alugar ou vender seu imóvel.</p>
          </div>

          </div><!--fecha header_navegar_central_anuncia-->
          </div><!--fecha header navegar centyral-->
          <div id="header_navegar_filtro">
          <h1>Encontre seu Imóvel</h1>
          <h2>Busca Inteligente - Selecione abaixo!</h2>
          <form name="filtrar_avancado" method="post" action="">
                      <select name="tipo">
                          <option value="">Comprar ou Alugar</option>
                          <option value="">Alugar</option>
                          <option value="">Comprar</option>
                      </select>
                       <select name="categoria">
                          <option value="" disabled="disabled">Categoria do Imóvel</option>
                      </select>
                      <select name="sub-categoria">
                          <option value="" disabled="disabled">Qual Imóvel você Procura?</option>
                      </select>
                      <select name="bairro">
                          <option value="" disabled="disabled">Selecione o Bairro</option>
                      </select>
                      <span>Resultado Filtrado: 300 Imóveis</span>
                            <input type="submit" name="listar" value="Listar Imóveis" class="btn" />
          </form>

          </div><!--fecha header navegar filtro-->
          <div id="header_navegar_publicidade">
          <h1>Publicidade</h1>
    	             <a href="#"></a><img src="midias/01.jpg" alt="" title="" /></a>

          </div><!--fecha header navegar publicidade-->

          </div><!--fecha a DIV navegar-->
          <div id="imoveis_home">
          <h1>Imóveis</h1>
          <form name="busca_comun" action="" method="post">
               <label>
                       <span>Busca Comum</span>
                            <input type="text" name="s"/>
                            <input type="submit" name="Buscar" value="" class="btn" />
               </label>
          </form>
                       <ul class="lista_um">
                           <li>
                               <a href=""><img src="midias/02.jpg" alt="" title="" border="0" /></a>
                               <h2><a href="#">Residencial a Venda</a></h2>
                               <h3><a href="#">500² em Residencia</a></h3>
                               <a href="#">Veja Mais</a>
                           </li>
                           <li>
                               <a href=""><img src="midias/02.jpg" alt="" title="" border="0" /></a>
                               <h2><a href="#">Residencial a Venda</a></h2>
                               <h3><a href="#">500² em Residencia</a></h3>
                               <a href="#">Veja Mais</a>
                           </li>
                           <li>
                               <a href=""><img src="midias/02.jpg" alt="" title="" border="0" /></a>
                               <h2><a href="#">Residencial a Venda</a></h2>
                               <h3><a href="#">500² em Residencia</a></h3>
                               <a href="#">Veja Mais</a>
                           </li>
                           <li>
                               <a href=""><img src="midias/02.jpg" alt="" title="" border="0" /></a>
                               <h2><a href="#">Residencial a Venda</a></h2>
                               <h3><a href="#">500² em Residencia</a></h3>
                               <a href="#">Veja Mais</a>
                           </li>
                       </ul>
                       <ul class="lista_dois">
                           <li>
                               <a href=""><img src="midias/02.jpg" alt="" title="" border="0" /></a>
                               <h2><a href="#">Residencial a Venda</a></h2>
                               <h3><a href="#">500² em Residencia</a></h3>
                               <a href="#">Veja Mais</a>
                           </li>
                           <li>
                               <a href=""><img src="midias/02.jpg" alt="" title="" border="0" /></a>
                               <h2><a href="#">Residencial a Venda</a></h2>
                               <h3><a href="#">500² em Residencia</a></h3>
                               <a href="#">Veja Mais</a>
                           </li>
                       </ul>
          <div class="anuncie">
                               <a href=""><img src="imagens/cadastre_se.jpg" alt="" title="" border="0"/></a>
          </div><!--Classe Anuncie-->
          </div><!--fecha a DIV imoveis home-->
          <div id="imoveis_home_lista">

          </div><!--fecha a DIV imoveis home lista-->
          </div><!--fecha a DIV box-->
          <divn id="footer">
          </div><!--fecha DIV footer--->
    </body>
    </html>