        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    defaultArea: {
                        attrs: {
                            fill: "hsl(37, 75, 84)", stroke: "#204a87"
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
                           value: "1000",
                            attrs: {
                                fill: "hsl(37, 75, 74.945965515192)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 1.000,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 1000"},
                        },                        "americano":{ 
                           value: "2000",
                            attrs: {
                                fill: "hsl(37, 75, 74.891931030384)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 2.000,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 2000"},
                        },                        "bom_pastor":{ 
                           value: "3000",
                            attrs: {
                                fill: "hsl(37, 75, 74.837896545575)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 3.000,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: 3000"},
                        },                        "campestre":{ 
                           value: "4000",
                            attrs: {
                                fill: "hsl(37, 75, 74.783862060767)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 4.000,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 4000"},
                        },                        "carneiros":{ 
                           value: "555200",
                            attrs: {
                                fill: "hsl(37, 75, 45.000054034485)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 555.200,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 555200"},
                        },                        "centenario":{ 
                           value: "10002",
                            attrs: {
                                fill: "hsl(37, 75, 74.459547082948)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 10.002,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 10002"},
                        },                        "centro":{ 
                           value: "5612.65",
                            attrs: {
                                fill: "hsl(37, 75, 74.696723348841)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 5.612,65" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 5612.65"},
                        },                        "conservas":{ 
                           value: "1125.12",
                            attrs: {
                                fill: "hsl(37, 75, 74.939204720453)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 1.125,12" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 1125.12"},
                        },                        "conventos":{ 
                           value: "12842.2",
                            attrs: {
                                fill: "hsl(37, 75, 74.306078339196)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 12.842,20" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 12842.2"},
                        },                        "floresta":{ 
                           value: "652.5",
                            attrs: {
                                fill: "hsl(37, 75, 74.964742498663)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 652,50" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 652.5"},
                        },                        "florestal":{ 
                           value: "15141",
                            attrs: {
                                fill: "hsl(37, 75, 74.181863865519)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 15.141,00" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 15141"},
                        },                        "hidraulica":{ 
                           value: "1552.5",
                            attrs: {
                                fill: "hsl(37, 75, 74.916111462335)", stroke: "#204a87"
                            },
                            text: { content:  "R$ 1.552,50" , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 1552.5"},
                        },                        "igrejinha":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br /> - Valor não informado -"},
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