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
areas: {                "alto_do_parque":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br /> - Valor não informado -"},
                },                "americano":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br /> - Valor não informado -"},
                },                "bom_pastor":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br /> - Valor não informado -"},
                },                "campestre":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br /> - Valor não informado -"},
                },                "carneiros":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br /> - Valor não informado -"},
                },                "centenario":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br /> - Valor não informado -"},
                },                "centro":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br /> - Valor não informado -"},
                },                "conservas":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br /> - Valor não informado -"},
                },                "conventos":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br /> - Valor não informado -"},
                },                "floresta":{ 
                   value: "12.5",
                    attrs: {
                        fill: "hsl(90, 75, 74.341989822776)", stroke: "#204a87"
                    },
                    text: { content:  "" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Valor: R$ 12,50"},
                },                "florestal":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                },                "hidraulica":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
                },                "igrejinha":{ 
                   value: "453.9",
                    attrs: {
                        fill: "hsl(90, 75, 51.106334444639)", stroke: "#204a87"
                    },
                    text: { content:  "" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: R$ 453,90"},
                },                "imigrante":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br /> - Valor não informado -"},
                },                "jardim_do_cedro":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br /> - Valor não informado -"},
                },                "moinhos":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br /> - Valor não informado -"},
                },                "moinhos_dagua":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br /> - Valor não informado -"},
                },                "montanha":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br /> - Valor não informado -"},
                },                "morro_vinte_cinco":{ 
                   value: "568.9",
                    attrs: {
                        fill: "hsl(90, 75, 45.052640814178)", stroke: "#204a87"
                    },
                    text: { content:  "" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Valor: R$ 568,90"},
                },                "nacoes":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br /> - Valor não informado -"},
                },                "olarias":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br /> - Valor não informado -"},
                },                "planalto":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br /> - Valor não informado -"},
                },                "santo_andre":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br /> - Valor não informado -"},
                },                "santo_antonio":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br /> - Valor não informado -"},
                },                "sao_bento":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br /> - Valor não informado -"},
                },                "sao_cristovao":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">São Cristóvão </span><br /> - Valor não informado -"},
                },                "universitario":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br /> - Valor não informado -"},
                },}
    });
});