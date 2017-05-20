<?php
include_once VIEWS.'/includes/head.php';
include_once VIEWS.'/includes/header.php';
?>
<main class="wrapper">        <!--main content-->
    <h1><?= $title;?></h1>

    <ul class="grid cards"><!-- gallery-items -->

        <?php foreach($data['products'] as $singleItem): ?>
                <li><figure class="product" id="<?php echo $singleItem['id']?>">
                        <img alt="" src="<?php echo Product::getImage($singleItem['id']); ?>" />
                        
                         <figcaption>
                             <h2><?php echo $singleItem['name']?></h2>
                             <p><?php echo $singleItem['description'];?></p>
                             <div class="price">
                               <?php echo $singleItem['price'] ?>&nbspгрн
                             </div>
                       </figcaption>
                       <a href="#"><i class="add"><span class="fa fa-shopping-cart"></span></i></a>
                </figure></li>
        <?php endforeach; ?>
     </ul> <!-- gallery-items -->
 </main>

<?php
include_once VIEWS.'/includes/cart.php';
include_once VIEWS.'/includes/footer.php';