<?php 
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-12 text-centre border rounded bg-light my-5">
            <h1 style="text-align:center;">My cart</h1>
        </div>
    <div class="col-lg-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial no.</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Item price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($_SESSION['cart'])){
                foreach($_SESSION['cart'] as $keys => $value)
                {
                    $serial = 1+$keys;
                    echo "
                     <tr>
                        <td>$serial</td>
                        <td>$value[item_name]</td>
                        <td>$ $value[item_price]<input type='hidden' class='iprice' value='$value[item_price]'></td>
                        <td>
                            <form method='POST' action='manage-cart.php'>
                                <input class='text-center iquantity' name='mod-quantity' onchange='this.form.submit();' type='number' value='$value[item_quantity]' min='1' max='10'>
                                <input type='hidden' name='item_name' value='$value[item_name]'>
                                </form>
                        </td>
                        <td class='itotal'></td>
                        <td>
                        <form method='POST' action='manage-cart.php'>
                        <button name='remove_item' class='btn btn-sm btn-danger'>REMOVE</button>
                        <input type='hidden' name='item_name' value='$value[item_name]'>
                        </form>
                        </td>
                        </tr>";
                } 
            }
                    ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-3">
       <div>
       <h4>Grand Total:</h4>
        <h5 class="text-right" id="gtotal">
        </h5>
        </br>
            <?php
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0){
            ?>
        <form action="purchase.php" method="post" style="margin-bottom:16px;">
            <div class="mb-3">
                <label>Full name*</label>
                <input type="text" name="fname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Phone Number*</label>
                <input type="number" name="numb" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Address*</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email Address*</label>
                <input type="mail" name="email" class="form-control" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="C.O.D" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2" style="margin-left:10%">
                    Cash on Delivery
                </label>
            </div>
            <button class="btn btnn-primary btn-block" style="background-color:#ed2553; margin-top:6%; color: white; font-size: 18px;" name="purchase">Make purchase</button>
        </form>
        
        <?php
        }
        ?>
       </div>
    </div>
        </div>
    </div>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subtotal(){
        gt=0;
        for(i=0;i<iprice.length;i++){
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subtotal();
</script>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>