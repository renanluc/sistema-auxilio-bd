<?php
	include "template/topo.php";	
	include "template/menu.php";
	$cod_questao = $_POST['cod_questao'];
	$enunciado = $_POST['enunciado'];
?>        

<div id="content">
	<div id="caixa">
	<?php
	if($con){
	$sql = "UPDATE questao set 
					enunciado = '$enunciado'
				WHERE cod_questao = $cod_questao;";		
		$rs = mysql_query($sql, $con);
		if($rs){
			echo "<h1>Questão atualizada com sucesso.</h1>";
		}
		else{
			echo "Erro de alteração: ".mysql_error();
		}
	} else{
		echo "Erro de conexão: ".mysql_error();
	}
	?>
	</div>
</div>

<?php
	include "template/rodape.php";	
?>