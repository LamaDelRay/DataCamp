<!DOCTYPE html>
<html lang="fr">
	<head>

		<title>Products</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<a href="http://jquery.com/"></a>
		<script src="jquery.js" ></script>
		<script type="text/javascript">
		jQuery(function($){
			$('.map').append('<div class="overlay">').append('<div class="tooltip">Salut</div>');
			$('.map .tooltip').hide();
			var regions= [
				{name: 'Yvelines', slug:'Yvelines'},
				{name: "Val-d'Oise", slug:'Val-d\'Oise'},
				{name: 'Seine-et-Marne', slug:'Seine-et-Marne'},
				{name: 'Essonne', slug:'Essonne'},
				{name: 'Val-de-Marne', slug:'Val-de-Marne'},
				{name: 'Seine-Saint-Denis', slug:'Seine-Saint-Denis'},
				{name: 'Hauts-de Seine', slug:'Hauts-de Seine'},
				{name: 'Ile-de-France', slug:'Ile-de-France'}
			];

			//tooltip qui suit la souris
			$(document).mousemove(function(e){
				$('.map .tooltip').css({
					top:e.pageY-$('.map .tooltip').height()-20,
					left:e.pageX-$('.map .tooltip').width()/2-10
				});
			});


			//On passe sur region
			$('.map area').mouseover(function(){
				var index = $(this).index();
				var left = -index * 500-500;
				$('.map .tooltip').html(regions[index].name).stop().fadeTo(500,1);
				$('.map .overlay').css({
					backgroundPosition : left+"px 0px"
				});
			});

			//on sort de la map
			$('.map').mouseout(function(){
				$('.map .overlay').css({
					backgroundPosition : "500px 0px"
					});
				$('.map .tooltip').stop().fadeTo(500,0);
				});
			});

		</script>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>
		<div class="map">
		<img src="void.png" width="500" height="354" usemap="Map"/>
        <map name="Map">
        
        
          <area id="jquerytest" shape="poly" coords="134,242,124,242,107,224,106,206,72,165,80,153,70,140,79,126,51,76,56,68,49,61,78,51,98,64,119,58,131,76,141,66,148,76,174,79,196,107,186,111,180,132,192,154,169,157,155,186,162,194,154,210,144,210,147,222" href="#">
          <area shape="poly" coords="78,51,91,33,92,21,106,7,111,14,104,23,123,33,184,25,187,34,208,40,215,32,261,51,270,63,260,73,247,95,207,96,196,107,174,80,149,78,142,66,132,75,120,59,99,63" href="#">
          <area shape="poly" coords="270,62,262,74,272,103,263,119,268,130,267,142,271,154,260,179,246,241,251,257,223,284,244,306,247,323,233,336,280,342,291,331,298,338,327,337,338,324,347,305,341,296,350,279,414,272,424,230,433,232,435,213,450,200,430,202,436,168,426,158,436,135,375,82,380,69,374,61,320,64,309,58,290,67,280,59" href="#">
          <area shape="poly" coords="221,283,193,285,182,271,175,283,142,285,143,258,132,253,133,243,148,223,143,211,153,209,162,194,155,185,169,158,191,156,210,161,224,169,247,166,260,179,245,240,250,256" href="#">
          <area shape="poly" coords="212,161,217,136,229,136,235,130,250,130,268,140,271,154,260,179,248,165,224,169" href="#">
          <area shape="poly" coords="261,75,271,100,264,120,269,130,267,140,249,130,236,130,225,118,216,116,217,103,205,98,245,95" href="#">
          <area shape="poly" coords="212,161,192,155,180,132,187,111,195,109,207,99,217,106,215,117,200,122,199,130,216,138" href="#">
          <area shape="poly" coords="216,118,225,119,236,128,231,136,218,138,201,130,201,123" href="#">
        </map>
	</div>
	</body>

</html>