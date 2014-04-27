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
                top:e.pageY-$('.map .tooltip').height()-300,
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

<script type="text/javascript">
// if (navigator.geolocation)
 // alert("Bravo ! Votre navigateur prend en compte la géolocalisation HTML5");
//else
 // alert("Dommage... Votre navigateur ne prend pas en compte la géolocalisation HTML5");

function errorCallback(error){
  switch(error.code){
    case error.PERMISSION_DENIED:
      alert("L'utilisateur n'a pas autorisé l'accès à sa position");
      break;      
    case error.POSITION_UNAVAILABLE:
      alert("L'emplacement de l'utilisateur n'a pas pu être déterminé");
      break;
    case error.TIMEOUT:
      alert("Le service n'a pas répondu à temps");
      break;
    }
};
if (navigator.geolocation)
{
  navigator.geolocation.getCurrentPosition(function(position)
  {
    alert("Latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude + "\nVous vous trouvez dans le 94 à Ivry sur Seine.");
  });
}
else
  alert("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
</script>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="style.css" />
<title>Statistique Francaise par régions.</title>

</head>

<!--<div id="course"></div>-->

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
          <li class="active"><a href="accueil.php">Accueil</a></li>
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
    <div class="col-md-8 col-md-offset-2">
      <h3>Carte de la région île-de-France</h3>
    </div>
  </div>
  
 <div class="row">

  <div class="col-md-8 col-md-offset-2">
    <a href="" class="thumbnail">
      <img src="carteidf.jpg" alt="carte" class="img-rounded">
    </a>
  </div>
  
  <!--  <div class="col-sm-6 col-md-3">
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