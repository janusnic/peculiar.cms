<?php
include_once VIEWS.'/includes/head.php';
include_once VIEWS.'/includes/header.php';
?>
        <main>

            <h1><?= $title;?></h1>

            <section class="thumbnail-grid flex">
              <div class="container">
                <h2>Последние публикации</h2>
                <ul>

                    <?php foreach($posts as $singleItem): ?>
                    <li>
                        <h3><?php echo $singleItem['title']?></h3>
                        <p><?php echo $singleItem['formated_date'];?></p>
                        <a href="/post/<?php echo $singleItem['id']; ?>">Read More</a>
                    </li>

                    <?php endforeach; ?>
                </ul> <!-- gallery-items -->
            </div>
            </section>
        </main>
       

<?php

include_once VIEWS.'/includes/footer.php';