<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="oo66sXzM"></script>
<?php
session_start();

use App\Models\Post;
use App\Models\Topic;

$topic = new Topic();
$post = new Post();

$id = $_REQUEST['id'];
$row = $post->post_row($id);
$listpost=$post->post_list();
//echo ($id);
?>
<?php require_once('views/frontend/header.php'); ?>
<section class="maincontent">
    <div class="container">
        <div class="card-body">
            <div class="row">
                <div class="col-md-9">
                    <div class="mb-3">
                        <table class="table">
                            <caption class="text-center">Cảm ơn mọi người đã xem!</caption>
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <h2 class="text-danger"><?php echo $row['title'] ?></h2>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <th><img src="public/image/posts/<?php echo $row['img']; ?>" class="text-center w-50 h-50" alt="..."></th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['detail'] ?></td>
                                </tr>
                                <tr class="text-center">
                                    <th>
                                        <div class="fb-like" data-href="https://developers.facebook.com/localhost" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="commetnfb">
                                            <div class="container">
                                                <div class="fb-comments" data-href="http://localhost/index.php" data-width="750" data-numposts="5"></div>
                                                <!-- <div class="fb-comments" data-href="https://www.facebook.com/photo?fbid=970510040504538&amp;set=a.191170631771820&amp;comment_id=385218890047936" data-width="" data-numposts="5"></div> -->
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3 border border-2">
                    <div class="headercontent">
                        <h3>Bài viết liên quan</h3>
                    </div>
                    <div class="container p-2 bd-highlight">
                        <?php foreach ($listpost as $pro) : ?>
                            <?php if ($pro['type'] != 'page' && $pro['topid']==$row['topid'] && $pro['id']!=$row['id']) : ?>
                                <div class="card bg-card w-100" >
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
            </div>
        </div>
    </div>
</section>