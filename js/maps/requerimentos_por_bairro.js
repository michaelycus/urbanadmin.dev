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
                        max: 6,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 6,
                        max: 12,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 12,
                        max: 17,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 17,
                        max: 23,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 23,
                        max: 29,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 29,
                        max: 35,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 35,
                        max: 41,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 41,
                        max: 46,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 46,
                        max: 52,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 52,
                        max: 58,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "alto_do_parque":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 1 ).change();
                                    }
                                }
                            },                            "americano":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 2 ).change();
                                    }
                                }
                            },                            "bom_pastor":{
                                value: "7",
                                text: { content:  7 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 7"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 3 ).change();
                                    }
                                }
                            },                            "campestre":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 4 ).change();
                                    }
                                }
                            },                            "carneiros":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 5 ).change();
                                    }
                                }
                            },                            "centenario":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 6 ).change();
                                    }
                                }
                            },                            "centro":{
                                value: "57",
                                text: { content:  57 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 57"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 7 ).change();
                                    }
                                }
                            },                            "conservas":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 8 ).change();
                                    }
                                }
                            },                            "conventos":{
                                value: "12",
                                text: { content:  12 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 12"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 9 ).change();
                                    }
                                }
                            },                            "floresta":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 10 ).change();
                                    }
                                }
                            },                            "florestal":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 11 ).change();
                                    }
                                }
                            },                            "hidraulica":{
                                value: "12",
                                text: { content:  12 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 12"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 12 ).change();
                                    }
                                }
                            },                            "igrejinha":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 13 ).change();
                                    }
                                }
                            },                            "imigrante":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 14 ).change();
                                    }
                                }
                            },                            "jardim_do_cedro":{
                                value: "15",
                                text: { content:  15 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 15"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 15 ).change();
                                    }
                                }
                            },                            "moinhos":{
                                value: "12",
                                text: { content:  12 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 12"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 16 ).change();
                                    }
                                }
                            },                            "moinhos_dagua":{
                                value: "9",
                                text: { content:  9 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 9"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 17 ).change();
                                    }
                                }
                            },                            "montanha":{
                                value: "9",
                                text: { content:  9 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerimentos: 9"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 18 ).change();
                                    }
                                }
                            },                            "morro_vinte_cinco":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 19 ).change();
                                    }
                                }
                            },                            "nacoes":{
                                value: "1",
                                text: { content:  1 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Requerimentos: 1"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 20 ).change();
                                    }
                                }
                            },                            "olarias":{
                                value: "11",
                                text: { content:  11 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerimentos: 11"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 21 ).change();
                                    }
                                }
                            },                            "planalto":{
                                value: "11",
                                text: { content:  11 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerimentos: 11"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 22 ).change();
                                    }
                                }
                            },                            "sao_cristovao":{
                                value: "20",
                                text: { content:  20 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 20"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 26 ).change();
                                    }
                                }
                            },                            "universitario":{
                                value: "21",
                                text: { content:  21 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 21"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 27 ).change();
                                    }
                                }
                            },}
            });
        });