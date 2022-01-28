<head>
<style>
.fa {
  padding-top: 10px;
  font-size: 50px;
  cursor: pointer!important;
  user-select: none!important;
}

.fa:hover {
  color: red!important;
}
</style>
</head>

<div class="loader">
  <div class="bubblingG"> <span id="bubblingG_1"> </span> <span id="bubblingG_2"> </span> <span id="bubblingG_3"> </span> </div>
</div>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-8 col-lg-8">
        <h1>Musica Top</h1>
        <!-- Blog post -->
        <div class="blog-post full-post">
          <div class="title">
            <h2><a href="#"><?= $musica->musica ?> - <?= $musica->cantor ?></a></h2>
          </div>
          <div class="post-container">
            <div class="col-md-12">
              <div class="equal-height">
                <div class="video-responsive">
                  <iframe width="390" height="315" src="https://www.youtube.com/embed/<?= $musica->youtube ?>" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          .
        </div>
      </div>
      <!-- //end Blog post -->

      <div class="col-sm-4">
          <h2>Propostas Top 6</h2>
          <div id="content-player">
            <div class="scrollpane">
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
                                                <span class="number">1</span> 
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
                            }
                        ?>   
                    </ul>
                  </div>
                </div>
                </div>
            </div>
          </div>
        </div>

      

    </div>
  </div>
</section>



