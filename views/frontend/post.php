<?php
session_start();
use App\Models\Topic;
use App\Models\Post;

$post = new Post();
$topic = new Topic();
$listcat = $topic->topic_parentid(0);
//$listcat11 = $topic->topic_slug('phu-kien-cao-cap');
//var_dump($listcat);
?>
<?php require_once('views/frontend/header.php'); ?>
<!-- Section Maincontent -->
<section class="maincontent w-100 d-flex justify-content-center">

    <div class="container list p-2 bd-highlight">
        <?php foreach ($listcat as $cat) : ?>
            <?php
            $catlistid = array();
            $catlistid[] = $cat['id'];
            //echo $cat['id'];
            $listcat1 = $topic->topic_parentid($cat['id']);

            if (count($listcat1)) {
                foreach ($listcat1 as $cat1) {
                    $catlistid[] = $cat1['id'];
                    $listcat2 = $topic->topic_parentid($cat1['id']);
                    if (count($listcat2)) {
                        foreach ($listcat2 as $cat2) {
                            $catlistid[] = $cat2['id'];
                        }
                    }
                }
            }
            //print_r($catlistid);
            $listpost = $post->post_home($catlistid, 5);
            //var_dump($listpost)
            ?>
            <div class="headercontent">
                <h3 class="text-danger"><?php echo $cat['name']; ?></h3>
            </div>
            <div class="container d-flex p-2 bd-highlight">
                <?php foreach ($listpost as $pro) : ?>
                    <div class="card bg-card" style="width: 220px; height: 300px">
                        <a href="index.php?option=post&id=<?php echo $pro['slug']; ?>">
                            <img src="public/image/posts/<?php echo $pro['img']; ?>" class="card-img-top w-100 h-100" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title-post"><a href="index.php?option=post&id=<?php echo $pro['slug']; ?>"><?php echo $pro['title']; ?></a></h5><br>
                            <a href="index.php?option=post&id=<?php echo $pro['slug']; ?>" class="btn btn-primary a-buy-text w-100">Xem thêm</a>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row text-bottom">
                <div class="col-md-2 text-bottom">
                    <a href="index.php?option=post&cat=<?php echo $cat['slug']; ?>">Xem thêm<i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>