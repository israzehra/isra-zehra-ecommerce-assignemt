<?php
session_start();
$con=mysqli_connect("localhost","root","","purchase_data");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['purchase'])){
    $query1="INSERT INTO `order_manager`(`full_name`, `phone_number`, `address`,`Email`, `pay_mode`) VALUES ('$_POST[fname]','$_POST[numb]','$_POST[address]','$_POST[email]','$_POST[pay_mode]')";
        if(mysqli_query($con,$query1)){
            $order_id=mysqli_insert_id($con);
            $query2="INSERT INTO `user_orders`(`order_id`, `item_name`, `price`, `quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"isii",$order_id,$item_name,$price,$quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $item_name=$values['item_name'];
                    $price=$values['item_price'];
                    $quantity=$values['item_quantity'];
                mysqli_stmt_execute($stmt);
                }
                  unset($_SESSION['cart']);
                   echo "<script>
                   alert('Order placed. Thank you for shopping:) Email sent');
                   window.location.href='shop.php';
                   </script>";
            }
            else{
                echo "<script>
                alert('SQL query prepare error');
                window.location.href='shop.php';
                </script>";
            }
        }
      else{
          echo "<script>
                  alert('mysqli error');
                  window.location.href='my-cart.php';
                  </script>";
      }
}
}
?>
