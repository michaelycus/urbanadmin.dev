$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            defaultArea: {
                attrs: {
                    fill: "#cadbed", stroke: "#204a87"
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
                title: "Requerimentos por bairro",
                slices: [{
                min: 0,
                max: 18,
                attrs: {
                    fill: "#6996c7"}
              },{
                min: 18,
                max: 36,
                attrs: {
                    fill: "#618ec0"}
              },{
                min: 36,
                max: 54,
                attrs: {
                    fill: "#5985b9"}
              },{
                min: 54,
                max: 72,
                attrs: {
                    fill: "#517db2"}
              },{
                min: 72,
                max: 90,
                attrs: {
                    fill: "#4974ab"}
              },{
                min: 90,
                max: 107,
                attrs: {
                    fill: "#406ca3"}
              },{
                min: 107,
                max: 125,
                attrs: {
                    fill: "#38639c"}
              },{
                min: 125,
                max: 143,
                attrs: {
                    fill: "#305b95"}
              },{
                min: 143,
                max: 161,
                attrs: {
                    fill: "#28528e"}
              },{
                min: 161,
                max: 179,
                attrs: {
                    fill: "#204a87"}
              },]
    }
},
areas: {                    "alto_do_parque":{
                        value: "29",
                        text: { content:  29 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerimentos: 29"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 1 ).change();
                            }
                        }
                    },                    "americano":{
                        value: "17",
                        text: { content:  17 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 17"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 2 ).change();
                            }
                        }
                    },                    "bom_pastor":{
                        value: "19",
                        text: { content:  19 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 19"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 3 ).change();
                            }
                        }
                    },                    "campestre":{
                        value: "7",
                        text: { content:  7 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 7"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 4 ).change();
                            }
                        }
                    },                    "carneiros":{
                        value: "9",
                        text: { content:  9 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 9"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 5 ).change();
                            }
                        }
                    },                    "centenario":{
                        value: "17",
                        text: { content:  17 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 17"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 6 ).change();
                            }
                        }
                    },                    "centro":{
                        value: "178",
                        text: { content:  178 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 178"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 7 ).change();
                            }
                        }
                    },                    "conservas":{
                        value: "18",
                        text: { content:  18 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 18"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 8 ).change();
                            }
                        }
                    },                    "conventos":{
                        value: "38",
                        text: { content:  38 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 38"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 9 ).change();
                            }
                        }
                    },                    "floresta":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 10 ).change();
                            }
                        }
                    },                    "florestal":{
                        value: "22",
                        text: { content:  22 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 22"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 11 ).change();
                            }
                        }
                    },                    "hidraulica":{
                        value: "26",
                        text: { content:  26 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 26"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 12 ).change();
                            }
                        }
                    },                    "igrejinha":{
                        value: "5",
                        text: { content:  5 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 5"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 13 ).change();
                            }
                        }
                    },                    "imigrante":{
                        value: "8",
                        text: { content:  8 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerimentos: 8"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 14 ).change();
                            }
                        }
                    },                    "jardim_do_cedro":{
                        value: "34",
                        text: { content:  34 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 34"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 15 ).change();
                            }
                        }
                    },                    "moinhos":{
                        value: "29",
                        text: { content:  29 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 29"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 16 ).change();
                            }
                        }
                    },                    "moinhos_dagua":{
                        value: "27",
                        text: { content:  27 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 27"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 17 ).change();
                            }
                        }
                    },                    "montanha":{
                        value: "24",
                        text: { content:  24 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerimentos: 24"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 18 ).change();
                            }
                        }
                    },                    "morro_vinte_cinco":{
                        value: "5",
                        text: { content:  5 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Requerimentos: 5"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 19 ).change();
                            }
                        }
                    },                    "nacoes":{
                        value: "5",
                        text: { content:  5 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Requerimentos: 5"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 20 ).change();
                            }
                        }
                    },                    "olarias":{
                        value: "18",
                        text: { content:  18 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerimentos: 18"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 21 ).change();
                            }
                        }
                    },                    "planalto":{
                        value: "18",
                        text: { content:  18 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerimentos: 18"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 22 ).change();
                            }
                        }
                    },                    "santo_andre":{
                        value: "3",
                        text: { content:  3 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Requerimentos: 3"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 23 ).change();
                            }
                        }
                    },                    "santo_antonio":{
                        value: "4",
                        text: { content:  4 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Requerimentos: 4"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 24 ).change();
                            }
                        }
                    },                    "sao_bento":{
                        value: "9",
                        text: { content:  9 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Requerimentos: 9"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 25 ).change();
                            }
                        }
                    },                    "sao_cristovao":{
                        value: "86",
                        text: { content:  86 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 86"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 26 ).change();
                            }
                        }
                    },                    "universitario":{
                        value: "50",
                        text: { content:  50 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 50"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 27 ).change();
                            }
                        }
                    },}
    });
});