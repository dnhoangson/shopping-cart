<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<form class="form-horizontal" onSubmit="return validation()" id="form-add-new" method="get" action="">
    <div class="form-group">
        <label class="control-label" for="input_name">Họ tên</label>
        <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="input_name" aria-describedby="emailHelp" placeholder="" pattern="^(?=(?:[^A-Za-z]*[A-Za-z]){6})(?![^\d~`?!^*¨ˆ;@=$%{}\[\]|\\\/<>#“.,]*[\d~`?!^*¨ˆ;@=$%{}\[\]|\\\/<>#“.,])\S+(?: \S+){0,7}$" required>
            <small>Tối thiểu 6 chữ cái, không tính khoảng cách. Không được để trống.</small>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="phone">Điện thoại</label>
        <div class="col-sm-10">
            <input type="text" name="phone" class="form-control" id="input_phone" placeholder="" pattern="0[0-9\s.-]{9,13}" required>
            <small>10-14 số. Phải bắt đầu bằng số 0. Không được để trống.</small>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label" for="input_email">Email</label>
        <div class="col-sm-10">
            <input type="email" name="mail" class="form-control" id="input_email" placeholder="" pattern="^([a-zA-Z0-9_\-\.]+){3,50}@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required>
            <small>Có @. Không được để trống.</small>
        </div>
    </div>
    <button type="submit" name="form-add-new" class="btn btn-primary" id="submit-add-new">Thêm</button>
</form>

<?php

//if (isset($_SESSION['userList'])) {
//session_start();
function build_table($array) {
    // start table
    $html = '<table class="table">';
    // header row
    $html .= '<tr>';
    foreach ($array[0] as $key => $value) {
        $html .= '<th>' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';

    // data rows
    foreach ($array as $key => $value) {
        $html .= '<tr>';
        foreach ($value as $key2 => $value2) {
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}

$users = last(Session::get('list'));
$lastUser = last($users);
//print_r($users);
echo "<br>";
//print_r($lastUser);
//while (true) {
if (isset($_GET['form-add-new'])) {
    $lastUser = last($users);
    $newID = $lastUser['id'] + 1;
    $newUser = array("id" => $newID, "name" => $_GET['name'], "phone" => $_GET['phone'], "mail" => $_GET['mail']);
    array_push($users, $newUser);
    //print_r('<br>');
    //print_r($users);
}



//}
//dd($users);
//include('list.blade.php');
//$users = $_SESSION['userList'];
//dd($users);
//build_table($users);
//}
?>

<div id="userList" >
    <h2>Danh sách</h2>
    <table class="table" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user_i) { ?>
                <tr>
                    <?php foreach ($user_i as $user_ii) { ?>
                        <td> <?php echo $user_ii; ?> </td>
                    <?php } ?>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping-cart\resources\views/shop/add.blade.php ENDPATH**/ ?>