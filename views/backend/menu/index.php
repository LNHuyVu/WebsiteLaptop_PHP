<?php

use App\Models\Menu;
use App\Models\Category;
use App\Models\Post;
use App\Models\Topic;

$menu = new Menu(); //Tạo đối tượng 
$category = new Category(); //Tạo đối tượng 
$post = new Post(); //Tạo đối tượng 
$topic = new Topic(); //Tạo đối tượng 


$list = $menu->menu_list(['status' => 'index']);
$list_category = $category->category_list(['status' => 'index']);
$list_page = $post->post_list_page(['status' => 'index']);
$list_topic = $topic->topic_list(['status' => 'index']);

?>



<?php require_once("../views/backend/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-2">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <strong class="text-danger">Menu</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=menu&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i>Thêm
                        </a>
                        <a href="index.php?option=menu&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <form action="index.php?option=menu&cat=process" method="post" name="form1">
                            <div class="card">
                                <div class="card-header" id="vitri">
                                    <label for="position">Vị trí</label>
                                    <select name="position" class="form-control">
                                        <option value="mainmenu">Mainmenu</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingCategory">
                                        <span>Loại sản phẩm</span>
                                        <span class="float-right btn btn-sm btn-warning" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
                                            <i class="fab fa-asymmetrik"></i>
                                        </span>
                                    </div>

                                    <div id="collapseCategory" class="collapse p-2 m-2" aria-labelledby="headingCategory" data-parent="#accordionExample">
                                        <?php foreach ($list_category as $cat) : ?>
                                            <fieldset class="form-group">
                                                <input name="nameCategory[]" value="<?php echo $cat['id'] ?>" id="category<?php echo $cat['id'] ?>" type="checkbox">
                                                <label for="category<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></label>
                                            </fieldset>
                                        <?php endforeach; ?>
                                        <fieldset class="form-group">
                                            <input type="submit" name="ThemCategory" value="Thêm" class="btn btn-success form-control">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTopic">
                                        <span>Chủ đề bài viết</span>
                                        <span class="float-right btn btn-sm btn-warning" data-toggle="collapse" data-target="#collapseTopic" aria-expanded="true" aria-controls="collapseTopic">
                                            <i class="fab fa-asymmetrik"></i>
                                        </span>

                                    </div>

                                    <div id="collapseTopic" class="collapse p-2 m-2" aria-labelledby="headingTopic" data-parent="#accordionExample">
                                        <?php foreach ($list_topic as $top) : ?>
                                            <fieldset class="form-group">
                                                <input name="nameTopic[]" value="<?php echo $top['id'] ?>" id="topic<?php echo $top['id'] ?>" type="checkbox">
                                                <label for="topic<?php echo $top['id'] ?>"><?php echo $top['name'] ?></label>
                                            </fieldset>
                                        <?php endforeach; ?>
                                        <fieldset class="form-group">
                                            <input type="submit" name="ThemTopic" value="Thêm" class="btn btn-success form-control">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingPage">
                                        <span>Trang đơn</span>
                                        <span class="float-right btn btn-sm btn-warning" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true" aria-controls="collapsePage">
                                            <i class="fab fa-asymmetrik"></i>
                                        </span>

                                    </div>

                                    <div id="collapsePage" class="collapse p-2 m-2" aria-labelledby="headingPage" data-parent="#accordionExample">
                                        <?php foreach ($list_page as $page) : ?>
                                            <fieldset class="form-group">
                                                <input name="namePage[]" value="<?php echo $page['id'] ?>" id="Page<?php echo $page['id'] ?>" type="checkbox">
                                                <label for="Page<?php echo $page['id'] ?>"><?php echo $page['title'] ?></label>
                                            </fieldset>
                                        <?php endforeach; ?>
                                        <fieldset class="form-group">
                                            <input type="submit" name="ThemPage" value="Thêm" class="btn btn-success form-control">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingCustom">
                                        <span>Tùy chỉnh</span>
                                        <span class="float-right btn btn-sm btn-warning" data-toggle="collapse" data-target="#collapseCustom" aria-expanded="true" aria-controls="collapseCustom">
                                            <i class="fab fa-asymmetrik"></i>
                                        </span>
                                    </div>
                                    <div id="collapseCustom" class="collapse p-2 m-2" aria-labelledby="headingCustom" data-parent="#accordionExample">
                                        <fieldset class="form-group">
                                            <label>Tên menu</label>
                                            <input name="name" class="form-control" id="checkid" type="text">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <label>Liên kết</label>
                                            <input name="link" class="form-control" type="text">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="submit" name="ThemCustom" value="Thêm" class="btn btn-success form-control">
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <th class="text-center" style="width:20px">#</th>
                                <th>Menu</th>
                                <th>Link</th>
                                <th>Ngày tạo</th>
                                <th>Chức năng</th>
                                <th>ID</th>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $row) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <input name="checkid" type="checkbox" />
                                        </td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['link'] ?></td>
                                        <td class="text-center"><?php echo $row['created_at'] ?></td>
                                        <td class="text-center">
                                            <?php if ($row['status'] == 1) : ?>
                                                <a href="index.php?option=menu&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-success">
                                                    <i class="fas fa-toggle-on"></i>
                                                </a>
                                            <?php else : ?>
                                                <a href="index.php?option=menu&cat=status&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-toggle-off"></i>
                                                </a>
                                            <?php endif; ?>
                                            <a href="index.php?option=menu&cat=update&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="index.php?option=menu&cat=view&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="index.php?option=menu&cat=deltrash&id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                        <td class="text-center"><?php echo $row['id'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<?php require_once("../views/backend/footer.php") ?>