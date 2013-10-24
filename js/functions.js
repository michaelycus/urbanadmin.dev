bootbox.setDefaults({
    locale: "br",
});

$(function () {
    $("a.confirm_delete").click(function(e) {
        e.preventDefault();
        var location = $(this).attr('href');
        bootbox.confirm("Excluir esse item?", function(confirmed) {
            if(confirmed) {
            window.location.replace(location);
            }
        });
    });     
});