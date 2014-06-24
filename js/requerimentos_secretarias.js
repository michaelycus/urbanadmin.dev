// funcao para retornar os requerimentos conforme o mapa é clicado

$(function() {    
    $("#id_bairro").change(function() {

        bairro = $(this).val();
        secretaria = $("#secretaria").val();

        if (bairro === '')
            return false;

        $("#table-mapa-requerimentos-secretarias tr").remove(); 

        $.getJSON(path + 'requerimentos/get_requerimentos_secretarias_ajax/'+secretaria+'/'+bairro, function(data) {

            count = 1;
            $.each(data, function(i, obj) {                
                $('table[id="table-mapa-requerimentos-secretarias"]').append('<tr><td> ('+count++ +') <a href="'+path+'requerimentos/visualizar/'+obj.id+'" target="_blank">'+obj.descricao+'</a></td></tr>');
            });
        });
    });
});