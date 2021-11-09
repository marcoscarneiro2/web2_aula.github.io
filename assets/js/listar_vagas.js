	$(document).ready(function () {
		$.post('../assets/php/verifica_vaga.php', function(retorna){
			$("#conteudo").html(retorna);
		})
	})
