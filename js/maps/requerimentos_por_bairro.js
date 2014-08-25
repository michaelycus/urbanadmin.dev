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
                max: 22,
                attrs: {
                    fill: "#6996c7"}
              },{
                min: 22,
                max: 43,
                attrs: {
                    fill: "#618ec0"}
              },{
                min: 43,
                max: 65,
                attrs: {
                    fill: "#5985b9"}
              },{
                min: 65,
                max: 86,
                attrs: {
                    fill: "#517db2"}
              },{
                min: 86,
                max: 108,
                attrs: {
                    fill: "#4974ab"}
              },{
                min: 108,
                max: 129,
                attrs: {
                    fill: "#406ca3"}
              },{
                min: 129,
                max: 151,
                attrs: {
                    fill: "#38639c"}
              },{
                min: 151,
                max: 172,
                attrs: {
                    fill: "#305b95"}
              },{
                min: 172,
                max: 194,
                attrs: {
                    fill: "#28528e"}
              },{
                min: 194,
                max: 215,
                attrs: {
                    fill: "#204a87"}
              },]
    }
},
areas: {                    "alto_do_parque":{
                        value: "31",
                        text: { content:  31 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerimentos: 31"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 1 ).change();
                            }
                        }
                    },                    "americano":{
                        value: "22",
                        text: { content:  22 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 22"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 2 ).change();
                            }
                        }
                    },                    "bom_pastor":{
                        value: "28",
                        text: { content:  28 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 28"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 3 ).change();
                            }
                        }
                    },                    "campestre":{
                        value: "9",
                        text: { content:  9 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 9"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 4 ).change();
                            }
                        }
                    },                    "carneiros":{
                        value: "11",
                        text: { content:  11 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 11"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 5 ).change();
                            }
                        }
                    },                    "centenario":{
                        value: "20",
                        text: { content:  20 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 20"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 6 ).change();
                            }
                        }
                    },                    "centro":{
                        value: "214",
                        text: { content:  214 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 214"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 7 ).change();
                            }
                        }
                    },                    "conservas":{
                        value: "20",
                        text: { content:  20 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 20"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 8 ).change();
                            }
                        }
                    },                    "conventos":{
                        value: "46",
                        text: { content:  46 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 46"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 9 ).change();
                            }
                        }
                    },                    "floresta":{
                        value: "7",
                        text: { content:  7 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 7"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 10 ).change();
                            }
                        }
                    },                    "florestal":{
                        value: "44",
                        text: { content:  44 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 44"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 11 ).change();
                            }
                        }
                    },                    "hidraulica":{
                        value: "32",
                        text: { content:  32 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 32"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 12 ).change();
                            }
                        }
                    },                    "igrejinha":{
                        value: "7",
                        text: { content:  7 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 7"},
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
                        value: "49",
                        text: { content:  49 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 49"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 15 ).change();
                            }
                        }
                    },                    "moinhos":{
                        value: "44",
                        text: { content:  44 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 44"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 16 ).change();
                            }
                        }
                    },                    "moinhos_dagua":{
                        value: "36",
                        text: { content:  36 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 36"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 17 ).change();
                            }
                        }
                    },                    "montanha":{
                        value: "47",
                        text: { content:  47 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerimentos: 47"},
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
                        value: "10",
                        text: { content:  10 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Requerimentos: 10"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 20 ).change();
                            }
                        }
                    },                    "olarias":{
                        value: "24",
                        text: { content:  24 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerimentos: 24"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 21 ).change();
                            }
                        }
                    },                    "planalto":{
                        value: "30",
                        text: { content:  30 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerimentos: 30"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 22 ).change();
                            }
                        }
                    },                    "santo_andre":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Requerimentos: 6"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 23 ).change();
                            }
                        }
                    },                    "santo_antonio":{
                        value: "5",
                        text: { content:  5 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Requerimentos: 5"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 24 ).change();
                            }
                        }
                    },                    "sao_bento":{
                        value: "11",
                        text: { content:  11 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Requerimentos: 11"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 25 ).change();
                            }
                        }
                    },                    "sao_cristovao":{
                        value: "112",
                        text: { content:  112 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 112"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 26 ).change();
                            }
                        }
                    },                    "universitario":{
                        value: "64",
                        text: { content:  64 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 64"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 27 ).change();
                            }
                        }
                    },}
    });
});