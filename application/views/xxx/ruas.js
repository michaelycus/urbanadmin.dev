// funcao para retornar as ruas conforme o mapa é clicado

$(function() {    
    $("#select1").change(function() {

        rua = $(this).val();

        if (rua === '')
            return false;
        
        $('.multiselect').each(function() { //loop through each checkbox
            this.checked = false;  //deselect all checkboxes with class "multiselect"  
        });
        
        $.getJSON(path + 'cep/getBairros/'+rua, function(data) {

            $.each(data, function(i, obj) {
                $('input:checkbox[value="' + obj.id + '"]').prop('checked', true);
            });
        });
    });
});