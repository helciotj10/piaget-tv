   <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> <a href="?r=site/galeria">Galeria</a> <span>&#8250;</span> Album</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
    
    <section class="content">
      <div class="container">
        <h1>Galleria</h1>
        <div class="filters-by-category text-center">
          <ul class="option-set" data-option-key="filter">
            <li><a href="#filter" data-option-value="*" class="selected"><?= $album->titulo?></a></li>
          </ul>
        </div>
        <div class="gallery">
          <?php
          foreach ($album->fotografias as $fotografia) { ?>
          <video width="320" height="240" controls>
              <source src="<?= $fotografia->img ?>" type="video/mp4">
              Your browser does not support the video tag.
          </video>
        <?  } ?>
         
      </div>
    </section>
