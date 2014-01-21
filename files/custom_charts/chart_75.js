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
                            value: "10",
                            attrs: {
                                fill: "hsl(53, 98, 71.629213483146)", stroke: "#204a87"
                            },
                            text: { content:  10 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 10"},
                        },                        "bom_pastor":{
                            value: "20",
                            attrs: {
                                fill: "hsl(53, 98, 68.258426966292)", stroke: "#204a87"
                            },
                            text: { content:  20 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 20"},
                        },                        "campestre":{
                            value: "15",
                            attrs: {
                                fill: "hsl(53, 98, 69.943820224719)", stroke: "#204a87"
                            },
                            text: { content:  15 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 15"},
                        },                        "carneiros":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br /> - Valor não informado -"},
                        },                        "centenario":{
                            value: "60",
                            attrs: {
                                fill: "hsl(53, 98, 54.775280898876)", stroke: "#204a87"
                            },
                            text: { content:  60 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 60"},
                        },                        "centro":{
                            value: "13",
                            attrs: {
                                fill: "hsl(53, 98, 70.61797752809)", stroke: "#204a87"
                            },
                            text: { content:  13 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 13"},
                        },                        "conservas":{
                            value: "88",
                            attrs: {
                                fill: "hsl(53, 98, 45.337078651685)", stroke: "#204a87"
                            },
                            text: { content:  88 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 88"},
                        },                        "conventos":{
                            value: "12",
                            attrs: {
                                fill: "hsl(53, 98, 70.955056179775)", stroke: "#204a87"
                            },
                            text: { content:  12 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 12"},
                        },                        "floresta":{
                            value: "40",
                            attrs: {
                                fill: "hsl(53, 98, 61.516853932584)", stroke: "#204a87"
                            },
                            text: { content:  40 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 40"},
                        },                        "florestal":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                        },                        "hidraulica":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
                        },                        "igrejinha":{
                            value: "20",
                            attrs: {
                                fill: "hsl(53, 98, 68.258426966292)", stroke: "#204a87"
                            },
                            text: { content:  20 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 20"},
                        },                        "imigrante":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br /> - Valor não informado -"},
                        },                        "jardim_do_cedro":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br /> - Valor não informado -"},
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
                            value: "30",
                            attrs: {
                                fill: "hsl(53, 98, 64.887640449438)", stroke: "#204a87"
                            },
                            text: { content:  30 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 30"},
                        },                        "nacoes":{
                            value: "50",
                            attrs: {
                                fill: "hsl(53, 98, 58.14606741573)", stroke: "#204a87"
                            },
                            text: { content:  50 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 50"},
                        },                        "olarias":{
                            value: "10",
                            attrs: {
                                fill: "hsl(53, 98, 71.629213483146)", stroke: "#204a87"
                            },
                            text: { content:  10 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 10"},
                        },                        "planalto":{
                            value: "30",
                            attrs: {
                                fill: "hsl(53, 98, 64.887640449438)", stroke: "#204a87"
                            },
                            text: { content:  30 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 30"},
                        },                        "santo_andre":{
                            value: "15",
                            attrs: {
                                fill: "hsl(53, 98, 69.943820224719)", stroke: "#204a87"
                            },
                            text: { content:  15 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 15"},
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