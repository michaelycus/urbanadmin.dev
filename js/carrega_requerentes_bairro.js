// funcao para retornar os requerentes conforme o combo dos bairros

$(function() {
    $("select[name=id_bairro]").change(function() {

        bairro = $(this).val();
        
        if (bairro === '')
            return false;

        $('#enviar_para').val('');
        
        $.getJSON(path + 'requerentes/get_requerentes_newsletter/' + bairro, function(data) {
            
            var emails = [];
            
            $.each(data, function(i, obj) {                
                if (obj.email != '')
                    emails.push(" "+ obj.email);
            });
            
            var list = new String(emails.valueOf());
            $('#enviar_para').val( list.trim() );
        });
    });
});