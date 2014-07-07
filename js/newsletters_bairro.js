// funcao para retornar as newsletters conforme o mapa é clicado

$(function() {    
    $("#id_bairro").change(function() {

        bairro = $(this).val();

        if (bairro === '')
            return false;

        $("#table-mapa-newsletters tr").remove(); 

        $.getJSON(path + 'newsletters/get_newsletters_ajax/'+bairro, function(data) {

            count = 1;
            $.each(data, function(i, obj) {                
                $('table[id="table-mapa-newsletters"]').append('<tr><td>('+count++ +') <a href="'+path+'newsletters/visualizar/'+obj.id+'" target="_blank">'+obj.nome+'</a></td></tr>');
            });
        });
    });
});