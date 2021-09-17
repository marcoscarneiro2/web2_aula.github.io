	$(document).ready(function () {
		$.post('php/verifica_vaga.php', function(retorna){
			//Subtitui o valor no seletor id="conteudo"
			$("#conteudo").html(retorna);
		})
	})
