<?php
session_start();

use App\Models\Contact;

$contact = new Contact();

if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $data['created_at'] = date('Y-m-d H-i-s');
    if (isset($_SESSION['usercustomer'])) {
        $data['userid'] = $_SESSION['usercustomerid'];
    } else {
        $data['userid'] = 0;
    }
    // echo "<pre>";
    // die(print_r($data));
    // echo "<pre>";
    $contact->contact_insert($data);
    //header("location:index.php?option=contact");
}
require_once("views/frontend/header.php");
?>
<section class="header">
    <div class="container">
        <div class="col-md-3">
            <img src="../../public/image/11111.png" alt="" width="102px" height="60px">
            <h3><b class="text-danger">Liên hệ</b></h3>
        </div>
    </div>
</section>
<section class="mainmenu d-flex">
    <div class="container">
        <table class="bg-light">
            <thead>
                <tr>
                    <th class="text-center">Map</th>
                    <th class="text-center">Liên hệ với chúng tôi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7837.520181707371!2d106.77116718039058!3d10.829662884107881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527003404296d%3A0xda14c6391b1f8c82!2zMTAzIMSQxrDhu51uZyBUxINuZyBOaMahbiBQaMO6LCBQaMaw4bubYyBMb25nIEIsIFF14bqtbiA5LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1650636546035!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                    <td>
                        <div>
                            <h5>Thông tin liên hệ</h5>
                            <span>103,Tăng Nhơn Phú, phường Phước Long B, TP.Thủ Đức, TP.Hồ Chí Minh
                                <br> Số điện thoại: 0949 9999 xxx
                                <br>Email: websiteUML.N16@gmail.com
                            </span>
                            <br>
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h5>Mọi thắc mắc xin gửi thông tin về cho chúng tôi</h5>
                            <form action="index.php?option=contact" method="post">
                                <div>
                                    <label for="fullname">Họ và tên</label>
                                    <input name="data[fullname]" id="fullname" type="text" class="form-control" />
                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input name="data[email]" id="email" type="gmail" class="form-control" />
                                </div>
                                <div>
                                    <label for="phone">Số điện thoại</label>
                                    <input name="data[phone]" id="phone" type="text" class="form-control" />
                                </div>
                                <div>
                                    <label for="title">Tiêu đề</label>
                                    <input name="data[title]" id="title" type="text" class="form-control" />
                                </div>
                                <div>
                                    <label for="detail">Nội dung</label>
                                    <textarea class="form-control" name="data[detail]" id="detail" rows="5"></textarea>
                                    <input name="data[status]" id="status" type="hidden" value="1" />
                                    <input name="data[replyid]" id="replyid" type="hidden" value="0" />
                                    <input name="data[replydetail]" id="replydetail" type="hidden" />
                                    <button class=" w-100 rounded border border-primary border-1 bg-primary" name="THEM">Gửi</button>
                                </div>

                            </form>
                        </div>
                    </td>
                </tr>
        </table>

    </div>
</section>
<?php require_once("views/frontend/footer.php") ?>