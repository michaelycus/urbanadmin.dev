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
                        max: 17,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 17,
                        max: 33,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 33,
                        max: 50,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 50,
                        max: 66,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 66,
                        max: 83,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 83,
                        max: 100,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 100,
                        max: 116,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 116,
                        max: 133,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 133,
                        max: 149,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 149,
                        max: 166,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "alto_do_parque":{
                                value: "22",
                                text: { content:  22 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Requerimentos: 22"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 1 ).change();
                                    }
                                }
                            },                            "americano":{
                                value: "13",
                                text: { content:  13 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 13"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 2 ).change();
                                    }
                                }
                            },                            "bom_pastor":{
                                value: "20",
                                text: { content:  20 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Requerimentos: 20"},
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
                                value: "10",
                                text: { content:  10 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 10"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 5 ).change();
                                    }
                                }
                            },                            "centenario":{
                                value: "17",
                                text: { content:  17 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Requerimentos: 17"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 6 ).change();
                                    }
                                }
                            },                            "centro":{
                                value: "165",
                                text: { content:  165 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 165"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 7 ).change();
                                    }
                                }
                            },                            "conservas":{
                                value: "16",
                                text: { content:  16 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 16"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 8 ).change();
                                    }
                                }
                            },                            "conventos":{
                                value: "32",
                                text: { content:  32 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 32"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 9 ).change();
                                    }
                                }
                            },                            "floresta":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 10 ).change();
                                    }
                                }
                            },                            "florestal":{
                                value: "20",
                                text: { content:  20 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 20"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 11 ).change();
                                    }
                                }
                            },                            "hidraulica":{
                                value: "19",
                                text: { content:  19 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 19"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 12 ).change();
                                    }
                                }
                            },                            "igrejinha":{
                                value: "4",
                                text: { content:  4 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 4"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 13 ).change();
                                    }
                                }
                            },                            "imigrante":{
                                value: "7",
                                text: { content:  7 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerimentos: 7"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 14 ).change();
                                    }
                                }
                            },                            "jardim_do_cedro":{
                                value: "29",
                                text: { content:  29 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 29"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 15 ).change();
                                    }
                                }
                            },                            "moinhos":{
                                value: "24",
                                text: { content:  24 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 24"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 16 ).change();
                                    }
                                }
                            },                            "moinhos_dagua":{
                                value: "25",
                                text: { content:  25 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 25"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 17 ).change();
                                    }
                                }
                            },                            "montanha":{
                                value: "21",
                                text: { content:  21 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Requerimentos: 21"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 18 ).change();
                                    }
                                }
                            },                            "morro_vinte_cinco":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 19 ).change();
                                    }
                                }
                            },                            "nacoes":{
                                value: "5",
                                text: { content:  5 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Requerimentos: 5"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 20 ).change();
                                    }
                                }
                            },                            "olarias":{
                                value: "18",
                                text: { content:  18 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Requerimentos: 18"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 21 ).change();
                                    }
                                }
                            },                            "planalto":{
                                value: "14",
                                text: { content:  14 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Requerimentos: 14"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 22 ).change();
                                    }
                                }
                            },                            "santo_andre":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 23 ).change();
                                    }
                                }
                            },                            "santo_antonio":{
                                value: "3",
                                text: { content:  3 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Requerimentos: 3"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 24 ).change();
                                    }
                                }
                            },                            "sao_bento":{
                                value: "8",
                                text: { content:  8 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Requerimentos: 8"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 25 ).change();
                                    }
                                }
                            },                            "sao_cristovao":{
                                value: "72",
                                text: { content:  72 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Requerimentos: 72"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 26 ).change();
                                    }
                                }
                            },                            "universitario":{
                                value: "46",
                                text: { content:  46 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Requerimentos: 46"},
                                eventHandlers : {
                                    click : function() {
                                        $('#id_bairro').val( 27 ).change();
                                    }
                                }
                            },}
            });
        });