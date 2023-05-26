<?php

use App\Models\Menu;

$menu = new Menu();
$args = array(
    'status' => 1,
    'position' => 'mainmenu',
    'parentid' => 0,
    'order' => array('field' => 'orders', 'orderby' => 'ASC')
);
$list_menu = $menu->menu_list($args);
//echo count($list);
?>
<section class="mainmenu">
    <div class="container">
        <ul class="nav justify-content-center">
            <?php foreach ($list_menu as $row_menu) : ?>
                <?php
                $args1 = array(
                    'status' => 1,
                    'position' => 'mainmenu',
                    'parentid' => $row_menu['id'],
                    'order' => array('field' => 'orders', 'orderby' => 'ASC')
                );
                $list_menu1 = $menu->menu_list($args1);
                ?>
                <?php if (count($list_menu1) != 0) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <?php echo $row_menu['name']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($list_menu1 as $row_menu1) : ?>
                                <li><a class="dropdown-item" href="<?php echo $row_menu1['link']; ?>"><?php echo $row_menu1['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo $row_menu['link']; ?>"><?php echo $row_menu['name']; ?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
            </li> -->
        </ul>
    </div>
</section>

<!-- Làm tiếp phút 35p -->