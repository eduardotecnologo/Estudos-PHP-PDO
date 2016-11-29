<?php

include_once("header.php");

?>

<section>
	
	<div class="container" id="destaque-produtos-container">
		
		<div id="destaque-produtos">

		<div class="col-sm-6 col-imagem">
					<img src="img/produtos/<?=$produto['foto_principal']?>" alt="<?=$produto['nome_prod_longo']?>">
				</div>
				<div class="col-sm-6 col-descricao">

				<h2><?=$produto['nome_prod_longo']?></h2>

				<div class="box-valor">

					<div class="text-noboleto text-arial-cinza">No boleto</div>
					<div class="text-por text-arial-cinza">Por</div>
					<div class="text-reais text-gren">R$</div>
					<div class="text-valor text-gren"><?=$produto['preco']?></div>
					<div class="text-valor-centavos text-gren">,<?=$produto['centavos']?></div>
					<div class="text-parcelas text-arial-cinza">ou em até <?=$produto['parcelas']?>x de R$ <?=$produto['parcela']?></div>
					<div class="text-total text-arial-cinza">total a prazo <?=$produto['total']?></div>
				</div>
			<a href="#" class="btn btn-comprar text-gren"><i class="fa fa-shopping-cart"></i>Compre agora.</a>
			</div>
			
			
	</div>
</div>

</section>

<?php 

	include_once("footer.php");

?>