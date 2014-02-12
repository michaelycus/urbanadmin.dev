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
                            value: "4",
                            attrs: {
                                fill: "hsl(60, 6, 71.1290322581)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 4"},
                        },                        "carneiros":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 1"},
                        },                        "centenario":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 0"},
                        },                        "centro":{
                            value: "30",
                            attrs: {
                                fill: "hsl(60, 6, 45.9677419355)", stroke: "#204a87"
                            },
                            text: { content:  30 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 30"},
                        },                        "conservas":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 0"},
                        },                        "conventos":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.0322580645)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 1"},
                        },                        "floresta":{
                            value: "3",
                            attrs: {
                                fill: "hsl(60, 6, 72.0967741935)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 3"},
                        },                        "florestal":{
                            value: "7",
                            attrs: {
                                fill: "hsl(60, 6, 68.2258064516)", stroke: "#204a87"
                            },
                            text: { content:  7 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 7"},
                        },                        "hidraulica":{
                            value: "3",
                            attrs: {
                                fill: "hsl(60, 6, 72.0967741935)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 3"},
                        },                        "igrejinha":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 0"},
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
                            value: "11",
                            attrs: {
                                fill: "hsl(60, 6, 64.3548387097)", stroke: "#204a87"
                            },
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 11"},
                        },                        "moinhos_dagua":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 0"},
                        },                        "montanha":{
                            value: "4",
                            attrs: {
                                fill: "hsl(60, 6, 71.1290322581)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 4"},
                        },                        "morro_vinte_cinco":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 0"},
                        },                        "nacoes":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 0"},
                        },                        "olarias":{
                            value: "3",
                            attrs: {
                                fill: "hsl(60, 6, 72.0967741935)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 3"},
                        },                        "planalto":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 0"},
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
                            value: "20",
                            attrs: {
                                fill: "hsl(60, 6, 55.6451612903)", stroke: "#204a87"
                            },
                            text: { content:  20 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 20"},
                        },                        "universitario":{
                            value: "3",
                            attrs: {
                                fill: "hsl(60, 6, 72.0967741935)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 3"},
                        },}
            });
        });