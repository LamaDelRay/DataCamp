<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
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
                {name: 'Paris', slug:'Paris'}
            ];

            //tooltip qui suit la souris
            $(document).mousemove(function(e){
                $('.map .tooltip').css({
                    top:e.pageY-$('.map .tooltip').height()-30,
                    left:e.pageX-$('.map .tooltip').width()
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="style.css" />
        <title>Statistique Francaise par régions.</title>

    </head>
 
<body>

<MARQUEE direction="right" scrollamount="7" class="image_defilante">
    <img src="course1.gif">
    <img src="course2.gif">
  </marquee>

<div class="container">

<nav class="navbar navbar-inverse" role="navigation">
 
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
  </div>

  
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="carte_2010.php">Carte 2010</a></li>
      <li><a href="accueil.php">Accueil</a></li>
      <li><a href="graphique.php">Graphique</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cartes <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="carte_2008.php">Carte 2008</a></li>
          <li><a href="carte_2009.php">Carte 2009</a></li>
          <li><a href="carte_2010.php">Carte 2010</a></li>
          <li><a href="carte_2011.php">Carte 2011</a></li>
          <li><a href="carte_2012.php">Carte 2012</a></li>
          <li><a href="carte_2013.php">Carte 2013</a></li>
        </ul>
      </li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liens <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://www.data.gouv.fr" target="_blank">Data.Gouv</a></li>
          <li><a href="http://www.insee.fr/fr" target="_blank">INSEE</a></li>
          <li><a href="http://www.prep-etna.fr" target="_blank">PREP-ETNA</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-right" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Rechercher</button>
    </form>
  </div>
</nav>
      
      

        <div class="row">
       <div class="col-md-4">

        <div class="map">
        <img src="void.png" width="500" height="354" usemap="Map"/>
        <map name="Map">
        
        
          <area id="jquerytest" shape="poly" coords="134,242,124,242,107,224,106,206,72,165,80,153,70,140,79,126,51,76,56,68,49,61,78,51,98,64,119,58,131,76,141,66,148,76,174,79,196,107,186,111,180,132,192,154,169,157,155,186,162,194,154,210,144,210,147,222" href="?bouton=y2010&envoi=Yvelines+2010#">
          <area shape="poly" coords="78,51,91,33,92,21,106,7,111,14,104,23,123,33,184,25,187,34,208,40,215,32,261,51,270,63,260,73,247,95,207,96,196,107,174,80,149,78,142,66,132,75,120,59,99,63" href="?bouton=vo2010&envoi=Val+d%27Oise+2010#">
          <area shape="poly" coords="270,62,262,74,272,103,263,119,268,130,267,142,271,154,260,179,246,241,251,257,223,284,244,306,247,323,233,336,280,342,291,331,298,338,327,337,338,324,347,305,341,296,350,279,414,272,424,230,433,232,435,213,450,200,430,202,436,168,426,158,436,135,375,82,380,69,374,61,320,64,309,58,290,67,280,59" href="?bouton=sm2010&envoi=Seine+et+Marne+2010#">
          <area shape="poly" coords="221,283,193,285,182,271,175,283,142,285,143,258,132,253,133,243,148,223,143,211,153,209,162,194,155,185,169,158,191,156,210,161,224,169,247,166,260,179,245,240,250,256" href="?bouton=e2010&envoi=Essonne+2010#">
          <area shape="poly" coords="212,161,217,136,229,136,235,130,250,130,268,140,271,154,260,179,248,165,224,169" href="?bouton=vm2010&envoi=Val+de+Marne+2010#">
          <area shape="poly" coords="261,75,271,100,264,120,269,130,267,140,249,130,236,130,225,118,216,116,217,103,205,98,245,95" href="?bouton=sd2010&envoi=Seine-Saint-Denis+2010#">
          <area shape="poly" coords="212,161,192,155,180,132,187,111,195,109,207,99,217,106,215,117,200,122,199,130,216,138" href="?bouton=h2010&envoi=Hauts+de+Seine+2010#">
          <area shape="poly" coords="216,118,225,119,236,128,231,136,218,138,201,130,201,123" href="?bouton=p2010&envoi=Paris+2010#">
        </map>
    </div>
    </div>
    <div class="col-md-4">
    <div id="pieChart">
      <?php  include ("page.php"); ?>
    </div>
    </div>
  </div>

   <div class="row">
    <div class="col-md-6 col-md-offset-3">
 
      <div class="caption">
        <h3>Région île-de-France : 2010</h3>
        <p>
          Le graphique représente les infractions commises dans la région île-de-France par département en 2010. Ces données ont été recueillies par la Police et la Gendarmerie Nationale et ont été publiés dans les journaux de la République ainsi que sur justice.gouv.fr et data.gouv.fr .
        </p>
        
      </div>
    </div>
  </div>

<!-- <div class="row">

  <div class="col-sm-6 col-md-3">
    <a href="" class="thumbnail">
      <img src="France-regions-departements.png" alt="carte" class="img-rounded">
    </a>
  </div>
  
  <div class="col-sm-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="France-regions-departements.png" alt="carte" class="img-rounded">
    </a>
  </div>
  
 
  <div class="col-sm-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="France-regions-departements.png" alt="carte" class="img-rounded">
    </a>
  </div>


  <div class="col-sm-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="France-regions-departements.png" alt="carte" class="img-rounded">
    </a>
  </div>


</div>

<div class="row">
  <div  class="col-md-8 col-md-offset-2"  >
    <a  href="#" class="thumbnail" >
      <img data-src="holder.js/100%x180" src="France-regions-departements.png" alt="....">
    </a>
  </div>
  ...
</div>

<div class="row">
    <div class="col-md-6">
    <div class="thumbnail">
      <img data-src="holder.js/100%x180" src="France-regions-departements.png" alt="...">>
      <div class="caption">
        <h3>Exemple d'emplacement de texte ou d'image.</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="carte.html" class="btn btn-primary">Toutes les cartes du site.</a> <a href="graphique.html" class="btn btn-default">Tous les graphiques du site.</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 .col-md-offset-4">  <div class="thumbnail">
      <img data-src="holder.js/100%x180" src="graphique-violence.jpg" alt="....">
    </a>
      <div class="caption">
        <h3>Exemple d'emplacement de texte ou d'image.</h3>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p><a href="carte.html" class="btn btn-primary">Toutes les cartes du site.</a> <a href="graphique.html" class="btn btn-default">Tous les graphiques du site.</a></p>
      </div>
    </div>
  </div>

</div> -->





</body>
<script src="bootstrap/js/bootstrap.min.js" ></script>
</html>