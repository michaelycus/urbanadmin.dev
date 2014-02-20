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
                        max: 4,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 4,
                        max: 8,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 8,
                        max: 12,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 12,
                        max: 16,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 16,
                        max: 21,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 21,
                        max: 25,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 25,
                        max: 29,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 29,
                        max: 33,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 33,
                        max: 37,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 37,
                        max: 41,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "alto_do_parque":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 1 ).change();
                                    }
                                }
                            },                            "americano":{
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 2"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 2 ).change();
                                    }
                                }
                            },                            "bom_pastor":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 3 ).change();
                                    }
                                }
                            },                            "campestre":{
                                value: "7",
                                text: { content:  7 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Requerimentos: 7"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 4 ).change();
                                    }
                                }
                            },                            "carneiros":{
                                value: "7",
                                text: { content:  7 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 7"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 5 ).change();
                                    }
                                }
                            },                            "centenario":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 6 ).change();
                                    }
                                }
                            },                            "centro":{
                                value: "40",
                                text: { content:  40 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 40"},
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
                                value: "2",
                                text: { content:  2 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 2"},
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
                                value: "10",
                                text: { content:  10 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 10"},
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
                                value: "12",
                                text: { content:  12 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 12"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 15 ).change();
                                    }
                                }
                            },                            "moinhos":{
                                value: "11",
                                text: { content:  11 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 11"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 16 ).change();
                                    }
                                }
                            },                            "moinhos_dagua":{
                                value: "8",
                                text: { content:  8 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 8"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 17 ).change();
                                    }
                                }
                            },                            "montanha":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 18 ).change();
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
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 21 ).change();
                                    }
                                }
                            },                            "planalto":{
                                value: "9",
                                text: { content:  9 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerimentos: 9"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 22 ).change();
                                    }
                                }
                            },                            "sao_cristovao":{
                                value: "14",
                                text: { content:  14 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 14"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 26 ).change();
                                    }
                                }
                            },                            "universitario":{
                                value: "13",
                                text: { content:  13 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 13"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 27 ).change();
                                    }
                                }
                            },}
            });
        });