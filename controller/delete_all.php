<?php
include ('control.php');
$get_data = new data();
if(isset($_GET['del_product'])){
$delete_product = $get_data -> delete_all('products' , $_GET['del_product']);
if($delete_product){
    
    echo "<script>window.location ='list_product.php'</script>";
}else{
    echo 'xoa that bai';
}

}else if(isset($_GET['del_user'])){
    $delete_user = $get_data -> delete_all('user' , $_GET['del_user']);
    if($delete_user){ 
        echo "<script>window.location ='list_user.php'</script>";
    }else{
        echo 'xoa that bai';
    }
    
    }else if(isset($_GET['del_brand'])){
    $delete_user = $get_data -> delete_all('brands' , $_GET['del_brand']);
    if($delete_user){ 
        echo "<script>window.location ='list_brand.php'</script>";
    }else{
        echo 'xoa that bai';
    }
    
    }
?>