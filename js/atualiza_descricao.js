// funcao para retornar os requentes conforme o mapa é clicado

function atualizar_desc()
{
    cat = $("#cat_requerimento").val();
    bairro = $("#id_bairro").val();
    rua = $("#id_rua").val();
    
    if (cat == '')
        cat = 0;
    if (bairro == '')
        bairro = 0;
    if (rua == '')
        rua = 0;
    
    $("#descricao").val("");
    
    $.getJSON(path + 'requerimentos/get_descricao_ajax/'+cat+'/'+bairro+'/'+rua, function(data) {
        $.each(data, function(i, obj) {
            $("#descricao").val(obj.descricao);
        });
    });
    
}
