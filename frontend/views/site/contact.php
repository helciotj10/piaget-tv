 
    <!-- Breadcrumbs -->
    <div id="breadcrumbs">
      <div class="container"><a href="#">Home</a> <span>&#8250;</span> Contacts</div>
    </div>
    <!-- //end Breadcrumbs --> 
    
    <section class="content">
      <div class="container">
        <h1>Contacte Nos</h1>
        <div class="row">
          <div class="col-md-4">
            <div class="map animate fadeUp">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="350" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=UniPiaget&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.enable-javascript.net/blog/divi-discount/"></a></div></div>
            </div>
            <div class="divider-sm"></div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-sm-6 col-lg-5"><img src="images/liveradio/Logo Piaget TV Bordas-21.png" alt="" class="img-responsive" /></div>
            </div>
            <div class="divider-sm"></div>
            <ul class="contacts-list">
              <?php foreach ($contactos as $contacto) {
              	 if ($contacto->tipo == 'endereco') {
              	 	echo '<li><span class="icon flaticon-home"></span>'.$contacto->texto.'</li>';
              	 } elseif ($contacto->tipo == 'email') {
              	 	echo '<li><span class="icon flaticon-mail"></span> <a href="mailto:'.$contacto->texto.'">'.$contacto->texto.'</a></li>';
              	 } else {
              	 	echo '<li><span class="icon flaticon-phone"></span>'.$contacto->texto.'</li>';
              	 }
              } ?>
            </ul>
            <div class="divider-lg"></div>
            <div class="divider-md"></div>

            <div style="margin-top: 200px;">.</div>
          </div>
        </div>
      </div>
    </section>
  
<script type="text/javascript">
// validate contact form
$(function() {
    $('#form-contact').validate({
			rules: {
				name: {
					required: true,
					minlength: 2
				},
				message: {
					required: true,
					minlength: 20
				},
				email: {
					required: true,
					email: true
				}

			},
			messages: {
				name: {
					required: "Please enter your name",
					minlength: "Your name must consist of at least 2 characters"
				},
				message: {
					required: "Please enter message",
					minlength: "Your message must consist of at least 20 characters"
				},
				email: {
					required: "Please enter your email"
				}
			},
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					type:"POST",
					data: $(form).serialize(),
					url:"process-contact.php",
					success: function() {
						  $('#success').fadeIn();
						  $('#form-contact' ).each(function(){this.reset();});
					},
					error: function() {
							$('#form-contact').fadeTo( "slow", 0, function() {
							$('#error').fadeIn();
						});
					}
				});
			}
		});
});
</script>
</body>
</html>
