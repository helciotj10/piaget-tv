
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span>Lista Programas <span>&#8250;</span> Programa</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
 
    <section class="content">
      <div class="container">


        <div class="row">
          <div class="col-sm-12">
            <h1>Programa: <?= $programa->titulo ?></h1>

              <!-- Blog post preview -->
              <div class="blog-post" style="min-height: 250px;">
               
                <div class="wrapper">
                  <div class="image-cell"><img style="height: 149px; width: 267px" src="<?= $programa->imagem ?>" class="img-responsive animate scale animated" alt="" draggable="false">
                    <!--div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;<?= $programa->data ?></div-->
                    
                  </div>
                  <div class="offset-image" style="font-size: 15px">
                    <?= $programa->conteudo ?>    
                  </div>
                </div>
              </div>      
          </div>
        </div>


        <div class="col-sm-7 col-lg-8">
      <h2>Playlist</h2>
      <div class="equal-height">
        <div class="video-responsive">
          <iframe width="390" height="315" src="http://www.youtube.com/embed/<?= $principal ? $principal->link : '' ?>" frameborder="0" allowfullscreen></iframe>
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
                <?php foreach ($dataProvider->getModels() as $p) {
                  echo '<li>
                  <div class="jpl-details"> 
                  <a href="?r=site/programa&id='.$programa->id.'&video='.$p->id.'">
                  <span class="number">'.$numeropro++.'</span> 
                  <span class="jpl-cover">
                  <img src="'.$p->foto.'" alt="" class="mCS_img_loaded">
                  </span>
                  <span class="jpl-info"> 
                  <span class="jpl-title">'.$p->efeito.'</span>
                  </span>
                  </a>
                  <span class="jpl-controls">
                  <i onclick="myFunction(this,'.$p->id.')" class="fa fa-heart"></i>
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
  </div>

      </div>
    </section>