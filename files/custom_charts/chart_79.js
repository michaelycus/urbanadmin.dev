        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(60, 6, 84)", stroke: "#204a87"
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
                            value: "2",
                            attrs: {
                                fill: "hsl(60, 6, 73.064516129)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 2"},
                        },                        "carneiros":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 1"},
                        },                        "centenario":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 1"},
                        },                        "centro":{
                            value: "30",
                            attrs: {
                                fill: "hsl(60, 6, 45.9677419355)", stroke: "#204a87"
                            },
                            text: { content:  30 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 30"},
                        },                        "conservas":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 1"},
                        },                        "conventos":{
                            value: "5",
                            attrs: {
                                fill: "hsl(60, 6, 70.1612903226)", stroke: "#204a87"
                            },
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 5"},
                        },                        "floresta":{
                            value: "2",
                            attrs: {
                                fill: "hsl(60, 6, 73.064516129)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 2"},
                        },                        "florestal":{
                            value: "11",
                            attrs: {
                                fill: "hsl(60, 6, 64.3548387097)", stroke: "#204a87"
                            },
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 11"},
                        },                        "hidraulica":{
                            value: "4",
                            attrs: {
                                fill: "hsl(60, 6, 71.1290322581)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 4"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br /> - Valor não informado -"},
                        },                        "imigrante":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 0"},
                        },                        "jardim_do_cedro":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 1"},
                        },                        "moinhos":{
                            value: "9",
                            attrs: {
                                fill: "hsl(60, 6, 66.2903225806)", stroke: "#204a87"
                            },
                            text: { content:  9 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 9"},
                        },                        "moinhos_dagua":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 1"},
                        },                        "montanha":{
                            value: "4",
                            attrs: {
                                fill: "hsl(60, 6, 71.1290322581)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 4"},
                        },                        "morro_vinte_cinco":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 1"},
                        },                        "nacoes":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br /> - Valor não informado -"},
                        },                        "olarias":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 1"},
                        },                        "planalto":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br /> - Valor não informado -"},
                        },                        "santo_andre":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 1"},
                        },                        "santo_antonio":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 0"},
                        },                        "sao_bento":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 0"},
                        },                        "sao_cristovao":{
                            value: "15",
                            attrs: {
                                fill: "hsl(60, 6, 60.4838709677)", stroke: "#204a87"
                            },
                            text: { content:  15 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 15"},
                        },                        "universitario":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 1"},
                        },}
            });
        });