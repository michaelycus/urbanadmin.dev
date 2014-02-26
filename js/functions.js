bootbox.setDefaults({
    locale: "br",
});

;(function($){
	$.fn.datepicker.dates['pt-BR'] = {
		days: ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"],
		daysShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb", "Dom"],
		daysMin: ["Do", "Se", "Te", "Qu", "Qu", "Se", "Sa", "Do"],
		months: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
		monthsShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
		today: "Hoje",
		clear: "Limpar"
	};
}(jQuery));

$(function () {
    $(".confirm_delete").click(function(e) {
        e.preventDefault();
        var location = $(this).attr('href');
        bootbox.confirm("Excluir esse item?", function(confirmed) {
            if(confirmed) {
            window.location.replace(location);
            }
        });
    });     
});

$(function () {
    $(".confirm_send").click(function(e) {
        e.preventDefault();
        var location = $(this).attr('href');
        bootbox.confirm("Enviar a mensagem agora?", function(confirmed) {
            if(confirmed) {
            window.location.replace(location);
            }
        });
    });     
});

$(function () {
    $(".data").datepicker({
        todayBtn: true,
        language: "pt-BR",
        format: "dd/mm/yyyy"
    });
});

$(function () {
    $(".start-hidden").hide();
});

function expediente(base_url, id)
{
    var currentYear = new Date().getFullYear();

    var states = {
        state0: {
            title: 'Informe o nº do protocolo',
            html: '<label>Nº: <input type="text" name="n_protocolo" id="n_protocolo" autofocus value=""><select name="ano" id="ano"><option value="'+(currentYear-4)+'">'+(currentYear-4)+'</option><option value="'+(currentYear-3)+'">'+(currentYear-3)+'</option><option value="'+(currentYear-2)+'">'+(currentYear-2)+'</option><option value="'+(currentYear-1)+'">'+(currentYear-1)+'</option><option value="'+(currentYear)+'" selected>'+(currentYear)+'</option><option value="'+(currentYear+1)+'">'+(currentYear+1)+'</option><option value="'+(currentYear+2)+'">'+(currentYear+2)+'</option></select></label><br />',
           buttons: {
                Informar: 1
            },
            submit: function(e, v, m, f) {
                window.location.replace(base_url + "requerimentos/gravar_expediente/"+id+"/"+f.n_protocolo+"/"+f.ano);
            }
        }
    };

    $.prompt(states, {
        classes: {
            box: '',
            fade: 'modal fade',
            prompt: 'panel panel-default',
            close: 'close',
            title: 'modal-header',
            message: 'modal-body',
            buttons: 'modal-footer',
            button: 'btn',
            defaultButton: 'btn btn-primary'
        }
    });
}