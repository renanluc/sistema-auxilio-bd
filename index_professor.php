<?php
	include "template/topo.php";	
	include "template/menu_professor.php";
?>        

<div id="content">
	<div id="caixa">
	<?php
		if($con){
			?>
			<div id="index">
				<?php $sql = "SELECT u.cod_usuario, u.login, u.senha, p.nome FROM usuario as u INNER JOIN professor as p WHERE u.login = '".$_SESSION['login']."';";
				$rs = mysql_query($sql, $con);
				if($rs){
					while ($valor = mysql_fetch_array($rs)){
						echo "<H1>Bem Vindo(a) ".$valor['nome']."!</H1>";
					}
				}
				?>
			</div>
			<?php
		}
		else{
			echo "Erro de conexão: ".mysql_error();
		}
		?>
	</div>
</div>

<?php
	include "template/rodape.php";	
?>