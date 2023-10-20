<?php
include ("../connect.php");
class data{
    function insert($firstname , $lastname , $birthdate , $email , $password){
        global $conn;
        $sql = "insert into user(firstname , lastname , birthdate , email , password) values('$firstname' , '$lastname' , '$birthdate' , '$email' , '$password')";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function select_user(){
        global $conn;
        $sql = "select * form user";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function login($email , $password){
        global $conn;
        $sql = "select * from user where email = '$email' and password = '$password'";
        $run=mysqli_query ($conn,$sql);
        $num = mysqli_num_rows($run);
        return $num[0]['role'];
    }
    function insert_product($name , $price , $thumnail , $detail , $review , $delivery , $amount , $status , $title , $color , $price_sale){
        global $conn;
        $sql = "insert into products(name	,price	,thumnail	,detail	,review	,delivery	, amount , status , title, color , price_sale	) values('$name' , '$price' , '$thumnail' , '$detail' , '$review' , '$delivery' , '$amount' , '$status' , '$title' , '$color' , '$price_sale')";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function select_id($table , $id){
        global $conn;
        $sql = "select * from $table where id='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function delete_all($table , $id){
        global $conn;
        $sql = "delete from $table where id='$id'";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function select_all($table){
        global $conn;
        $sql = "select * from $table";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function update_product($name , $price , $thumnail , $detail , $review , $delivery , $amount , $status , $title , $color , $price_sale , $id){
        global $conn;
        $sql = "update products set name = '$name' , price =  '$price' ,thumnail = '$thumnail' , detail =  '$detail' , review = '$review' , delivery = '$delivery' ,amount = '$amount' , status = '$status' , title = '$title' , colors = '$color' , price_sale = '$price_sale' where id = '$id'";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function update_user($firstname , $lastname , $birthdate , $email , $password , $role , $id){
        global $conn;
        $sql = "update user set firstname = '$firstname' , lastname = '$lastname' , birthdate = '$birthdate' , email='$email' , password = '$password' , role = '$role' where id = '$id'";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function insert_brand($name , $image){
        global $conn;
        $sql = "insert into brands(name	, image) values('$name' , '$image')";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function update_brand($name , $image , $id){
        global $conn;
        $sql = "update brands set name = '$name' , image = '$image' where id = '$id'";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
}
?>