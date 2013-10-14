function confirm_delete(e)
{  
    return confirm("Tem certeza que deseja excluir esse item?");
}

$(function () {
    $("a.confirm_delete").click(function(e) {
        e.preventDefault();
        var location = $(this).attr('href');
        bootbox.confirm("Excluir esse item?", "Não", "Sim", function(confirmed) {
            if(confirmed) {
            window.location.replace(location);
            }
        });
    });     
});