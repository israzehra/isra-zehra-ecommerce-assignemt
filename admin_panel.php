<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Admin Panel</title>
</head>
<body>
<h1 style="color:black; margin-left:42%;">ADMIN <b style="color:#ec2652;">PANEL</b></h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr style="background-color:#FC0A73;">
                            <th scope="col">Order Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone number</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pay mode</th>
                            <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $conn=mysqli_connect('localhost','root','','purchase_data');
                        $query="SELECT * FROM `order_manager`";
                        $user_result=mysqli_query($conn,$query);
                        while($user_fetch = mysqli_fetch_assoc($user_result))
                        {
                            echo "
                            <tr>
                                <th>$user_fetch[order_id]</th>
                                <td>$user_fetch[full_name]</td>
                                <td>$user_fetch[phone_number]</td>
                                <td>$user_fetch[address]</td>
                                <td>$user_fetch[Email]</td>
                                <td>$user_fetch[pay_mode]</td>
                                <td> 
                                    <table class='table'>
                                        <thead>
                                            <tr style='background-color:#FC0A73;'>
                                                <th scope='col'>Item name</th>
                                                <th scope='col'>Price</th>
                                                <th scope='col'>quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                                            $order_query="SELECT * FROM `user_orders` WHERE `order_id`='$user_fetch[order_id]'";
                                            $order_result=mysqli_query($conn,$order_query);
                                            while($order_fetch=mysqli_fetch_assoc($order_result))
                                            {
                                                echo"
                                                    <tr>
                                                        <td>$order_fetch[item_name]</td>
                                                        <td>$order_fetch[price]</td>
                                                        <td>$order_fetch[quantity]</td>
                                                    </tr>
                                                ";
                                            }
                                                            echo "
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            ";
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>

