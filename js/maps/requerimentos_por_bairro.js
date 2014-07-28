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
                max: 21,
                attrs: {
                    fill: "#6996c7"}
              },{
                min: 21,
                max: 43,
                attrs: {
                    fill: "#618ec0"}
              },{
                min: 43,
                max: 64,
                attrs: {
                    fill: "#5985b9"}
              },{
                min: 64,
                max: 85,
                attrs: {
                    fill: "#517db2"}
              },{
                min: 85,
                max: 107,
                attrs: {
                    fill: "#4974ab"}
              },{
                min: 107,
                max: 128,
                attrs: {
                    fill: "#406ca3"}
              },{
                min: 128,
                max: 149,
                attrs: {
                    fill: "#38639c"}
              },{
                min: 149,
                max: 170,
                attrs: {
                    fill: "#305b95"}
              },{
                min: 170,
                max: 192,
                attrs: {
                    fill: "#28528e"}
              },{
                min: 192,
                max: 213,
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
                        value: "19",
                        text: { content:  19 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 19"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 2 ).change();
                            }
                        }
                    },                    "bom_pastor":{
                        value: "24",
                        text: { content:  24 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 24"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 3 ).change();
                            }
                        }
                    },                    "campestre":{
                        value: "10",
                        text: { content:  10 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 10"},
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
                        value: "212",
                        text: { content:  212 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 212"},
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
                        value: "44",
                        text: { content:  44 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 44"},
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
                        value: "43",
                        text: { content:  43 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 43"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 11 ).change();
                            }
                        }
                    },                    "hidraulica":{
                        value: "30",
                        text: { content:  30 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 30"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 12 ).change();
                            }
                        }
                    },                    "igrejinha":{
                        value: "6",
                        text: { content:  6 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 6"},
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
                        value: "46",
                        text: { content:  46 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 46"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 15 ).change();
                            }
                        }
                    },                    "moinhos":{
                        value: "40",
                        text: { content:  40 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 40"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 16 ).change();
                            }
                        }
                    },                    "moinhos_dagua":{
                        value: "31",
                        text: { content:  31 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 31"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 17 ).change();
                            }
                        }
                    },                    "montanha":{
                        value: "39",
                        text: { content:  39 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerimentos: 39"},
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
                        value: "9",
                        text: { content:  9 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Requerimentos: 9"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 20 ).change();
                            }
                        }
                    },                    "olarias":{
                        value: "23",
                        text: { content:  23 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerimentos: 23"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 21 ).change();
                            }
                        }
                    },                    "planalto":{
                        value: "26",
                        text: { content:  26 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerimentos: 26"},
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
                        value: "103",
                        text: { content:  103 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 103"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 26 ).change();
                            }
                        }
                    },                    "universitario":{
                        value: "59",
                        text: { content:  59 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 59"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 27 ).change();
                            }
                        }
                    },}
    });
});