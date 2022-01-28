<head>
  <style>

    element.style {
    height: 525px!important;
}

.fa {
  padding-top: 10px;
  font-size: 50px;
  cursor: pointer!important;
  user-select: none!important;
}

.fa:hover {
  color: red!important;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 10px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5s;
  animation-name: fade;
  animation-duration: 5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
</head>
<script>
  /*$(document).ready(function() {
      window.location = window.location.hash;
  });*/

  $(document).ready(function(){
        setTimeout(function(){
          $("#myModal").modal('show');
        },8000);
      });
</script>

<?php if ($popup) {
  if ($popup->estado == 1) {
    echo '<div id="myModal" class="modal fade">
              <div style="position: relative !important; z-index: 999999 !important;" class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 style="color: #070707;" class="modal-title">'.$popup->titulo.'</h4>
                      </div>
                      <div class="modal-body">
                          <a href="'.$popup->link.'" target="_blank">
                          <img src="'.$popup->imagem.'" style="width:100%">
                          </a>
                      </div>
                  </div>
              </div>
          </div>';
  }
} ?>

<iframe id="iframe-id" src="https://www.unipiaget.edu.cv/stream/WebRTCApp/play.html?name=295123202863936211913407" allowfullscreen style="border:none;width:100%;height:770px;" __idm_id__="316403713"> </iframe>

<!--iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FUniPiagetCV%2Fvideos%2F803728487232823%2F&show_text=false&width=560" allowfullscreen style="border:none;width:100%;height:770px;" __idm_id__="316403713"></iframe-->

<section class="container content-row">

  <div class="banners-row">
        <div class="banner-box" onclick="location.href='?r=site/noticias'">
          <div class="inside">
            <div class="icon-float-left">
              <div class="icon-circle"><a href="#"><span class="icon flaticon-musical51"></span></a></div>
            </div>
            <div class="text-float-right">
              <div class="inside">
                <h3 class="upper">Programas</h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-box" onclick="location.href='?r=site/making'">
          <div class="inside">
            <div class="icon-float-left">
              <div class="icon-circle"><a href="#"><span class="icon flaticon-movie29"></span></a></div>
            </div>
            <div class="text-float-right">
              <div class="inside">
                <h3 class="upper">Making OFF</h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-box" onclick="location.href='?r=site/servicos'">
          <div class="inside">
            <div class="icon-float-left">
              <div class="icon-circle"><a href="#"><span class="icon flaticon-smartphone53"></span></a></div>
            </div>
            <div class="text-float-right">
              <div class="inside">
                <h3 class="upper">Servicos</h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="banner-box" onclick="window.open('https://www.youtube.com/watch?v=H9Smfliov-w&list=PLJYwimXGFTN-TEAxIaobhlyM1Z1vdNWET')">
          <div class="inside">
            <div class="icon-float-left">
              <div class="icon-circle"><a href="#"><span class="icon flaticon-podcast6"></span></a></div>
            </div>
            <div class="text-float-right">
              <div class="inside">
                <h3 class="upper">Entrevistas</h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>
  </div>

  <div class="divider-lg"></div>



  

  <!--div class="row">
    <div class="col-sm-7 col-lg-8">
      <h2 id="recentes">Recente</h2>
      <div class="equal-height">
        <div class="video-responsive">
          <iframe width="390" height="315" src="https://www.youtube.com/embed/<?php // $principal->link ?>" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-sm-5 col-lg-4">
      <h2>Ver +</h2>
      <div id="content-player">
        <div class="scrollpane">
         <div class="jp-jplayer"></div>
         <div class="jp-audio" role="application" aria-label="media player">
          <div class="jp-type-playlist">
            <div class="jp-playlist">
              <ul> 
                <?php
                /*foreach ($recentes as $p) {
                  echo '<li>
                  <div class="jpl-details" style="padding-right: 12px!important;"> 
                  <a href="?r=site/index&id='.$p->id.'#recentes">
                  <span class="number">'.$numeropro++.'</span> 
                  <span class="jpl-cover">
                  <img src="'.$p->foto.'" alt="" class="mCS_img_loaded">
                  </span>
                  <span class="jpl-info"> 
                  <span class="jpl-title">'.$p->efeito.'</span>
                  </span>
                  </a>
                  </div>  
                  </li>';
                } */?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div-->

  <!--div class="col-sm-7 col-lg-8">
    <h2 id="publicidades">Publicidades</h2>
    <div class="equal-height">
      <div class="video-responsive">
        <iframe width="390" height="315" src="https://www.youtube.com/embed/<?php // $publicidade->link ?>" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="col-sm-5 col-lg-4">
    <h2>Ver +</h2>


    <div id="content-player">
        <div class="scrollpane">
         <div class="jp-jplayer"></div>
         <div class="jp-audio" role="application" aria-label="media player">
          <div class="jp-type-playlist">
            <div class="jp-playlist">
              <ul> 
                <?php
               /* foreach ($publicidades as $p) {
                  echo '<li>
                  <div class="jpl-details"> 
                  <a href="?r=site/index&id='.$p->id.'#publicidades">
                  <span class="number">'.$numerotop++.'</span> 
                  <span class="jpl-cover">
                  <img src="'.$p->foto.'" alt="" class="mCS_img_loaded">
                  </span>
                  <span class="jpl-info"> 
                  <span class="jpl-title">'.$p->efeito.'</span>
                  </span>
                  </a>
                  </div>  
                  </li>';
                } */?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div-->

      <?php foreach ($videosdestaque as $video) { ?>

        <div class="col-sm-6" style="margin-top: 20px;">
          <h2><?= $video->efeito ?></h2>
          <div class="equal-height">
            <div class="video-responsive">
              <iframe width="390" height="315" src="https://www.youtube.com/embed/<?= $video->link ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
     <?php } ?>
        
        


          <div class="divider-lg"></div>

        <!--iframe id="iframe-id" scrolling="no" src="https://www.unipiaget.edu.cv/radio/?r=site/tv"  style="border:none;width:100%; height: 550px; overflow:hidden;">  </iframe-->

        <div class="col-sm-4">
                                  <h2>Propostas Top 6</h2>
                                  <div id="content-player" style="height: 525px!important;">
                                    <div class="scrollpane" style="height: 525px!important;">
                                     <div class="jp-jplayer"></div>
                                      <div class="jp-audio" role="application" aria-label="media player">
                                        <div class="jp-type-playlist">
                                          <div class="jp-playlist">
                                            <ul> 
                                                <?php
                                                    foreach ($propostas as $Proposta) {
                                                        echo '<li>
                                                                <div class="jpl-details"> 
                                                                    <a href="?r=site/top&id='.$Proposta->youtube.'">
                                                                        <span class="number">'.$numeropro++.'</span> 
                                                                        <span class="jpl-cover">
                                                                            <img src="https://www.unipiaget.edu.cv/radio/'.$Proposta->imagem.'" alt="" class="mCS_img_loaded">
                                                                        </span>
                                                                        <span class="jpl-info"> 
                                                                            <span class="jpl-title">'.$Proposta->musica.'</span> 
                                                                            <span class="jpl-artist">'.$Proposta->cantor.'</span>
                                                                        </span>
                                                                    </a>
                                                                        <span class="jpl-controls">
                                                                            <i onclick="myFunction(this,'.$Proposta->id.')" class="fa fa-heart"></i>
                                                                        </span>
                                                                </div>  
                                                            </li>';
                                                    } ?>
                                            </ul>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                  </div>
                                </div><div class="col-sm-4">
          <h2>Top 6 Classificação</h2>
          <div id="content-player" style="height: 525px!important;">
            <div class="scrollpane">
             <div class="jp-jplayer"></div>
              <div class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                  <div class="jp-playlist">
                    <ul>
                        <?php 
                            foreach ($tops as $top) {
                                echo '<li>
                                        <div class="jpl-details"> 
                                            <a href="?r=site/top&id='.$top->youtube.'">
                                                <span class="number">'.$numerotop++.'</span> 
                                                <span class="jpl-cover">
                                                    <img src="https://www.unipiaget.edu.cv/radio/'.$top->imagem.'" alt="" class="mCS_img_loaded">
                                                </span>
                                                <span class="jpl-info"> 
                                                    <span class="jpl-title">'.$top->musica.'</span> 
                                                    <span class="jpl-artist">'.$top->cantor.'</span>
                                                </span>
                                            </a>
                                               <span class="jpl-controls">
                                                    <a href="?r=site/top&id='.$top->youtube.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">LISTEN</span></a>
                                                </span>
                                        </div>  
                                    </li>';
                            }
                        ?> 
                    </ul>
                  </div>
                </div>
               </div>
            </div>
          </div>
        </div><div class="col-sm-4 animate fadeUp info-box">
        <iframe id="iframe-id" scrolling="no" src="https://www.unipiaget.edu.cv/radio/?r=site/tv"  style="border:none;width:100%; height: 550px; overflow:hidden;">  </iframe>
      </div>






</section>


<!-- Blog widget -->
!<section class="blog-widget parallax">
    <h3 style="color: black!important;" ><span style="color: black!important;" class="icon flaticon-megaphone9"></span>&nbsp;Publicidades</h3>
    
    <div class="posts flexslider" style="padding-left: 50px;">
      <ul class="slides">
        <?php 
              foreach ($publicidadesBanner as $pub) {
                echo '<li>
                        <div>
                          <a href="'.$pub->link.'" target="_blank"><img style="width: 100%; height: 300px;" src="https://www.unipiaget.edu.cv/radio/'.$pub->imagem.'" alt=""></a>
                        </div>
                      </li>';
              }
        ?>
      </ul>
    </div>
</section>



<!-- //end Blog widget -->
<section class="content">
  <div class="container">
    <div class="row">

      <?php foreach ($texto as $t) { ?>
       <div class="col-sm-12 animate fadeUp info-box">
        <div class="inside">
          <h3><?= $t->titulo ?></h3>
          <div class="news-carousel">
            <?= $t->descricao ?>
          </div>
        </div>
      </div>

    <?php break; } ?>


  </div>
</section>

<script>
  $(document).ready(function() {
    if(window.location.hash) {
        $('html, body').animate({
            scrollTop: $(window.location.hash).offset().top - 20
        }, 500);
    }
});
</script>
