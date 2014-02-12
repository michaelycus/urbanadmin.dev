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
                            value: "318",
                            attrs: {
                                fill: "hsl(53, 98, 71.965648855)", stroke: "#204a87"
                            },
                            text: { content:  318 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: 318"},
                        },                        "carneiros":{
                            value: "197",
                            attrs: {
                                fill: "hsl(53, 98, 73.1202290076)", stroke: "#204a87"
                            },
                            text: { content:  197 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: 197"},
                        },                        "centenario":{
                            value: "248",
                            attrs: {
                                fill: "hsl(53, 98, 72.6335877863)", stroke: "#204a87"
                            },
                            text: { content:  248 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />Valor: 248"},
                        },                        "centro":{
                            value: "3143",
                            attrs: {
                                fill: "hsl(53, 98, 45.0095419847)", stroke: "#204a87"
                            },
                            text: { content:  3143 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 3143"},
                        },                        "conservas":{
                            value: "400",
                            attrs: {
                                fill: "hsl(53, 98, 71.1832061069)", stroke: "#204a87"
                            },
                            text: { content:  400 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: 400"},
                        },                        "conventos":{
                            value: "782",
                            attrs: {
                                fill: "hsl(53, 98, 67.5381679389)", stroke: "#204a87"
                            },
                            text: { content:  782 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 782"},
                        },                        "floresta":{
                            value: "266",
                            attrs: {
                                fill: "hsl(53, 98, 72.4618320611)", stroke: "#204a87"
                            },
                            text: { content:  266 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 266"},
                        },                        "florestal":{
                            value: "1037",
                            attrs: {
                                fill: "hsl(53, 98, 65.1049618321)", stroke: "#204a87"
                            },
                            text: { content:  1037 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 1037"},
                        },                        "hidraulica":{
                            value: "440",
                            attrs: {
                                fill: "hsl(53, 98, 70.8015267176)", stroke: "#204a87"
                            },
                            text: { content:  440 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Valor: 440"},
                        },                        "igrejinha":{
                            value: "41",
                            attrs: {
                                fill: "hsl(53, 98, 74.608778626)", stroke: "#204a87"
                            },
                            text: { content:  41 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 41"},
                        },                        "imigrante":{
                            value: "113",
                            attrs: {
                                fill: "hsl(53, 98, 73.9217557252)", stroke: "#204a87"
                            },
                            text: { content:  113 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Valor: 113"},
                        },                        "jardim_do_cedro":{
                            value: "249",
                            attrs: {
                                fill: "hsl(53, 98, 72.6240458015)", stroke: "#204a87"
                            },
                            text: { content:  249 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Valor: 249"},
                        },                        "moinhos":{
                            value: "1090",
                            attrs: {
                                fill: "hsl(53, 98, 64.5992366412)", stroke: "#204a87"
                            },
                            text: { content:  1090 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Valor: 1090"},
                        },                        "moinhos_dagua":{
                            value: "299",
                            attrs: {
                                fill: "hsl(53, 98, 72.1469465649)", stroke: "#204a87"
                            },
                            text: { content:  299 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Valor: 299"},
                        },                        "montanha":{
                            value: "680",
                            attrs: {
                                fill: "hsl(53, 98, 68.5114503817)", stroke: "#204a87"
                            },
                            text: { content:  680 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />Valor: 680"},
                        },                        "morro_vinte_cinco":{
                            value: "186",
                            attrs: {
                                fill: "hsl(53, 98, 73.2251908397)", stroke: "#204a87"
                            },
                            text: { content:  186 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 186"},
                        },                        "nacoes":{
                            value: "60",
                            attrs: {
                                fill: "hsl(53, 98, 74.427480916)", stroke: "#204a87"
                            },
                            text: { content:  60 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 60"},
                        },                        "olarias":{
                            value: "346",
                            attrs: {
                                fill: "hsl(53, 98, 71.6984732824)", stroke: "#204a87"
                            },
                            text: { content:  346 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />Valor: 346"},
                        },                        "planalto":{
                            value: "48",
                            attrs: {
                                fill: "hsl(53, 98, 74.5419847328)", stroke: "#204a87"
                            },
                            text: { content:  48 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />Valor: 48"},
                        },                        "santo_andre":{
                            value: "387",
                            attrs: {
                                fill: "hsl(53, 98, 71.3072519084)", stroke: "#204a87"
                            },
                            text: { content:  387 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />Valor: 387"},
                        },                        "santo_antonio":{
                            value: "284",
                            attrs: {
                                fill: "hsl(53, 98, 72.2900763359)", stroke: "#204a87"
                            },
                            text: { content:  284 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />Valor: 284"},
                        },                        "sao_bento":{
                            value: "244",
                            attrs: {
                                fill: "hsl(53, 98, 72.6717557252)", stroke: "#204a87"
                            },
                            text: { content:  244 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />Valor: 244"},
                        },                        "sao_cristovao":{
                            value: "1937",
                            attrs: {
                                fill: "hsl(53, 98, 56.5171755725)", stroke: "#204a87"
                            },
                            text: { content:  1937 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br />Valor: 1937"},
                        },                        "universitario":{
                            value: "220",
                            attrs: {
                                fill: "hsl(53, 98, 72.9007633588)", stroke: "#204a87"
                            },
                            text: { content:  220 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 220"},
                        },}
            });
        });