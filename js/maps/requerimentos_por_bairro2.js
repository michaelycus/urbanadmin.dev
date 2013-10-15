$(function() {

    // Example #1
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700
        },
        legend: {
            area: {
                display: true,
                title: "População de Lajeado por bairros",
                labelAttrs: {title: "Esconder esses bairros"},
                slices: [
                    {
                        max: 1000,
                        attrs: {
                            fill: "#97e766"
                        },
                        label: "Com menos que 1000 habitantes"
                    },
                    {
                        min: 1000,
                        max: 2500,
                        attrs: {
                            fill: "#7fd34d"
                        },
                        label: "Entre 1000 e 2500 habitantes"
                    },
                    {
                        min: 2500,
                        max: 5000,
                        attrs: {
                            fill: "#5faa32"
                        },
                        label: "Entre 2500 e 5000 habitantes"
                    },
                    {
                        min: 5000,
                        attrs: {
                            fill: "#3f7d1a"
                        },
                        label: "Mais que 5000 habitantes"
                    }
                ]
            }
        },        
        areas: {
            "alto_do_parque": {
                value: "1618",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />População:  1618"}
            },
            "americano": {
                value: "2684",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />População:  2684"}
            },
            "bom_pastor": {
                value: "1118",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />População:  1118"}
            },
            "campestre": {
                value: " 1985",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />População:  1985"}
            },
            "carneiros": {
                value: " 1279",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />População:  1279"}
            },
            "centenario": {
                value: " 1704",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />População:  1704"}
            },
            "centro": {
                value: "7055",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />População:  7055"}
            },
            "conservas": {
                value: "2336",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Conversas </span><br />População:  2336"}
            },
            "conventos": {
                value: "3423",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />População: 3423"}
            },
            "floresta": {
                value: "500",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />População:  500"}
            },
            "florestal": {
                value: "4999",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />População:  4999"}
            },
            "hidraulica": {
                value: "2368",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Hidraúlica </span><br />População:  2368"}
            },
            "igrejinha": {
                value: "936",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />População:  936"}
            },
            "imigrante": {
                value: "666",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />População:  666"}
            },
            "jardim_do_cedro": {
                value: "3692",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />População:  3692"}
            },
            "moinhos": {
                value: "5528",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />População:  5528"}
            },
            "moinhos_dagua": {
                value: "2152",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D'Água </span><br />População:  2152"}
            },
            "montanha": {
                value: "4000",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />População:  4000"}
            },
            "morro_vinte_cinco": {
                value: "1316",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />População:  1316"}
            },
            "nacoes": {
                value: "584",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Nações </span><br />População:  584"}
            },
            "olarias": {
                value: "2195",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Olarias </span><br />População:  2195"}
            },
            "planalto": {
                value: "1502",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Planalto </span><br />População:  1502"}
            },
            "santo_andre": {
                value: "1966",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />População:  1966"}
            },
            "santo_antonio": {
                value: "3260",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Santo Antônio </span><br />População:  3260"}
            },
            "sao_bento": {
                value: "1525",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">São Bento </span><br />População: 1525"}
            },     
            "sao_cristovao": {
                value: "7039",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">São Cristovão </span><br />População:  7039"}
            },            
            "universitario": {
                value: "3750",
                href: "#",
                tooltip: {content: "<span style=\"font-weight:bold;\">Universitário </span><br />População:  3750"}
            }     
        }
    });
});