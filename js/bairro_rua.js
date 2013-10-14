// funcao para retornar as ruas conforme o combo dos bairros

$(function() {

    $("select[name=id_bairro]").change(function() {

        bairro = $(this).val();
        
        if (bairro === '')
            return false;

        resetaCombo('id_rua');
        
        $.getJSON(path + '/cep/getRuas/' + bairro, function(data) {

            //	console.log(data);
            var option = new Array();
            
            $.each(data, function(i, obj) {

                option[i] = document.createElement('option');
                $(option[i]).attr({value: obj.id});
                $(option[i]).append(obj.nome);

                $("select[name='id_rua']").append(option[i]);
            });
        });
    });
});

function resetaCombo(el) {
    $("select[name='" + el + "']").empty();
    var option = document.createElement('option');
    $(option).attr({value: ''});
    $(option).append('Escolha uma rua');
    $("select[name='" + el + "']").append(option);
}