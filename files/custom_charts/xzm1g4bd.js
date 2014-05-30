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
areas: {                "alto_do_parque":{ 
                   value: "152.63",
                    attrs: {
                        fill: "hsl(53, 98, 64.903197353914)", stroke: "#204a87"
                    },
                    text: { content:  "153" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: 153"},
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
                   value: "452.5",
                    attrs: {
                        fill: "hsl(53, 98, 45.066152149945)", stroke: "#204a87"
                    },
                    text: { content:  "453" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Valor: 453"},
                },                "conservas":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br /> - Valor não informado -"},
                },                "conventos":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br /> - Valor não informado -"},
                },                "floresta":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br /> - Valor não informado -"},
                },                "florestal":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br /> - Valor não informado -"},
                },                "hidraulica":{
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br /> - Valor não informado -"},
                },                "igrejinha":{ 
                   value: "45.8",
                    attrs: {
                        fill: "hsl(53, 98, 71.970231532525)", stroke: "#204a87"
                    },
                    text: { content:  "46" , attrs: {fill:"#222"} },
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: 46"},
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
                    href: "#",
                    tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br /> - Valor não informado -"},
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