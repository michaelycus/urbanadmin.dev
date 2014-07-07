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
                title: "Newsletters por bairro",
                slices: [{
                min: 0,
                max: 0,
                attrs: {
                    fill: "#e4c900"}
              },{
                min: 0,
                max: 1,
                attrs: {
                    fill: "#dcbf00"}
              },{
                min: 1,
                max: 1,
                attrs: {
                    fill: "#d4b400"}
              },{
                min: 1,
                max: 2,
                attrs: {
                    fill: "#ccaa00"}
              },{
                min: 2,
                max: 2,
                attrs: {
                    fill: "#c4a000"}
              },]
    }
},
areas: {                    "campestre":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Campestre </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 4 ).change();
                            }
                        }
                    },                    "conservas":{
                        value: "1",
                        text: { content:  1 , attrs: {fill:"#222"} },
                        href: "#",
                        tooltip: {content: "<span style=\"font-weight:bold;\">Conservas </span><br />Newsletters: 1"},
                        eventHandlers : {
                            click : function() {
                                $('#id_bairro').val( 8 ).change();
                            }
                        }
                    },}
    });
});