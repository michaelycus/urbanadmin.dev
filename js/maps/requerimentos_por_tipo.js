$(function() {
    var data = {"0": { "areas": {"": {"text": {"content": ""}},"alto_do_parque": {"text": {"content": ""}},"americano": {"text": {"content": ""}},"bom_pastor": {"text": {"content": ""}},"campestre": {"text": {"content": ""}},"carneiros": {"text": {"content": ""}},"centenario": {"text": {"content": ""}},"centro": {"text": {"content": ""}},"conservas": {"text": {"content": ""}},"conventos": {"text": {"content": ""}},"floresta": {"text": {"content": ""}},"florestal": {"text": {"content": ""}},"hidraulica": {"text": {"content": ""}},"igrejinha": {"text": {"content": ""}},"imigrante": {"text": {"content": ""}},"jardim_do_cedro": {"text": {"content": ""}},"moinhos": {"text": {"content": ""}},"moinhos_dagua": {"text": {"content": ""}},"montanha": {"text": {"content": ""}},"morro_vinte_cinco": {"text": {"content": ""}},"nacoes": {"text": {"content": ""}},"olarias": {"text": {"content": ""}},"planalto": {"text": {"content": ""}},"santo_andre": {"text": {"content": ""}},"santo_antonio": {"text": {"content": ""}},"sao_bento": {"text": {"content": ""}},"sao_cristovao": {"text": {"content": ""}},"universitario": {"text": {"content": ""}},}},"4": { "areas": {"moinhos_dagua": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos D' Água</span><br />Requerimentos : 1"
                    }}},"plots": {"moinhos_dagua": {
                    "value": 1}}},"6": { "areas": {"conventos": {
                    "value": 2,
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 2"
                    }},"florestal": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Florestal</span><br />Requerimentos : 1"
                    }},"imigrante": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Imigrante</span><br />Requerimentos : 1"
                    }}},"plots": {"conventos": {
                    "value": 2},"florestal": {
                    "value": 1},"imigrante": {
                    "value": 1}}},"7": { "areas": {"centro": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 1"
                    }},"moinhos": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Moinhos</span><br />Requerimentos : 1"
                    }}},"plots": {"centro": {
                    "value": 1},"moinhos": {
                    "value": 1}}},"8": { "areas": {"imigrante": {
                    "value": 2,
                    "text": { "content":  "2" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Imigrante</span><br />Requerimentos : 2"
                    }}},"plots": {"imigrante": {
                    "value": 2}}},"9": { "areas": {"conservas": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conservas</span><br />Requerimentos : 1"
                    }},"hidraulica": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Hidráulica</span><br />Requerimentos : 1"
                    }}},"plots": {"conservas": {
                    "value": 1},"hidraulica": {
                    "value": 1}}},"10": { "areas": {"conventos": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Conventos</span><br />Requerimentos : 1"
                    }},"floresta": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Floresta</span><br />Requerimentos : 1"
                    }}},"plots": {"conventos": {
                    "value": 1},"floresta": {
                    "value": 1}}},"12": { "areas": {"centro": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Centro</span><br />Requerimentos : 1"
                    }},"igrejinha": {
                    "value": 1,
                    "text": { "content":  "1" , attrs: {fill:"#222"} },
                    "tooltip": {
                            "content": "<span style=\"font-weight:bold;\">Igrejinha</span><br />Requerimentos : 1"
                    }}},"plots": {"centro": {
                    "value": 1},"igrejinha": {
                    "value": 1}}},};
        $("#cat_requerimento").change(function() {
    value = $("#cat_requerimento").val();
        
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
                    fill: "#99e",
                    stroke: "#82bfec",
                    "stroke-width": 0.3
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