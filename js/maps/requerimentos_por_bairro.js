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
                        max: 3,
                        attrs: {
                            fill: "#6996c7"}
                      },{
                        min: 3,
                        max: 6,
                        attrs: {
                            fill: "#618ec0"}
                      },{
                        min: 6,
                        max: 9,
                        attrs: {
                            fill: "#5985b9"}
                      },{
                        min: 9,
                        max: 12,
                        attrs: {
                            fill: "#517db2"}
                      },{
                        min: 12,
                        max: 15,
                        attrs: {
                            fill: "#4974ab"}
                      },{
                        min: 15,
                        max: 17,
                        attrs: {
                            fill: "#406ca3"}
                      },{
                        min: 17,
                        max: 20,
                        attrs: {
                            fill: "#38639c"}
                      },{
                        min: 20,
                        max: 23,
                        attrs: {
                            fill: "#305b95"}
                      },{
                        min: 23,
                        max: 26,
                        attrs: {
                            fill: "#28528e"}
                      },{
                        min: 26,
                        max: 29,
                        attrs: {
                            fill: "#204a87"}
                      },]
            }
        },
        areas: {                            "carneiros":{
                                value: "28",
                                text: { content:  28 , attrs: {fill:"#222"} },
                                href: "#",
                                tooltip: {content: "<span style=\"font-weight:bold;\">Carneiros </span><br />Requerimentos: 28"},
                            },}
            });
        });