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
                max: 1,
                attrs: {
                    fill: "#32f532"}
              },{
                min: 1,
                max: 1,
                attrs: {
                    fill: "#32eb32"}
              },{
                min: 1,
                max: 2,
                attrs: {
                    fill: "#32e132"}
              },{
                min: 2,
                max: 2,
                attrs: {
                    fill: "#32d732"}
              },{
                min: 2,
                max: 3,
                attrs: {
                    fill: "#32cd32"}
              },{
                min: 3,
                max: 4,
                attrs: {
                    fill: "#32c332"}
              },{
                min: 4,
                max: 4,
                attrs: {
                    fill: "#32b932"}
              },{
                min: 4,
                max: 5,
                attrs: {
                    fill: "#32af32"}
              },{
                min: 5,
                max: 5,
                attrs: {
                    fill: "#32a532"}
              },{
                min: 5,
                max: 6,
                attrs: {
                    fill: "#329b32"}
              },]
    }
},
areas: {                    "americano":{
                        value: "2",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />População: 2"},
                    },                    "campestre":{
                        value: "1",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />População: 1"},
                    },                    "carneiros":{
                        value: "1",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />População: 1"},
                    },                    "centenario":{
                        value: "2",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centenário </span><br />População: 2"},
                    },                    "floresta":{
                        value: "3",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Floresta </span><br />População: 3"},
                    },                    "florestal":{
                        value: "2",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />População: 2"},
                    },                    "hidraulica":{
                        value: "4",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Hidráulica </span><br />População: 4"},
                    },                    "igrejinha":{
                        value: "4",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />População: 4"},
                    },                    "imigrante":{
                        value: "4",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Imigrante </span><br />População: 4"},
                    },                    "jardim_do_cedro":{
                        value: "5",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Jardim do Cedro </span><br />População: 5"},
                    },                    "moinhos":{
                        value: "5",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos </span><br />População: 5"},
                    },                    "montanha":{
                        value: "2",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Montanha </span><br />População: 2"},
                    },                    "morro_vinte_cinco":{
                        value: "1",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Morro 25 </span><br />População: 1"},
                    },                    "santo_andre":{
                        value: "1",
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Santo André </span><br />População: 1"},
                    },}
    });
});