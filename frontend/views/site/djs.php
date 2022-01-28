
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> Equipa</div>
    </div>
    <!-- //end Breadcrumbs --> 
    

    <section class="content">
      <div class="container">
        <h1>Equipa</h1>
        <div class="row">
          <?php foreach ($equipa as $pessoa) { ?>
             <div class="col-md-6 animate fadeUp">
                    <div class="djs-box">
                      <div class="inside"><img style="width: 200px; height: 200px;" src="<?= $pessoa->imagem ?>" alt="" class="img-left" />
                        <h3><?= $pessoa->nome ?></h3>
                        <div class="tags">
                          <div style="font-size: 17px;"><?= $pessoa->nickname ?></div>
                          <p><a href="#"><?= $pessoa->funcao ?></a></p> 
                        </div>
                        <p> </p>
                        <div style="margin-top: 58px;">
                        <a class="contact-icon" target="_blank" href="<?= $pessoa->facebook ?>"><span class="flaticon-facebook"></span></a> 
                        <a class="contact-icon" target="_blank" href="<?= $pessoa->instagram ?>"><img src="instagram.png"></a> 
                        <a class="contact-icon" target="_blank" href="mailto:<?= $pessoa->email ?>"><span class="flaticon-gplus"></span></a>
                        </div>
                      </div>
                   
                    </div>
                  </div>
        <?php  } ?>
        </div>
      </div>
    </section>
   
</div>
