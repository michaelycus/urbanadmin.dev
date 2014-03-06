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
                            value: "45",
                            attrs: {
                                fill: "hsl(53, 98, 73.898947883533)", stroke: "#204a87"
                            },
                            text: { content:  "45%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 45"},
                        },                        "americano":{
                            value: "451",
                            attrs: {
                                fill: "hsl(53, 98, 63.965011010521)", stroke: "#204a87"
                            },
                            text: { content:  "451%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 451"},
                        },                        "bom_pastor":{
                            value: "215",
                            attrs: {
                                fill: "hsl(53, 98, 69.73941766577)", stroke: "#204a87"
                            },
                            text: { content:  "215%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 215"},
                        },                        "campestre":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br /> - Valor não informado -"},
                        },                        "carneiros":{
                            value: "54",
                            attrs: {
                                fill: "hsl(53, 98, 73.67873746024)", stroke: "#204a87"
                            },
                            text: { content:  "54%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 54"},
                        },                        "centenario":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br /> - Valor não informado -"},
                        },                        "centro":{
                            value: "54",
                            attrs: {
                                fill: "hsl(53, 98, 73.67873746024)", stroke: "#204a87"
                            },
                            text: { content:  "54%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 54"},
                        },                        "conservas":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br /> - Valor não informado -"},
                        },                        "conventos":{
                            value: "16",
                            attrs: {
                                fill: "hsl(53, 98, 74.608514803034)", stroke: "#204a87"
                            },
                            text: { content:  "16%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 16"},
                        },                        "floresta":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br /> - Valor não informado -"},
                        },                        "florestal":{
                            value: "15.56",
                            attrs: {
                                fill: "hsl(53, 98, 74.619280645951)", stroke: "#204a87"
                            },
                            text: { content:  "16%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 15.56"},
                        },                        "hidraulica":{
                            value: "1225.1",
                            attrs: {
                                fill: "hsl(53, 98, 45.02446782481)", stroke: "#204a87"
                            },
                            text: { content:  "1.225%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 1225.1"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br /> - Valor não informado -"},
                        },                        "imigrante":{
                            value: "556.2",
                            attrs: {
                                fill: "hsl(53, 98, 61.39099584047)", stroke: "#204a87"
                            },
                            text: { content:  "556%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 556.2"},
                        },                        "jardim_do_cedro":{
                            value: "1.515",
                            attrs: {
                                fill: "hsl(53, 98, 74.962931245412)", stroke: "#204a87"
                            },
                            text: { content:  "2%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 1.515"},
                        },                        "moinhos":{
                            value: "14.56",
                            attrs: {
                                fill: "hsl(53, 98, 74.643748470761)", stroke: "#204a87"
                            },
                            text: { content:  "15%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 14.56"},
                        },                        "moinhos_dagua":{
                            value: "14.69",
                            attrs: {
                                fill: "hsl(53, 98, 74.640567653536)", stroke: "#204a87"
                            },
                            text: { content:  "15%" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 14.69"},
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