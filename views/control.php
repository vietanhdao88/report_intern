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
        return $num;
    }
    function select_all($table){
        global $conn;
        $sql = "select * from $table";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function select_id($table  , $id){
        global $conn;
        $sql = "select * from $table where id = $id";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function insert_cart($id_product , $price , $price_sale , $name , $thumnail){
        global $conn;
        $sql = "insert into cart(id_product , price, price_sale , name , img) values('$id_product','$price'  , '$price_sale', '$name' , '$thumnail')";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    function delete_all($table , $id){
        global $conn;
        $sql = "delete from $table where id='$id'";
        $run = mysqli_query($conn , $sql);
        return $run;
    }
    
}
?>