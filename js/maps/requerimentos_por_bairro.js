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
                title: "Requerimentos por bairro",
                slices: [{
                min: 0,
                max: 1,
                attrs: {
                    fill: "#5d89bd"}
              },{
                min: 1,
                max: 3,
                attrs: {
                    fill: "#4974ab"}
              },{
                min: 3,
                max: 4,
                attrs: {
                    fill: "#345f99"}
              },{
                min: 4,
                max: 5,
                attrs: {
                    fill: "#204a87"}
              },]
    }
},
areas: {                    "carneiros":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 1"},
                    },                    "centro":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 2"},
                    },                    "conservas":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Requerimentos: 1"},
                    },                    "conventos":{
                        value: "4",
                        text: { content:  4 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 4"},
                    },                    "floresta":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />Requerimentos: 1"},
                    },                    "florestal":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Requerimentos: 1"},
                    },                    "hidraulica":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />Requerimentos: 1"},
                    },                    "igrejinha":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 1"},
                    },                    "imigrante":{
                        value: "3",
                        text: { content:  3 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />Requerimentos: 3"},
                    },                    "jardim_do_cedro":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />Requerimentos: 1"},
                    },                    "moinhos":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 2"},
                    },                    "moinhos_dagua":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 1"},
                    },                    "morro_vinte_cinco":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />Requerimentos: 1"},
                    },}
    });
});