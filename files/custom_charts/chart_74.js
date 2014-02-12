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
                            value: "55",
                            attrs: {
                                fill: "hsl(53, 98, 51.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  55 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 55"},
                        },                        "carneiros":{
                            value: "48",
                            attrs: {
                                fill: "hsl(53, 98, 54.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  48 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 48"},
                        },                        "centenario":{
                            value: "59",
                            attrs: {
                                fill: "hsl(53, 98, 49.7142857143)", stroke: "#204a87"
                            },
                            text: { content:  59 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 59"},
                        },                        "centro":{
                            value: "41",
                            attrs: {
                                fill: "hsl(53, 98, 57.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  41 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 41"},
                        },                        "conservas":{
                            value: "63",
                            attrs: {
                                fill: "hsl(53, 98, 48)", stroke: "#204a87"
                            },
                            text: { content:  63 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 63"},
                        },                        "conventos":{
                            value: "53",
                            attrs: {
                                fill: "hsl(53, 98, 52.2857142857)", stroke: "#204a87"
                            },
                            text: { content:  53 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 53"},
                        },                        "floresta":{
                            value: "49",
                            attrs: {
                                fill: "hsl(53, 98, 54)", stroke: "#204a87"
                            },
                            text: { content:  49 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 49"},
                        },                        "florestal":{
                            value: "43",
                            attrs: {
                                fill: "hsl(53, 98, 56.5714285714)", stroke: "#204a87"
                            },
                            text: { content:  43 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 43"},
                        },                        "hidraulica":{
                            value: "47",
                            attrs: {
                                fill: "hsl(53, 98, 54.8571428571)", stroke: "#204a87"
                            },
                            text: { content:  47 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 47"},
                        },                        "igrejinha":{
                            value: "63",
                            attrs: {
                                fill: "hsl(53, 98, 48)", stroke: "#204a87"
                            },
                            text: { content:  63 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 63"},
                        },                        "imigrante":{
                            value: "55",
                            attrs: {
                                fill: "hsl(53, 98, 51.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  55 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 55"},
                        },                        "jardim_do_cedro":{
                            value: "69",
                            attrs: {
                                fill: "hsl(53, 98, 45.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  69 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 69"},
                        },                        "moinhos":{
                            value: "46",
                            attrs: {
                                fill: "hsl(53, 98, 55.2857142857)", stroke: "#204a87"
                            },
                            text: { content:  46 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 46"},
                        },                        "moinhos_dagua":{
                            value: "60",
                            attrs: {
                                fill: "hsl(53, 98, 49.2857142857)", stroke: "#204a87"
                            },
                            text: { content:  60 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 60"},
                        },                        "montanha":{
                            value: "57",
                            attrs: {
                                fill: "hsl(53, 98, 50.5714285714)", stroke: "#204a87"
                            },
                            text: { content:  57 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 57"},
                        },                        "morro_vinte_cinco":{
                            value: "63",
                            attrs: {
                                fill: "hsl(53, 98, 48)", stroke: "#204a87"
                            },
                            text: { content:  63 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 63"},
                        },                        "nacoes":{
                            value: "62",
                            attrs: {
                                fill: "hsl(53, 98, 48.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  62 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 62"},
                        },                        "olarias":{
                            value: "63",
                            attrs: {
                                fill: "hsl(53, 98, 48)", stroke: "#204a87"
                            },
                            text: { content:  63 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 63"},
                        },                        "planalto":{
                            value: "64",
                            attrs: {
                                fill: "hsl(53, 98, 47.5714285714)", stroke: "#204a87"
                            },
                            text: { content:  64 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 64"},
                        },                        "santo_andre":{
                            value: "61",
                            attrs: {
                                fill: "hsl(53, 98, 48.8571428571)", stroke: "#204a87"
                            },
                            text: { content:  61 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 61"},
                        },                        "santo_antonio":{
                            value: "61",
                            attrs: {
                                fill: "hsl(53, 98, 48.8571428571)", stroke: "#204a87"
                            },
                            text: { content:  61 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 61"},
                        },                        "sao_bento":{
                            value: "61",
                            attrs: {
                                fill: "hsl(53, 98, 48.8571428571)", stroke: "#204a87"
                            },
                            text: { content:  61 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 61"},
                        },                        "sao_cristovao":{
                            value: "47",
                            attrs: {
                                fill: "hsl(53, 98, 54.8571428571)", stroke: "#204a87"
                            },
                            text: { content:  47 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 47"},
                        },                        "universitario":{
                            value: "62",
                            attrs: {
                                fill: "hsl(53, 98, 48.4285714286)", stroke: "#204a87"
                            },
                            text: { content:  62 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 62"},
                        },}
            });
        });