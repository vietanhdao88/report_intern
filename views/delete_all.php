<?php
include ('control.php');
$get_data = new data();
if(isset($_GET['remove'])){
$delete_cart = $get_data -> delete_all('cart' , $_GET['remove']);
if($delete_cart){
    echo "<script>alert('Xóa sản phẩm thành công')
    window.location='cart.php'</script>";
}else{
    echo 'xoa that bai';
}

}