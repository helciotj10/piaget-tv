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
                                                                        <span class="number">'.$numeropro++.'</span> 
                                                                        <span class="jpl-cover">
                                                                            <img src="'.$Proposta->imagem.'" alt="" class="mCS_img_loaded">
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
                                                    } ?>
                                            </ul>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                  </div>
                                </div><div class="col-sm-4">
          <h2>Top 6</h2>
          <div id="content-player">
            <div class="scrollpane" style="height: 415px!important;">
             <div class="jp-jplayer"></div>
              <div class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                  <div class="jp-playlist">
                    <ul>
                        <?php 
                            foreach ($tops as $top) {
                                echo '<li>
                                        <div class="jpl-details"> 
                                            <a href="?r=site/top&id='.$top->youtube.'">
                                                <span class="number">'.$numerotop++.'</span> 
                                                <span class="jpl-cover">
                                                    <img src="'.$top->imagem.'" alt="" class="mCS_img_loaded">
                                                </span>
                                                <span class="jpl-info"> 
                                                    <span class="jpl-title">'.$top->musica.'</span> 
                                                    <span class="jpl-artist">'.$top->cantor.'</span>
                                                </span>
                                            </a>
                                               <span class="jpl-controls">
                                                    <a href="?r=site/top&id='.$top->youtube.'" target="_blank" class="jpl-play jp-playlist-item" tabindex="0"><span class="listen">LISTEN</span></a>
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
        </div><div class="col-sm-6">
            <h2>Live Stream</h2>
            <iframe id="iframe-id" src="http://portalacademico.homelinux.org:49156/WebRTCApp/play.html?name=295123202863936211913407" allowfullscreen style="border:none;width:100%;height:350px;" __idm_id__="316403713"> </iframe></div>
        </div><div class="col-sm-6">
          <h2>FAMOSOS NA UNIPIAGET</h2>
          <div class="equal-height">
            <div class="video-responsive">
              <iframe width="390" height="315" src="http://www.youtube.com/embed/<?= $famosos->link ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div><div class="col-sm-6">
          <h2>PROMO VIDEO</h2>
          <div class="equal-height">
            <div class="video-responsive">
              <iframe width="390" height="315" src="http://www.youtube.com/embed/<?= $promo->link ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div><div class="col-sm-6">
          <h2>PUBLICIDADE</h2>
          <div class="equal-height">
            <div class="video-responsive">
              <iframe width="390" height="315" src="http://www.youtube.com/embed/<?= $publicidade->link ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div> 