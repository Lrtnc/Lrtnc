<?php
$pdo = DBConnect::getConnection();
$result = $pdo->query('SELECT * FROM news ');
?>
<div class="container">
<?php while( $news = $result->fetch() ):?>
<div class="post-wrap">
    <div class="post-item">
        <div class="item-content">
            <img class="item-img" src='<?=$news['news_image']?>'</img>
            <div class="item-body">
                <h3 class ='h3_news'><?=$news['title']?></h3>
                <p class="p_news"><?=$news['short_text']?></p>
            </div>
            <div class="item-footer.php">
                <a href="#" class="link"><span>Подробнее</span></a>
            </div>
        </div>
    </div>
</div>
    <?php endwhile;?>
</div>
