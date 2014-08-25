$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#fce94f", stroke: "#c4a000"
                },
                text : {
                    attrs: {
                        fill: "#ce5c00",
                        "font-weight": "bold"
                    },
                    attrsHover: {
                        fill: "#ce5c00",
                        "font-weight": "normal"
                    }
                }
            }
        },
        legend: {
            area: {
                title: "Newsletters por bairro",
                slices: [{
                min: 0,
                max: 0,
                attrs: {
                    fill: "#e4c900"}
              },{
                min: 0,
                max: 1,
                attrs: {
                    fill: "#dcbf00"}
              },{
                min: 1,
                max: 1,
                attrs: {
                    fill: "#d4b400"}
              },{
                min: 1,
                max: 2,
                attrs: {
                    fill: "#ccaa00"}
              },{
                min: 2,
                max: 2,
                attrs: {
                    fill: "#c4a000"}
              },]
    }
},
areas: {                    "americano":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 2 ).change();
                            }
                        }
                    },                    "bom_pastor":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 3 ).change();
                            }
                        }
                    },                    "centro":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 7 ).change();
                            }
                        }
                    },                    "jardim_do_cedro":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 15 ).change();
                            }
                        }
                    },                    "moinhos_dagua":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 17 ).change();
                            }
                        }
                    },}
    });
});