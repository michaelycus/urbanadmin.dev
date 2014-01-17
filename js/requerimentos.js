// funcao para retornar os requerimentos conforme o mapa é clicado

$(function() {    
    $("#id_bairro").change(function() {

        bairro = $(this).val();

        if (bairro === '')
            return false;

        $("#table-mapa-requerimentos tr").remove(); 

        $.getJSON(path + '/cep/getRequerimentos/'+bairro, function(data) {

            $.each(data, function(i, obj) {                
//                $('ul[name="lista_requerimentos"]').append('<li><a href="'+path+'requerimentos/visualizar/'+obj.id+'" target="_blank">'+obj.descricao+'</a></li>');
                $('table[id="table-mapa-requerimentos"]').append('<tr><td><a href="'+path+'requerimentos/visualizar/'+obj.id+'" target="_blank">'+obj.descricao+'</a></td></tr>');
            });
        });
    });
});