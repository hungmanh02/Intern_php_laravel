<?php
   
    require'./db/connect.php';//kết nối database
    mysqli_set_charset($conn, 'UTF8');
    if(isset($_POST['btn-submit'])){
        
        
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $content=$_POST['content'];
        if(!empty($fullname) && !empty($email) &&!empty($phone) && !empty($content)){
            print_r($_POST);
            
            $sql="INSERT INTO  `contact`   (`fullname`,`email`,`phone`,`content`) VALUES ('$fullname','$email','$phone','$content')";
            if($conn->query($sql)===TRUE){
                echo " Thêm dữ liệu thành công";
            }else{
                echo "Lỗi {$sql}".$conn->error;
            }
        }else{
            echo "bạn cần nhập đủ thông tin";
        }


    }
?>