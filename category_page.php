<?php include('header.php'); ?>
<!-- Start News Content Section Home-1 -->
<section id="news-content-senction">
    <div class="container">

        <div class="row home-page-1">
            <?php
            $results = $coneection->query("SELECT news.id,news.title,news.description,category.name FROM `news` join category on news.category_id = category.id where category.name='{$_GET['cat_id']}'");
            if ($results->num_rows > 0) {
                while ($row = $results->fetch_object()) {
                    ?>
                    <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="single-news">
                            <h1><a href="<?php echo  "single_news.php?id={$row->id}" ?>"><?php echo  str_replace("’","''",$row->title);  ?></a></h1>
                            <h2>Category:<a href="#"><?php echo  $row->name;  ?></a></h2>
                            <p>
                                <?php echo   substr($row->description,0,20); ?>
                                <a href="<?php echo  "single_news.php?id={$row->id}" ?>">Read More</a>
                            </p>
                        </div><!--/ .single-news -->
                    </div>
                    <?php
                }
            }

            ?>

        </div><!--/ .row -->
    </div><!--/ .container -->
</section>
<!-- Start News Content Section Home-1 -->


<?php include('footer.php');?>