
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> Blog Posts</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
 
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9">
            <h1>Programas</h1>

            <?php foreach ($programas as $noticia) { ?>

              <!-- Blog post preview -->
              <div class="blog-post" style="min-height: 250px;">
                <div class="title">
                  <h3><a><?= $noticia->titulo ?></a></h3>
                </div>
                <div class="wrapper">
                  <div class="image-cell"><a><img style="height: 149px; width: 267px" src="<?= $noticia->imagem ?>" class="img-responsive animate scale animated" alt="" draggable="false"></a>
                    <!--div class="post-date"><span class="icon flaticon-clock"></span>&nbsp;<?= $noticia->data ?></div-->
                    
                  </div>
                  <div class="offset-image">
                    <?= $noticia->conteudo ?>    
                  </div>
                </div>
              </div>

            <?php } ?>
                      
          </div>
        
        </div>
      </div>
    </section>
 