<?php 
    include 'articles.php';
    foreach ($features as $feature) {
        echo '<div>
                <a href="#">
                    <div class="features-cont-img">
                        <img src="' . $feature["image"] . '" alt="poster"/>
                    </div>
                </a>
                <div class="features-cont-title">
                    <span class="subtitle">' . $feature["subtitle"] . '</span>
                    <a href="#" class="features-main-title">
                        <h2>' . $feature["title"] . '</h2>
                    </a>
                    <a class="author" href="#">' . $feature["author"] . '</a>
                </div>
            </div>';
    }
?>