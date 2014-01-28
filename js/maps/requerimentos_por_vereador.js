        $(function() {
            var data = {"0": { "areas": {"": {"text": {"content": ""}},"alto_do_parque": {"text": {"content": ""}},"americano": {"text": {"content": ""}},"bom_pastor": {"text": {"content": ""}},"campestre": {"text": {"content": ""}},"carneiros": {"text": {"content": ""}},"centenario": {"text": {"content": ""}},"centro": {"text": {"content": ""}},"conservas": {"text": {"content": ""}},"conventos": {"text": {"content": ""}},"floresta": {"text": {"content": ""}},"florestal": {"text": {"content": ""}},"hidraulica": {"text": {"content": ""}},"igrejinha": {"text": {"content": ""}},"imigrante": {"text": {"content": ""}},"jardim_do_cedro": {"text": {"content": ""}},"moinhos": {"text": {"content": ""}},"moinhos_dagua": {"text": {"content": ""}},"montanha": {"text": {"content": ""}},"morro_vinte_cinco": {"text": {"content": ""}},"nacoes": {"text": {"content": ""}},"olarias": {"text": {"content": ""}},"planalto": {"text": {"content": ""}},"santo_andre": {"text": {"content": ""}},"santo_antonio": {"text": {"content": ""}},"sao_bento": {"text": {"content": ""}},"sao_cristovao": {"text": {"content": ""}},"universitario": {"text": {"content": ""}},}},"1": { "areas": {"": {
                            "value": 4,
                            "text": { "content":  "4" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Todos os bairros</span><br />Requerimentos : 4"
                            }},"americano": {
                            "value": 4,
                            "text": { "content":  "4" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5682b7"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Americano</span><br />Requerimentos : 4"
                            }},"bom_pastor": {
                            "value": 6,
                            "text": { "content":  "6" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#4974ab"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Bom Pastor</span><br />Requerimentos : 6"
                            }},"campestre": {
                            "value": 7,
                            "text": { "content":  "7" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#426da5"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Campestre</span><br />Requerimentos : 7"
                            }},"carneiros": {
                            "value": 11,
                            "text": { "content":  "11" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#26518d"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Carneiros</span><br />Requerimentos : 11"
                            }},"centenario": {
                            "value": 2,
                            "text": { "content":  "2" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6490c3"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Centenário</span><br />Requerimentos : 2"
                            }},"centro": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6b97c9"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 1"
                            }},"conservas": {
                            "value": 3,
                            "text": { "content":  "3" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#5d89bd"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 3"
                            }},"conventos": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6b97c9"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 1"
                            }},"florestal": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6b97c9"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 1"
                            }},"jardim_do_cedro": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6b97c9"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Jardim do Cedro</span><br />Requerimentos : 1"
                            }}},"plots": {"": {
                            "value": 4},"americano": {
                            "value": 4},"bom_pastor": {
                            "value": 6},"campestre": {
                            "value": 7},"carneiros": {
                            "value": 11},"centenario": {
                            "value": 2},"centro": {
                            "value": 1},"conservas": {
                            "value": 3},"conventos": {
                            "value": 1},"florestal": {
                            "value": 1},"jardim_do_cedro": {
                            "value": 1}}},"13": { "areas": {"conservas": {
                            "value": 1,
                            "text": { "content":  "1" , attrs: {fill:"#222"} },
                            "attrs": { fill: "#6b97c9"},
                            "tooltip": {
                                    "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                            }}},"plots": {"conservas": {
                            "value": 1}}},};
                        $("#vereador").change(function() {
            value = $("#vereador").val();

              $(".maparea1").trigger('update', [data[0], {}, {}, {animDuration: 500}]);

              $(".maparea1").trigger('update', [data[value], {}, {}, {animDuration: 1000,resetPlots:true, resetAreas:true  }]);
          });

            // Mapael initialisation
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
                                fill: "#eee",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#204a87",
                                "font-weight": "normal"
                            }
                        }
                    },
                    defaultPlot: {
                        text: {
                            attrs: {
                                fill: "#613b1e",
                                "font-weight": "bold"
                            },
                            attrsHover: {
                                fill: "#f99200",
                                "font-weight": "bold"
                            }
                        }
                    }
                },
                areas: data[0]['areas']
            });
        });