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
                    top:e.pageY-$('.map .tooltip').height()-500,
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
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Secu - France</title>
    </head>
 
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <h1>Secu - France</h1>
                    <h2>La sécurité, c'est notre priorité !</h2>
                </div>
                 
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="Société.html">Société</a></li>
                        <li><a href="Services.html">Services</a></li>
                        <li><a href="Agences.html">Agences</a></li>
                        <li><a href="Contact.html">Contact</a></li>
                    </ul>
                </nav>
            </header>
             
            <div id="banniere_image">
                <div id="banniere_description">
                    L'insécurité grandissante de la société actuelle est aujourd'hui, pour nous, notre préoccupation majeure.
                </div>
            </div>
             
            <section>
                <article>

                    CARTE
        <div class="map">
        <img src="void.png" width="500" height="354" usemap="Map"/>
        <map name="Map">
        
        
          <area id="jquerytest" shape="poly" coords="134,242,124,242,107,224,106,206,72,165,80,153,70,140,79,126,51,76,56,68,49,61,78,51,98,64,119,58,131,76,141,66,148,76,174,79,196,107,186,111,180,132,192,154,169,157,155,186,162,194,154,210,144,210,147,222" href="http://localhost/Datacamp/SECU/?bouton=y2008&envoi=Yvelines+2008#">
          <area shape="poly" coords="78,51,91,33,92,21,106,7,111,14,104,23,123,33,184,25,187,34,208,40,215,32,261,51,270,63,260,73,247,95,207,96,196,107,174,80,149,78,142,66,132,75,120,59,99,63" href="http://localhost/Datacamp/SECU/?bouton=vo2008&envoi=Val+d%27Oise+2008#">
          <area shape="poly" coords="270,62,262,74,272,103,263,119,268,130,267,142,271,154,260,179,246,241,251,257,223,284,244,306,247,323,233,336,280,342,291,331,298,338,327,337,338,324,347,305,341,296,350,279,414,272,424,230,433,232,435,213,450,200,430,202,436,168,426,158,436,135,375,82,380,69,374,61,320,64,309,58,290,67,280,59" href="http://localhost/Datacamp/SECU/?bouton=sm2008&envoi=Seine+et+Marne+2008#">
          <area shape="poly" coords="221,283,193,285,182,271,175,283,142,285,143,258,132,253,133,243,148,223,143,211,153,209,162,194,155,185,169,158,191,156,210,161,224,169,247,166,260,179,245,240,250,256" href="http://localhost/Datacamp/SECU/?bouton=e2008&envoi=Essonne+2008#">
          <area shape="poly" coords="212,161,217,136,229,136,235,130,250,130,268,140,271,154,260,179,248,165,224,169" href="http://localhost/Datacamp/SECU/?bouton=vm2008&envoi=Val+de+Marne+2008#">
          <area shape="poly" coords="261,75,271,100,264,120,269,130,267,140,249,130,236,130,225,118,216,116,217,103,205,98,245,95" href="http://localhost/Datacamp/SECU/?bouton=sd2008&envoi=Seine-Saint-Denis+2008#">
          <area shape="poly" coords="212,161,192,155,180,132,187,111,195,109,207,99,217,106,215,117,200,122,199,130,216,138" href="http://localhost/Datacamp/SECU/?bouton=h2008&envoi=Hauts+de+Seine+2008#">
          <area shape="poly" coords="216,118,225,119,236,128,231,136,218,138,201,130,201,123" href="http://localhost/Datacamp/SECU/?bouton=p2008&envoi=Paris+2008#">
        </map>
    </div>
                </article>
<div id="pieChart">
<?php  include ("page.php");
 ?>
</div>
            </section>
        </div>

       <footer>
        <div class="centercolumn">
            <br>
            <br>
        Copyright © 1987-2014 ETNA Tous droits réservés.
        </div>
</footer>
</html>