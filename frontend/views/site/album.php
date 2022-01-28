<div style="background: #583716; height: 5px;" ></div>
<div id="lab" class="inst3ls-section gallery">
	<div class="container">
		<h3 class="heading-instruileinfo">Galeria<span><?= $album->titulo?><br/><?= $album->data2?></span></h3>
		<div class="gallery-grids">

			<?php

			foreach ($album->fotografias as $fotografia) {
				
				echo '
				<div class="col-sm-4 col-xs-6 gallery-grid">
					<div class="grid effect-apollo"> 
						<a class="example-image-link" href="'.$fotografia->img.'" data-lightbox="example-set" data-title="'.$album->descricao.'">
							<img style="height: 270px;" src="'.$fotografia->img.'" alt="">
						</a> 
					</div>
				</div>';

			}

			?>
			
			<div class="clearfix"> </div> 
		</div>
	</div>
</div>

<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				<h4 class="modal-title">Instruction</h4>
			</div> 
			<div class="modal-body">
				<div class="agileits-w3layouts-info">
					<img src="images/g12.jpg" class="img-responsive" alt="" /></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //modal -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>