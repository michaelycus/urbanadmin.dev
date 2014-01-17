        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(90, 75, 84)", stroke: "#204a87"
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
                            value: "2",
                            attrs: {
                                fill: "hsl(90, 75, 72.142857142857)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 2"},
                        },                        "americano":{
                            value: "3",
                            attrs: {
                                fill: "hsl(90, 75, 70.714285714286)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 3"},
                        },                        "bom_pastor":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 69.285714285714)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 4"},
                        },                        "campestre":{
                            value: "5",
                            attrs: {
                                fill: "hsl(90, 75, 67.857142857143)", stroke: "#204a87"
                            },
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 5"},
                        },                        "carneiros":{
                            value: "6",
                            attrs: {
                                fill: "hsl(90, 75, 66.428571428571)", stroke: "#204a87"
                            },
                            text: { content:  6 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 6"},
                        },                        "centenario":{
                            value: "7",
                            attrs: {
                                fill: "hsl(90, 75, 65)", stroke: "#204a87"
                            },
                            text: { content:  7 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 7"},
                        },                        "centro":{
                            value: "8",
                            attrs: {
                                fill: "hsl(90, 75, 63.571428571429)", stroke: "#204a87"
                            },
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 8"},
                        },                        "conservas":{
                            value: "9",
                            attrs: {
                                fill: "hsl(90, 75, 62.142857142857)", stroke: "#204a87"
                            },
                            text: { content:  9 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 9"},
                        },                        "conventos":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 69.285714285714)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 4"},
                        },                        "floresta":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br /> - Valor não informado -"},
                        },                        "florestal":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                        },                        "hidraulica":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
                        },                        "igrejinha":{
                            value: "20",
                            attrs: {
                                fill: "hsl(90, 75, 46.428571428571)", stroke: "#204a87"
                            },
                            text: { content:  20 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 20"},
                        },                        "imigrante":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 69.285714285714)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 4"},
                        },                        "jardim_do_cedro":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 69.285714285714)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 4"},
                        },                        "moinhos":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br /> - Valor não informado -"},
                        },                        "moinhos_dagua":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br /> - Valor não informado -"},
                        },                        "montanha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br /> - Valor não informado -"},
                        },                        "morro_vinte_cinco":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br /> - Valor não informado -"},
                        },                        "nacoes":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br /> - Valor não informado -"},
                        },                        "olarias":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br /> - Valor não informado -"},
                        },                        "planalto":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br /> - Valor não informado -"},
                        },                        "santo_andre":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br /> - Valor não informado -"},
                        },                        "santo_antonio":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br /> - Valor não informado -"},
                        },                        "sao_bento":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br /> - Valor não informado -"},
                        },                        "sao_cristovao":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br /> - Valor não informado -"},
                        },                        "universitario":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br /> - Valor não informado -"},
                        },}
            });
        });