<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php

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

        $array = array(
            array('first' => 'tom', 'last' => 'smith', 'email' => 'tom@example.org', 'company' => 'example ltd'),
            array('first' => 'hugh', 'last' => 'blogs', 'email' => 'hugh@example.org', 'company' => 'example ltd'),
            array('first' => 'steph', 'last' => 'brown', 'email' => 'steph@example.org', 'company' => 'example ltd')
        );
        $user = array(
            array("id" => 1, "name" => "Cao Thành", "phone" => "0937324778", "mail" => "caominhthanh@sgu.edu.vn"),
            array("id" => 2, "name" => "Phan Huy", "phone" => "0937324778", "mail" => "ahuy@gmail.com")
        );
        //session_start();
        Session::push('list', $user);
        //$_SESSION['userList'] = $user;
        //$user2 = array("id" => 3, "name" => "Cao Thành", "phone" => "0937324778", "mail" => "caominhthanh@sgu.edu.vn");
        //array_push($user, $user2);
        echo build_table($user);
        
        ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\shopping-cart\resources\views/shop/list.blade.php ENDPATH**/ ?>