
 <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> <a href="#">Galeria</a>
    </div>
 <!-- //end Breadcrumbs --> 

  <section class="content">
      <div class="container">
        <h1>Galeria</h1>
        <div class="filters-by-category text-center">
          <ul class="option-set" data-option-key="filter">
            <li><a href="#filter" data-option-value="*" class="selected">Albuns</a></li>
          </ul>
        </div>
        <div class="gallery">
          <?php
          foreach ($albuns as $album) {
            $titulo = $album->titulo;
            if(strlen($titulo) > 33)
            {
              $titulo = substr($titulo, 0, 33) . "...";
            }else if(strlen($titulo) < 26){
              $titulo = '<div style="margin-bottom: 1px;" >'.$titulo . '</div>';
            }
            
        echo '
            <div style="width: 19%!important;" class="item"> 
                    <div class="col-md-12" style="margin-bottom:10px;">

                        <h3 style="font-size: 1em!important;" title="'.$album->titulo.'">'.$titulo.'<br/><small>'.$album->data2.'</small></h3>


                        <div class="inst3_instruile_services_grid1">
                            <center><img src="'.$album->capa->img.'" class="img-responsive" alt=""/></center>
                            <div class="inst3_blur"></div>
                        </div>
                        <div class="inst3layouts_more">
                            <a class="btn btn-default" href="?r=site/video&id='.$album->id.'">Ver Album<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div> 
            </div>';

          } ?>
         
      </div>
    </section>
