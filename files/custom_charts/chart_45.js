        $(function() {
            $(".maparea1").mapael({
                map: {
                    name: "lajeado",
                    width: 700,
                    defaultArea: {
                        attrs: {
                            fill: "#cadbed", stroke: "#204a87"
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
                        display: true,
                        title: "Requerimentos por bairro"                     
            }
        },
        areas: {                        "alto_do_parque":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br /> - Valor não informado -"},
                        },                        "americano":{
                            value: "456",
                            attrs: {
                                fill: hsl(53deg, 98%, 73.005249343832%), stroke: "#204a87"
                            },
                            text: { content:  456 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Valor: 456"},
                        },                        "bom_pastor":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br /> - Valor não informado -"},
                        },                        "campestre":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br /> - Valor não informado -"},
                        },                        "carneiros":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br /> - Valor não informado -"},
                        },                        "centenario":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br /> - Valor não informado -"},
                        },                        "centro":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br /> - Valor não informado -"},
                        },                        "conservas":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br /> - Valor não informado -"},
                        },                        "conventos":{
                            value: "456",
                            attrs: {
                                fill: hsl(53deg, 98%, 73.005249343832%), stroke: "#204a87"
                            },
                            text: { content:  456 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Valor: 456"},
                        },                        "floresta":{
                            value: "6857",
                            attrs: {
                                fill: hsl(53deg, 98%, 45.004374453193%), stroke: "#204a87"
                            },
                            text: { content:  6857 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: 6857"},
                        },                        "florestal":{
                            value: "546",
                            attrs: {
                                fill: hsl(53deg, 98%, 72.61154855643%), stroke: "#204a87"
                            },
                            text: { content:  546 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: 546"},
                        },                        "hidraulica":{
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
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
                            value: "456",
                            attrs: {
                                fill: hsl(53deg, 98%, 73.005249343832%), stroke: "#204a87"
                            },
                            text: { content:  456 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: 456"},
                        },                        "nacoes":{
                            value: "456",
                            attrs: {
                                fill: hsl(53deg, 98%, 73.005249343832%), stroke: "#204a87"
                            },
                            text: { content:  456 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />Valor: 456"},
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
                            value: "465",
                            attrs: {
                                fill: hsl(53deg, 98%, 72.965879265092%), stroke: "#204a87"
                            },
                            text: { content:  465 , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />Valor: 465"},
                        },}
            });
        });