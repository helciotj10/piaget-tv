<?php
use yii\helpers\HtmlPurifier;
?>
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="?r=site/index">Home</a> <span>&#8250;</span> Rubricas</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
 
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-8 col-lg-9">
            <?php 

              foreach ($rubricas as $rubrica) {

                echo '<h1>'.$rubrica->tipo.'</h1>';

                echo '<div class="blog-post">
                        <div class="title">
                          <h3><a href="#">'.$rubrica->titulo.'</a></h3>
                        </div>
                        <div class="wrapper">
                          <div class="image-cell">
                            
                            <iframe width="265" height="135" src="http://www.youtube.com/embed/'.$rubrica->youtube.'" frameborder="0" allowfullscreen></iframe>

                            <div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;'.$rubrica->data.'</div>';
                            if ($avancado->rubricasVerLancamentosAntigos) {
                              echo'<div class="post-comment"><a href="?r=site/historico&rubrica='.$rubrica->tipo.'">Ver lançamentos antigos</a></div>';
                            }    
                          echo '</div>
                          <div class="offset-image" style="min-height: 170px;">
                            '.HtmlPurifier::process($rubrica->texto).'

                            <p>'.$rubrica->horario.'</p>

                          </div>
                        </div>
                      </div>';
                  echo "<br>";
              }

            ?> 
       
            </div>
         
        </div>
      </div>
    </section>
 