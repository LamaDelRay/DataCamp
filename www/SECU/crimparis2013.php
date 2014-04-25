<html>
<head></head>
<body>

<div id="pieChart"></div>

<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.4/d3.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="d3pie.min.js"></script>
<script>
var pie = new d3pie("pieChart", {
    "header": {
        "title": {
            "text": "Faits constatés a Paris en 2013",
            "fontSize": 26,
            "color": "#000000",
            "font": "open sans"
        },
        "subtitle": {
            "text": " par la Police et la Gendarmerie Nationale",
            "color": "#000000",
            "fontSize": 24,
            "font": "open sans"
        },
        "titleSubtitlePadding": 9
    },
    "footer": {
        "text": "Données publiées par justice.gouv.fr",
        "color": "#000000",
        "fontSize": 15,
        "font": "open sans",
//        "location": "bottom-left"
    },
    "size": {
        "canvasWidth": 1000,
        "canvasHeight": 600,
        "pieInnerRadius": "29%",
        "pieOuterRadius": "72%"
    },
    "data": {
        "sortOrder": "value-desc",
        "content": [
            {
                "label": "Atteintes aux biens",
                "value": 167435,
                "color": "#2484c1"
            },
            {
                "label": "Atteintes à l'intégrité physique",
                "value": 35421,
                "color": "#0c6197"
            },
            {
                "label": "Escroqueries",
                "value": 27541,
                "color": "gray"
            },
            {
                "label": "Infractions révélés par les services",
                "value": 19847,
                "color": "#604a4a"
            },
            {
                "label": "Atteintes sexuelles",
                "value": 1573,
                "color": "#a33030"
            }
        ]
    },
    "labels": {
        "outer": {
            "pieDistance": 32
        },
        "mainLabel": {
            "color": "#000000",
            "fontSize": 15
        },
        "percentage": {
            "color": "#ffffff",
            "decimalPlaces": 0
        },
        "value": {
            "color": "#333333",
            "fontSize": 5
        },
        "lines": {
            "enabled": true
        }
    },
    "effects": {
        "load": {
            "speed": 2750
        },
        "pullOutSegmentOnClick": {
            "effect": "linear",
            "speed": 400,
            "size": 8
        }
    },
    "callbacks": {}
});
</script>

</body>
</html>