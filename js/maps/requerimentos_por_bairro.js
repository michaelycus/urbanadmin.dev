$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#c9ffc9"
                }
            }
        },
        legend: {
            area: {
                display: true,
                title: "Requerimentos por bairro",
                slices: [{
                min: 0,
                max: 0,
                attrs: {
                    fill: "#32f532"}
              },{
                min: 0,
                max: 1,
                attrs: {
                    fill: "#32eb32"}
              },{
                min: 1,
                max: 1,
                attrs: {
                    fill: "#32e132"}
              },{
                min: 1,
                max: 2,
                attrs: {
                    fill: "#32d732"}
              },{
                min: 2,
                max: 2,
                attrs: {
                    fill: "#32cd32"}
              },{
                min: 2,
                max: 2,
                attrs: {
                    fill: "#32c332"}
              },{
                min: 2,
                max: 3,
                attrs: {
                    fill: "#32b932"}
              },{
                min: 3,
                max: 3,
                attrs: {
                    fill: "#32af32"}
              },{
                min: 3,
                max: 4,
                attrs: {
                    fill: "#32a532"}
              },{
                min: 4,
                max: 4,
                attrs: {
                    fill: "#329b32"}
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
                        value: "3",
                        text: { content:  3 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conventos </span><br />Requerimentos: 3"},
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
                    },                    "moinhos":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />Requerimentos: 1"},
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