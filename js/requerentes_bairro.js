// funcao para retornar os requentes conforme o mapa é clicado

$(function() {    
    $("#id_bairro").change(function() {

        bairro = $(this).val();

        if (bairro === '')
            return false;

        $("#table-mapa-requerentes tr").remove(); 

        $.getJSON(path + 'requerentes/get_requerentes_ajax/'+bairro, function(data) {

            $.each(data, function(i, obj) {                
                $('table[id="table-mapa-requerentes"]').append('<tr><td><a href="'+path+'requerentes/visualizar/'+obj.id+'" target="_blank">'+obj.nome+'</a></td></tr>');
            });
        });
    });
});