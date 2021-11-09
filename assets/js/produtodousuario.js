$(document).ready(function () {
    $.post('php/listarprodutodousuario.php', function(retorna){
        //Subtitui o valor no seletor id="conteudo"
        $("#conteudo").html(retorna);
    })
})
