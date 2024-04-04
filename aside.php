<?php 
    include 'articles.php';
    foreach ($asideContent as $content) {
        echo '<div class="aside-content">
                <a href="#"><img class="aside-img" src="' . $content["image1"] . '" alt="ails-img"></a>
                <div class="aside-title">
                <a href="#"><img class="title-img" src="' . $content["image2"] . '" alt="joffe-img"></a>
                <span class="subtitle">' . $content["subtitle"] . '</span>
                <a href="#" class="aside-main-title">
                <h2>' . $content["title"] . '</h2>
                </a>
                <a class="author" href="#">' . $content["author"] . '</a>
                </div>
                <p>' . $content["content"] . '</p>
            </div>';
    }
?>