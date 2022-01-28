<div class="loader">
  <div class="bubblingG"> <span id="bubblingG_1"> </span> <span id="bubblingG_2"> </span> <span id="bubblingG_3"> </span> </div>
</div>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-8 col-lg-9">
        <h1>Entrevistas</h1>
        <!-- Blog post -->
        <div class="blog-post full-post">
          <div class="title">
            <h2><a href="#"><?= $entrevista->titulo ?></a></h2>
          </div>
          <div class="post-container">
            <div class="col-md-12">
              <div class="equal-height">
                <div class="video-responsive">
                  <iframe width="390" height="315" src="http://www.youtube.com/embed/<?= $entrevista->link ?>" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          .
        </div>
      </div>
      <!-- //end Blog post -->

      <div class="col-sm-4 col-md-4 col-lg-3">
        <div class="posts-widget container-widget">
          <h3>RECENT POSTS</h3>
          <ul>
            <?php 
              foreach ($entrevistas as $entrevista) {
                echo '<li>
                        <span class="post-date"><span class="icon flaticon-clock"></span>&nbsp;'.$entrevista->data.'</span> 

                        <iframe width="100%" height="90" src="http://www.youtube.com/embed/'.$entrevista->link.'" frameborder="0" allowfullscreen></iframe>

                        <a href="?r=site/entrevista&id='.$entrevista->id.'" class="title">'.$entrevista->titulo.'</a>
                      </li>';
              }
            ?>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>



