<?php
//commit
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

?>

<head>
    <style type="text/css">
        .dropdown-container {
  display: none;
  padding-left: 50px;
  
}
    </style>
</head>

<div class="sidebar" data-background-color="white" data-active-color="danger">

            <!--
                poi class="active" na li
                Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
            -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="index.php" class="simple-text">
                        TV Piaget
                    </a>
                </div>

                <ul class="nav">

                    <li>
                        <a href="index.php?r=equipa">
                            <i class="ti-user"></i>
                            <p>Equipa</p>
                        </a>
                    </li>
                    <li>
                       <a href="index.php?r=popup%2Fview&id=1">
                            <i style="color: #66615B!important;" class="ti-layers"></i>
                            <p style="color: #66615B!important;">PopUp</p>
                        </a> 
                    </li>
                    <li>
                        <a href="index.php?r=programacao">
                            <i class="ti-calendar"></i>
                            <p>Programação</p>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?r=noticia">
                            <i class="ti-video-camera"></i>
                            <p>Programas</p>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?r=noticia/servico">
                            <i class="ti-user"></i>
                            <p>Serviços</p>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?r=texto">
                            <i class="ti-layers"></i>
                            <p>Textos</p>
                        </a>
                    </li>

                    <li>
                        <a href="index.php?r=youtube">
                            <i class="ti-sharethis"></i>
                            <p>Videos de Destaque</p>
                        </a>
                    </li>

                    <!--li>
                        <a href="?r=contacto">
                            <i class="ti-agenda"></i>
                            <p>Contacto</p>
                        </a>
                    </li-->

                    <li>
                        <a target="_blank" href="?r=album">
                            <i class="ti-video-camera"></i>
                            <p>Gerir Fotos</p>
                        </a>
                    </li>

                    <li>
                        <a target="_blank" href="?r=album/making">
                            <i class="ti-video-camera"></i>
                            <p>Making off</p>
                        </a>
                    </li>


                    <!--li>
                        <a target="_blank" href="http://portalacademico.homelinux.org:49156/">
                            <i class="ti-layers"></i>
                            <p>Ant Midia Server</p>
                        </a>
                    </li-->

                    <!--li>
                        <a href="?r=avancado/update&id=1">
                            <i class="ti-more"></i>
                            <p>Avançado</p>
                        </a>
                    </li-->

                    <li>
                            
                        <?= Html::a(
                                ' <i class="ti-close" aria-hidden="true"></i> <p> <span>Sair da Conta</span> </p> ',
                                ['/site/logout'],
                                ['data-method' => 'post']
                            ) ?>
                    </li>
                </ul>
            
            </div>
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>