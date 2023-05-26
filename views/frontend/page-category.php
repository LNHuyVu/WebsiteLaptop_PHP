<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="oo66sXzM"></script>
<?php
session_start();
use App\Models\Post;

$post = new Post();

$slug = $_REQUEST['cat'];
$row = $post->post_row($slug);
?>
<?php require_once('views/frontend/header.php'); ?>
<section class="maincontent">
    <div class="container " style="text-align: justify; width: 800px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title'] ?></li>
            </ol>
        </nav>
        <!-- <php foreach ($listpost as $row) : ?> -->
        <?php if ($row['slug'] == $slug && $row['type']=='page') : ?>
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
                </tbody>
            </table>
        <?php endif; ?>
        <!-- <php endforeach; ?> -->
    </div>
</section>
<?php require_once('views/frontend/footer.php'); ?>
   