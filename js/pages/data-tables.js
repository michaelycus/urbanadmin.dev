$(document).ready(function() {
	
    //------------- Data tables -------------//

    $('#dataTable').dataTable( {
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-6'i><'col-lg-6'p>>",
            "sPaginationType": "bootstrap",
            "bJQueryUI": false,
            "bAutoWidth": false,
            "iDisplayLength": 50,
            "bLengthChange": false,
            "oLanguage": {
                    "sSearch": "<span>Buscar:</span> _INPUT_",
                    "sLengthMenu": "<span>_MENU_ registros</span>",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "oPaginate": { "sFirst": "Primeiro", "sLast": "Último" }
            }
    });

    $('#table-requerimentos').dataTable( {
            "sDom": "<'row'<'col-lg-6'l><'col-lg-6'f>r>t<'row'<'col-lg-6'i><'col-lg-6'p>>",
            "sPaginationType": "bootstrap",
            "aaSorting": [[ 4, "asc" ]],
            "bJQueryUI": false,
            "bAutoWidth": false,
            "iDisplayLength": 50,
            "bLengthChange": false,
            "oLanguage": {
                    "sSearch": "<span>Buscar:</span> _INPUT_",
                    "sLengthMenu": "<span>_MENU_ registros</span>",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "oPaginate": { "sFirst": "Primeiro", "sLast": "Último" }
            }
    });

    $('.dataTables_length select').uniform();
    $('.dataTables_paginate > ul').addClass('pagination');
});