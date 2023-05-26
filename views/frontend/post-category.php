<?php
session_start();
use App\Models\Topic;
use App\Models\Post;
use App\Library\Phantrang;

$post = new Post();
$topic = new Topic();

$slug = $_REQUEST['cat'];
$row_cat = $topic->topic_row($slug);
//die(print_r($row_cat));
$catlistid = array();
$catlistid[] = $row_cat['id'];
//echo $cat['id'];
$listcat1 = $topic->topic_parentid($row_cat['id']);

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
//Xử lí phân trang
$limit = 8;
$page = Phantrang::pageCurrent();
$offset = Phantrang::pageOffset($page, $limit);
//echo $page;
$total = $post->post_topic_count($catlistid);
//$pagenumber=ceil($total/$limit);
$listpost = $post->post_topic($catlistid, $offset, $limit);
//var_dump($listcat);
?>
<?php require_once('views/frontend/header.php'); ?>
<!-- Section Maincontent -->
<section class="maincontent w-100 d-flex justify-content-center">
    <div class="container">
        <div class="headercontent">
            <h3><?php echo $row_cat['name']; ?></h3>
        </div>
        <div class="container p-2 bd-highlight">
            <?php foreach ($listpost as $pro) : ?>
                <?php if ($pro['type'] != 'page') : ?>
                    <div class="card bg-card" style="width: 270px; height: 330px">
                        <a href="index.php?option=post&id=<?php echo $pro['slug']; ?>">
                            <img src="public/image/posts/<?php echo $pro['img']; ?>" class="card-img-top w-100 h-100" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title-post"><a href="index.php?option=post&id=<?php echo $pro['slug']; ?>"><?php echo $pro['title']; ?></a></h5><br>

                            <div>
                                <a href="index.php?option=post&id=<?php echo $pro['slug']; ?>" class="btn btn-primary w-100">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<div class="container">
    <?php echo Phantrang::pageLink($total, $page, $limit, 'index.php?option=post&cat=' . $slug); ?>
</div>
<!--Kết thúc Section Maincontent  -->
<?php require_once('views/frontend/footer.php'); ?>