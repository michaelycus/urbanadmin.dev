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
                            value: "1",
                            attrs: {
                                fill: "hsl(90, 75, 72)", stroke: "#204a87"
                            },
                            text: { content:  1 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 1"},
                        },                        "americano":{
                            value: "2",
                            attrs: {
                                fill: "hsl(90, 75, 69)", stroke: "#204a87"
                            },
                            text: { content:  2 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 2"},
                        },                        "bom_pastor":{
                            value: "3",
                            attrs: {
                                fill: "hsl(90, 75, 66)", stroke: "#204a87"
                            },
                            text: { content:  3 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 3"},
                        },                        "campestre":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 63)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 4"},
                        },                        "carneiros":{
                            value: "5",
                            attrs: {
                                fill: "hsl(90, 75, 60)", stroke: "#204a87"
                            },
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 5"},
                        },                        "centenario":{
                            value: "6",
                            attrs: {
                                fill: "hsl(90, 75, 57)", stroke: "#204a87"
                            },
                            text: { content:  6 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 6"},
                        },                        "centro":{
                            value: "7",
                            attrs: {
                                fill: "hsl(90, 75, 54)", stroke: "#204a87"
                            },
                            text: { content:  7 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 7"},
                        },                        "conservas":{
                            value: "8",
                            attrs: {
                                fill: "hsl(90, 75, 51)", stroke: "#204a87"
                            },
                            text: { content:  8 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 8"},
                        },                        "conventos":{
                            value: "9",
                            attrs: {
                                fill: "hsl(90, 75, 48)", stroke: "#204a87"
                            },
                            text: { content:  9 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 9"},
                        },                        "floresta":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 63)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 4"},
                        },                        "florestal":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                        },                        "hidraulica":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br /> - Valor não informado -"},
                        },                        "imigrante":{
                            value: "5",
                            attrs: {
                                fill: "hsl(90, 75, 60)", stroke: "#204a87"
                            },
                            text: { content:  5 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 5"},
                        },                        "jardim_do_cedro":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 63)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 4"},
                        },                        "moinhos":{
                            value: "4",
                            attrs: {
                                fill: "hsl(90, 75, 63)", stroke: "#204a87"
                            },
                            text: { content:  4 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 4"},
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