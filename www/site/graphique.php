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

<!--<script>
$(document).ready(function(){
    $("#course")

    .animate({
      left:'100%'
    },{
      duration : 3000,
      });
});

      //width:'150px'
</script>

 //opacity:'0.5',
      //height:'150px',
      //width:'150px'-->
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
  
  <div id="course"></div>
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
          <li class="active"><a href="Graphique.php">Graphique</a></li>
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
      <div class="col-md-6 col-md-offset-3">

        <div class="caption">
          <h2>Graphiques</h2>
          <p>
            Les graphiques représentent les infractions commises dans la région île-de-France par département entre les années 2008 a 2009. Ces données ont été recueillies par la Police et la Gendarmerie Nationale et ont été publiés dans les journaux de la République ainsi que sur justice.gouv.fr et data.gouv.fr .
          </p>

        </div>
      </div>
    </div>  





 
    <div class="row">
      <div class="col-md-3 col-md-offset-3">

      <div class="graphique1"><iframe src="http://cf.datawrapper.de/nn5T8/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique2"><iframe src="http://cf.datawrapper.de/j7vuY/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique3"><iframe src="http://cf.datawrapper.de/XWYeV/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique4"><iframe src="http://cf.datawrapper.de/JfQcT/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique5"><iframe src="http://cf.datawrapper.de/oNDch/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique6"><iframe src="http://cf.datawrapper.de/9Mm9P/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique7"><iframe src="http://cf.datawrapper.de/nqPcj/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
      <div class="graphique8"><iframe src="http://cf.datawrapper.de/bpUhv/1/" frameborder="0" allowtransparency="true" allowfullscreen="allowfullscreen" webkitallowfullscreen="webkitallowfullscreen" mozallowfullscreen="mozallowfullscreen" oallowfullscreen="oallowfullscreen" msallowfullscreen="msallowfullscreen" width="600" height="400"></iframe></div>
      
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