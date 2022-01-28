
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> Seviços</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
 
    <section class="content">
      <div class="container">
        <div class="row">
          
            <h1>Serviços</h1>

            <?php foreach ($servicos as $noticia) { ?>
              <div class="col-sm-4">
              <!-- Blog post preview -->
              <div onclick="window.open('<?= $noticia->link ?>', '_blank');" style="min-height: 250px; background: #1d1f26; box-shadow: 0 0 2px rgba(0,0,0,0.15); padding: 20px 20px 30px 30px; margin-bottom: 15px;">
                <div class="title">
                  <h3><a target="_blank" href="<?= $noticia->link ?>"><?= $noticia->titulo ?></a></h3>
                </div>
                <div class="wrapper">
                  <div class="image-cell"><img style="height: 149px; width: 267px" src="<?= $noticia->imagem ?>" class="img-responsive animate scale animated" alt="" draggable="false">
                  </div>
                  <div class="offset-image">
                    <?= $noticia->conteudo ?>    
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
                      
         
        
        </div>
      </div>
    </section>
 