$(function() {
    $(".maparea1").mapael({
        map: {
            name: "lajeado",
            width: 700,
            defaultArea: {
                attrs: {
                    fill: "#fce94f", stroke: "#c4a000"
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
                title: "Requerentes por bairro",
                slices: [{
                min: 0,
                max: 1,
                attrs: {
                    fill: "#e4c900"}
              },{
                min: 1,
                max: 2,
                attrs: {
                    fill: "#dcbf00"}
              },{
                min: 2,
                max: 4,
                attrs: {
                    fill: "#d4b400"}
              },{
                min: 4,
                max: 5,
                attrs: {
                    fill: "#ccaa00"}
              },{
                min: 5,
                max: 6,
                attrs: {
                    fill: "#c4a000"}
              },]
    }
},
areas: {                    "americano":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Americano </span><br />Requerimentos: 1"},
                    },                    "centro":{
                        value: "2",
                        text: { content:  2 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Centro </span><br />Requerimentos: 2"},
                    },                    "igrejinha":{
                        value: "5",
                        text: { content:  5 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Requerimentos: 5"},
                    },                    "moinhos_dagua":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Moinhos D' Água </span><br />Requerimentos: 1"},
                    },}
    });
});