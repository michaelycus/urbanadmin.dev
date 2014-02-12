        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(53, 98, 84)", stroke: "#204a87"
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
                        title: "Requerimentos por bairro"                     
            }
        },
        areas: {                        "alto_do_parque":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br /> - Valor não informado -"},
                        },                        "americano":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br /> - Valor não informado -"},
                        },                        "bom_pastor":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br /> - Valor não informado -"},
                        },                        "campestre":{
                            value: "748",
                            attrs: {
                                fill: "hsl(53, 98, 69.9459459459)", stroke: "#204a87"
                            },
                            text: { content:  748 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 748"},
                        },                        "carneiros":{
                            value: "321",
                            attrs: {
                                fill: "hsl(53, 98, 72.8310810811)", stroke: "#204a87"
                            },
                            text: { content:  321 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 321"},
                        },                        "centenario":{
                            value: "666",
                            attrs: {
                                fill: "hsl(53, 98, 70.5)", stroke: "#204a87"
                            },
                            text: { content:  666 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 666"},
                        },                        "centro":{
                            value: "4439",
                            attrs: {
                                fill: "hsl(53, 98, 45.0067567568)", stroke: "#204a87"
                            },
                            text: { content:  4439 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 4439"},
                        },                        "conservas":{
                            value: "1598",
                            attrs: {
                                fill: "hsl(53, 98, 64.2027027027)", stroke: "#204a87"
                            },
                            text: { content:  1598 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 1598"},
                        },                        "conventos":{
                            value: "1548",
                            attrs: {
                                fill: "hsl(53, 98, 64.5405405405)", stroke: "#204a87"
                            },
                            text: { content:  1548 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 1548"},
                        },                        "floresta":{
                            value: "498",
                            attrs: {
                                fill: "hsl(53, 98, 71.6351351351)", stroke: "#204a87"
                            },
                            text: { content:  498 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 498"},
                        },                        "florestal":{
                            value: "1584",
                            attrs: {
                                fill: "hsl(53, 98, 64.2972972973)", stroke: "#204a87"
                            },
                            text: { content:  1584 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 1584"},
                        },                        "hidraulica":{
                            value: "694",
                            attrs: {
                                fill: "hsl(53, 98, 70.3108108108)", stroke: "#204a87"
                            },
                            text: { content:  694 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 694"},
                        },                        "igrejinha":{
                            value: "140",
                            attrs: {
                                fill: "hsl(53, 98, 74.0540540541)", stroke: "#204a87"
                            },
                            text: { content:  140 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 140"},
                        },                        "imigrante":{
                            value: "258",
                            attrs: {
                                fill: "hsl(53, 98, 73.2567567568)", stroke: "#204a87"
                            },
                            text: { content:  258 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 258"},
                        },                        "jardim_do_cedro":{
                            value: "1295",
                            attrs: {
                                fill: "hsl(53, 98, 66.25)", stroke: "#204a87"
                            },
                            text: { content:  1295 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 1295"},
                        },                        "moinhos":{
                            value: "1639",
                            attrs: {
                                fill: "hsl(53, 98, 63.9256756757)", stroke: "#204a87"
                            },
                            text: { content:  1639 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 1639"},
                        },                        "moinhos_dagua":{
                            value: "781",
                            attrs: {
                                fill: "hsl(53, 98, 69.722972973)", stroke: "#204a87"
                            },
                            text: { content:  781 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 781"},
                        },                        "montanha":{
                            value: "1795",
                            attrs: {
                                fill: "hsl(53, 98, 62.8716216216)", stroke: "#204a87"
                            },
                            text: { content:  1795 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 1795"},
                        },                        "morro_vinte_cinco":{
                            value: "727",
                            attrs: {
                                fill: "hsl(53, 98, 70.0878378378)", stroke: "#204a87"
                            },
                            text: { content:  727 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 727"},
                        },                        "nacoes":{
                            value: "202",
                            attrs: {
                                fill: "hsl(53, 98, 73.6351351351)", stroke: "#204a87"
                            },
                            text: { content:  202 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 202"},
                        },                        "olarias":{
                            value: "1145",
                            attrs: {
                                fill: "hsl(53, 98, 67.2635135135)", stroke: "#204a87"
                            },
                            text: { content:  1145 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 1145"},
                        },                        "planalto":{
                            value: "148",
                            attrs: {
                                fill: "hsl(53, 98, 74)", stroke: "#204a87"
                            },
                            text: { content:  148 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 148"},
                        },                        "santo_andre":{
                            value: "1179",
                            attrs: {
                                fill: "hsl(53, 98, 67.0337837838)", stroke: "#204a87"
                            },
                            text: { content:  1179 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 1179"},
                        },                        "santo_antonio":{
                            value: "1210",
                            attrs: {
                                fill: "hsl(53, 98, 66.8243243243)", stroke: "#204a87"
                            },
                            text: { content:  1210 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 1210"},
                        },                        "sao_bento":{
                            value: "685",
                            attrs: {
                                fill: "hsl(53, 98, 70.3716216216)", stroke: "#204a87"
                            },
                            text: { content:  685 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 685"},
                        },                        "sao_cristovao":{
                            value: "3522",
                            attrs: {
                                fill: "hsl(53, 98, 51.2027027027)", stroke: "#204a87"
                            },
                            text: { content:  3522 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 3522"},
                        },                        "universitario":{
                            value: "744",
                            attrs: {
                                fill: "hsl(53, 98, 69.972972973)", stroke: "#204a87"
                            },
                            text: { content:  744 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 744"},
                        },}
            });
        });