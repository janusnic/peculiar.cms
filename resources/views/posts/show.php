<?php
include_once VIEWS.'/includes/head.php';
include_once VIEWS.'/includes/header.php';
?>
        <div class="page-content">
        <div class="wrapper">
            <div class="breadcrumb"><?= $breadcrumb;?></div>

            
              
              <div class="content-wrap__main-content">
              <div class="wrapper--white wrapper--footer-bottom">


              <div class="one-col">
              <div class="rich-text">

        
              <h1 class="heading-a u-align-center"><?= $post['title'];?></h1>
            <p>
                Create At: <?= $post['formated_date'];?>
            </p>
            
            <div>
                <?= $post['content'];?>
            </div>

            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
       

<?php

include_once VIEWS.'/includes/footer.php';