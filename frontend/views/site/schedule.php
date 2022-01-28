
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> Schedule</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
  
    <section class="content">
      <div class="container">
        <h1>Nossa Programação</h1>
        <div role="tabpanel"> 
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab" id="tabLink-1">Segunda</a></li>
            <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab" id="tabLink-2">Terça</a></li>
            <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab" id="tabLink-3">Quarta</a></li>
            <li role="presentation"><a href="#tab4" role="tab" data-toggle="tab" id="tabLink-4">Quinta</a></li>
            <li role="presentation"><a href="#tab5" role="tab" data-toggle="tab" id="tabLink-5">Sexta</a></li>
            <li role="presentation"><a href="#tab6" role="tab" data-toggle="tab" id="tabLink-6">Sabado</a></li>
            <li role="presentation"><a href="#tab7" role="tab" data-toggle="tab" id="tabLink-7">Domingo</a></li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab1">
              <div id="tab-player">
                <div id="jp_tab_1" class="jp-jplayer" style="width: 0px; height: 0px;"><img id="jp_poster_1" style="width: 0px; height: 0px; display: none;"></div>
                <div id="jp_container_tab_1" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                        
                          foreach ($segundas as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>
                      </ul>
                    </div>
                    <div class="jp-no-solution" style="display: none;"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 2 -->
            <div role="tabpanel" class="tab-pane" id="tab2">
              <div id="tab-player">
                <div id="jp_tab_2" class="jp-jplayer"></div>
                <div id="jp_container_tab_2" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                          foreach ($tercas as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>


                          </ul>
                    </div>
                    <div class="jp-no-solution" style="display: none;"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 3 -->
            <div role="tabpanel" class="tab-pane" id="tab3">
              <div id="tab-player">
                <div id="jp_tab_3" class="jp-jplayer"></div>
                <div id="jp_container_tab_3" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                          foreach ($quartas as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>


                          </ul>
                    </div>
                    <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 4 -->
            <div role="tabpanel" class="tab-pane" id="tab4">
              <div id="tab-player">
                <div id="jp_tab_4" class="jp-jplayer"></div>
                <div id="jp_container_tab_4" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                          foreach ($quintas as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>


                          </ul>
                    </div>
                    <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 5 -->
            <div role="tabpanel" class="tab-pane" id="tab5">
              <div id="tab-player">
                <div id="jp_tab_5" class="jp-jplayer"></div>
                <div id="jp_container_tab_5" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                          foreach ($sextas as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>


                          </ul>
                    </div>
                    <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 6 -->
            <div role="tabpanel" class="tab-pane" id="tab6">
              <div id="tab-player">
                <div id="jp_tab_6" class="jp-jplayer"></div>
                <div id="jp_container_tab_6" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                          foreach ($sabados as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>


                          </ul>
                    </div>
                    <div class="jp-no-solution"><span>Ainda não ha nenhuma programação para Sadado.</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- TAB 7 -->
            <div role="tabpanel" class="tab-pane" id="tab7">
              <div id="tab-player">
                <div id="jp_tab_7" class="jp-jplayer"></div>
                <div id="jp_container_tab_7" class="jp-audio" role="application" aria-label="media player">
                  <div class="jp-type-playlist">
                    <div class="jp-playlist">
                      <ul style="display: block;">
                        <?php 
                          foreach ($domingos as $programa) {
                            echo '<li class="jp-playlist-current">
                                <div class="jpl-details">
                                  <span class="number">'.$programa->hora.'</span>
                                  <span class="jpl-cover">
                                    <img src="'.$programa->imagem.'" alt=""></span> 
                                  <span class="jpl-info">
                                    <span class="jpl-title">'.$programa->titulo.'</span> 
                                    <span class="jpl-artist">'.$programa->artista.'</span> 
                                    <span class="jpl-text">'.$programa->texto.'</span>
                                  </span>';

                                  if ($programa->link) {
                                    echo '<span class="jpl-controls">
                                        <a href="'.$programa->link.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">Ver</span>
                                        </a>
                                     </span>';
                                  }    
                              echo ' </div>
                              </li>';
                          }
                        ?>


                          </ul>
                    </div>
                    <div class="jp-no-solution">Ainda não ha nenhuma programação para Domingo. </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  