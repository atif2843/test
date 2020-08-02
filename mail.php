<?php 
if(isset($_POST['name']) && isset($_POST['email'])){
    $name= $_POST['name'];
    $email = $_POST['email'];
    $to="muhammadatif93@gmail.com";
    $massage ="test";
    $body="test";
    $header="From ".$name." <".$email.">\r\n";
    $send=mail($to,$massage,$body,$header);
    if($send){
        echo 'submitted';
    }
    else{
        echo 'error';
    }
}
echo "hello  world";
echo $to;
echo $name;
echo $email;
echo $header;

?>