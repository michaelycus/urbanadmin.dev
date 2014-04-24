// funcao para retornar os requerimentos conforme o mapa é clicado

$(function() {    
    $("#id_bairro").change(function() {

        bairro = $(this).val();

        if (bairro === '')
            return false;

        $("#table-mapa-requerimentos tr").remove(); 

        $.getJSON(path + 'requerimentos/get_requerimentos_ajax/'+bairro, function(data) {

            $.each(data, function(i, obj) {                
                $('table[id="table-mapa-requerimentos"]').append('<tr><td><a href="'+path+'requerimentos/visualizar/'+obj.id+'" target="_blank">'+obj.descricao+'</a></td></tr>');
            });
        });
    });
});