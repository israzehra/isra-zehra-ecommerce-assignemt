<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css"> 
</head>
<body>
<div class="super_container">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item">
                            <div class="top_bar_icon"><a href="tel:+91 9823 132 111"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt="" style="margin: 12px 6px;">   +91 9823 132 111</a></div>
                        </div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                            </div>
                                <!--cart-->
                                    <div>
                                    <?php
                                        $count=0;
                                        if(isset($_SESSION['cart'])){
                                            $count= count($_SESSION['cart']);
                                        }
                                    ?>
                                    <a href="my-cart.php"class="btn btn-success">  <i class="fas fa-shopping-cart"></i>   My cart(<?php echo $count; ?>)</a></div>


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Header Main -->
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="https://cdn3.f-cdn.com/contestentries/1828256/24559906/5f7ae7cda6195_thumb900.jpg"></a></div>
                        </div>
                    </div>
                     <!-- Wishlist -->
                     <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        </div>
                    </div>
                </div>

                            <!-- Main Nav Menu -->
                            <div class="anchor">
                                <a href="shop.php">Home </a>
                            </div>
            </div>
        </div>

        </header>


    <div style="height: 10px"> </div>
</div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

</body>
</html>