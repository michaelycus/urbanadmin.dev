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
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 1"},
                        },                        "carneiros":{
                            value: "2",
                            attrs: {
                                fill: "hsl(60, 6, 73.3333333333)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 2"},
                        },                        "centenario":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 0"},
                        },                        "centro":{
                            value: "35",
                            attrs: {
                                fill: "hsl(60, 6, 45.8333333333)", stroke: "#204a87"
                            },
                            text: { content:  35 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 35"},
                        },                        "conservas":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 1"},
                        },                        "conventos":{
                            value: "7",
                            attrs: {
                                fill: "hsl(60, 6, 69.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  7 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 7"},
                        },                        "floresta":{
                            value: "2",
                            attrs: {
                                fill: "hsl(60, 6, 73.3333333333)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 2"},
                        },                        "florestal":{
                            value: "8",
                            attrs: {
                                fill: "hsl(60, 6, 68.3333333333)", stroke: "#204a87"
                            },
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 8"},
                        },                        "hidraulica":{
                            value: "4",
                            attrs: {
                                fill: "hsl(60, 6, 71.6666666667)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 4"},
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
                                fill: "hsl(60, 6, 74.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 1"},
                        },                        "moinhos":{
                            value: "10",
                            attrs: {
                                fill: "hsl(60, 6, 66.6666666667)", stroke: "#204a87"
                            },
                            text: { content:  10 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 10"},
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
                                fill: "hsl(60, 6, 71.6666666667)", stroke: "#204a87"
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
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br /> - Valor não informado -"},
                        },                        "olarias":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 0"},
                        },                        "planalto":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br /> - Valor não informado -"},
                        },                        "santo_andre":{
                            value: "0",
                            attrs: {
                                fill: "hsl(60, 6, 75)", stroke: "#204a87"
                            },
                            text: { content:  0 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 0"},
                        },                        "santo_antonio":{
                            value: "2",
                            attrs: {
                                fill: "hsl(60, 6, 73.3333333333)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 2"},
                        },                        "sao_bento":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 1"},
                        },                        "sao_cristovao":{
                            value: "13",
                            attrs: {
                                fill: "hsl(60, 6, 64.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  13 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 13"},
                        },                        "universitario":{
                            value: "1",
                            attrs: {
                                fill: "hsl(60, 6, 74.1666666667)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 1"},
                        },}
            });
        });