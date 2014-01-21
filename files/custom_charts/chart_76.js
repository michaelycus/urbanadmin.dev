        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(210, 49, 84)", stroke: "#204a87"
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
                            value: "30",
                            attrs: {
                                fill: "hsl(210, 49, 69.642857142857)", stroke: "#204a87"
                            },
                            text: { content:  30 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 30"},
                        },                        "carneiros":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br /> - Valor não informado -"},
                        },                        "centenario":{
                            value: "6",
                            attrs: {
                                fill: "hsl(210, 49, 73.928571428571)", stroke: "#204a87"
                            },
                            text: { content:  6 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 6"},
                        },                        "centro":{
                            value: "167",
                            attrs: {
                                fill: "hsl(210, 49, 45.178571428571)", stroke: "#204a87"
                            },
                            text: { content:  167 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 167"},
                        },                        "conservas":{
                            value: "4",
                            attrs: {
                                fill: "hsl(210, 49, 74.285714285714)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 4"},
                        },                        "conventos":{
                            value: "12",
                            attrs: {
                                fill: "hsl(210, 49, 72.857142857143)", stroke: "#204a87"
                            },
                            text: { content:  12 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 12"},
                        },                        "floresta":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br /> - Valor não informado -"},
                        },                        "florestal":{
                            value: "110",
                            attrs: {
                                fill: "hsl(210, 49, 55.357142857143)", stroke: "#204a87"
                            },
                            text: { content:  110 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 110"},
                        },                        "hidraulica":{
                            value: "26",
                            attrs: {
                                fill: "hsl(210, 49, 70.357142857143)", stroke: "#204a87"
                            },
                            text: { content:  26 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 26"},
                        },                        "igrejinha":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 74.821428571429)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 1"},
                        },                        "imigrante":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 74.821428571429)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 1"},
                        },                        "jardim_do_cedro":{
                            value: "8",
                            attrs: {
                                fill: "hsl(210, 49, 73.571428571429)", stroke: "#204a87"
                            },
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 8"},
                        },                        "moinhos":{
                            value: "77",
                            attrs: {
                                fill: "hsl(210, 49, 61.25)", stroke: "#204a87"
                            },
                            text: { content:  77 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 77"},
                        },                        "moinhos_dagua":{
                            value: "3",
                            attrs: {
                                fill: "hsl(210, 49, 74.464285714286)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 3"},
                        },                        "montanha":{
                            value: "28",
                            attrs: {
                                fill: "hsl(210, 49, 70)", stroke: "#204a87"
                            },
                            text: { content:  28 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 28"},
                        },                        "morro_vinte_cinco":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br /> - Valor não informado -"},
                        },                        "nacoes":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 74.821428571429)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 1"},
                        },                        "olarias":{
                            value: "20",
                            attrs: {
                                fill: "hsl(210, 49, 71.428571428571)", stroke: "#204a87"
                            },
                            text: { content:  20 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 20"},
                        },                        "planalto":{
                            value: "1",
                            attrs: {
                                fill: "hsl(210, 49, 74.821428571429)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 1"},
                        },                        "santo_andre":{
                            value: "11",
                            attrs: {
                                fill: "hsl(210, 49, 73.035714285714)", stroke: "#204a87"
                            },
                            text: { content:  11 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 11"},
                        },                        "santo_antonio":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br /> - Valor não informado -"},
                        },                        "sao_bento":{
                            value: "2",
                            attrs: {
                                fill: "hsl(210, 49, 74.642857142857)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 2"},
                        },                        "sao_cristovao":{
                            value: "137",
                            attrs: {
                                fill: "hsl(210, 49, 50.535714285714)", stroke: "#204a87"
                            },
                            text: { content:  137 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 137"},
                        },                        "universitario":{
                            value: "30",
                            attrs: {
                                fill: "hsl(210, 49, 69.642857142857)", stroke: "#204a87"
                            },
                            text: { content:  30 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 30"},
                        },}
            });
        });