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
                title: "Requerentes por bairro",
                slices: [{
                min: 0,
                max: 3,
                attrs: {
                    fill: "#e4c900"}
              },{
                min: 3,
                max: 6,
                attrs: {
                    fill: "#dcbf00"}
              },{
                min: 6,
                max: 9,
                attrs: {
                    fill: "#d4b400"}
              },{
                min: 9,
                max: 12,
                attrs: {
                    fill: "#ccaa00"}
              },{
                min: 12,
                max: 15,
                attrs: {
                    fill: "#c4a000"}
              },]
    }
},
areas: {                    "alto_do_parque":{
                        value: "3",
                        text: { content:  3 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerentes: 3"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 1 ).change();
                            }
                        }
                    },                    "americano":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerentes: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 2 ).change();
                            }
                        }
                    },                    "bom_pastor":{
                        value: "7",
                        text: { content:  7 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerentes: 7"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 3 ).change();
                            }
                        }
                    },                    "campestre":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerentes: 2"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 4 ).change();
                            }
                        }
                    },                    "carneiros":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerentes: 2"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 5 ).change();
                            }
                        }
                    },                    "centenario":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerentes: 2"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 6 ).change();
                            }
                        }
                    },                    "centro":{
                        value: "14",
                        text: { content:  14 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerentes: 14"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 7 ).change();
                            }
                        }
                    },                    "conventos":{
                        value: "8",
                        text: { content:  8 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerentes: 8"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 9 ).change();
                            }
                        }
                    },                    "floresta":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerentes: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 10 ).change();
                            }
                        }
                    },                    "florestal":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerentes: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 11 ).change();
                            }
                        }
                    },                    "hidraulica":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerentes: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 12 ).change();
                            }
                        }
                    },                    "imigrante":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerentes: 2"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 14 ).change();
                            }
                        }
                    },                    "jardim_do_cedro":{
                        value: "8",
                        text: { content:  8 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerentes: 8"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 15 ).change();
                            }
                        }
                    },                    "moinhos":{
                        value: "12",
                        text: { content:  12 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerentes: 12"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 16 ).change();
                            }
                        }
                    },                    "moinhos_dagua":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerentes: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 17 ).change();
                            }
                        }
                    },                    "montanha":{
                        value: "9",
                        text: { content:  9 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerentes: 9"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 18 ).change();
                            }
                        }
                    },                    "nacoes":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Requerentes: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 20 ).change();
                            }
                        }
                    },                    "olarias":{
                        value: "4",
                        text: { content:  4 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerentes: 4"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 21 ).change();
                            }
                        }
                    },                    "planalto":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerentes: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 22 ).change();
                            }
                        }
                    },                    "sao_bento":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Requerentes: 2"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 25 ).change();
                            }
                        }
                    },                    "sao_cristovao":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerentes: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 26 ).change();
                            }
                        }
                    },                    "universitario":{
                        value: "12",
                        text: { content:  12 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerentes: 12"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 27 ).change();
                            }
                        }
                    },}
    });
});