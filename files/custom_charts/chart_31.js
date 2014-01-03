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
                        max: 546,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 546,
                        max: 1091,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 1091,
                        max: 1637,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 1637,
                        max: 2182,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 2182,
                        max: 2728,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 2728,
                        max: 3273,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 3273,
                        max: 3819,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 3819,
                        max: 4364,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 4364,
                        max: 4910,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 4910,
                        max: 5455,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                        "alto_do_parque":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Alto do Parque </span><br />Valor: "},
                        },                        "bom_pastor":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Bom Pastor </span><br />Valor: "},
                        },                        "campestre":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Valor: "},
                        },                        "carneiros":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Valor: "},
                        },                        "conservas":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Valor: "},
                        },                        "florestal":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Florestal </span><br />Valor: "},
                        },                        "igrejinha":{
                            value: "",
                            text: { content:   , attrs: {fill:"#222"} },
                            href: "#",
                            tooltip: {content: "<span style=\"font-weight:bold;\">Igrejinha </span><br />Valor: "},
                        },}
            });
        });