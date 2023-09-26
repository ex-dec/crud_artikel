<div class="trending-tittle">
    <strong>Trending now</strong>
    <div class="trending-animated">
        <ul id="js-news" class="js-hidden">
            <?php
            $s_trending = "SELECT * FROM artikel where id_article = '$id'";
            $q_trend = mysqli_query($mysqli, $s_trending);
            while (mysqli_fetch_assoc($q_trend)) {
            ?>
                <li class="news-item"><?= $q_trend['title'] ?></li>
            <?php
                $i++;
            }
            ?>
        </ul>
    </div>
</div>