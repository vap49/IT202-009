<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("You must be logged in to see this!");
    die(header("Location: login.php"));
}
?>
<?php 
    $product_ids = array();
    //session_destroy();

    // check if add to cart button has been clicked
    if (isset($_POST['add_to_cart'])) {
        if (isset($_SESSION['shopping_cart'])) {
            # keep track of shopping cart product
            $count = count ($_SESSION['shopping_cart']);
            $products_ids = array_column($_SESSION['shopping_cart'], 'id');
            if (!in_array(filter_input(INPUT_GET, 'id'), $product_ids)) {
                $_SESSION['shopping_cart'][$count] = array(
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'description' => filter_input(INPUT_POST, 'description'),
                'unit_price' => filter_input(INPUT_POST, 'unit_price'),
                'quantity' => filter_input(INPUT_POST, 'quantity'),
                );
            }
            else{
                for ($i = 0 ; $i < count ($product_ids); $i++){
                        if ($product_ids[$i]  == filter_input(INPUT_GET, 'id')) {
                                $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                    }
                }
            }
        }
        else{
            # if shopping cart doesn't exist, create first product with array key
            $_SESSION['shopping_cart'][0] = array(
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'description' => filter_input(INPUT_POST, 'description'),
                'unit_price' => filter_input(INPUT_POST, 'unit_price'),
                'quantity' => filter_input(INPUT_POST, 'quantity'),
            );
        }
    }
            # delete item from the cart
            if (filter_input(INPUT_GET, 'action') == 'delete') {
                # go through the products to check a product that matches the Get Id
                    foreach ($_SESSION['shopping_cart'] as $key => $product) {
                        if ($product['id'] == filter_input(INPUT_GET, 'id')) {
                            # remove the item
                            unset($_SESSION['shopping_cart'][$key]);
                        }
                    }
                    // reset session array keys so they match with product ids number array
                    $_SESSION['shopping_cart'] =array_values($_SESSION['shopping_cart']);
            }

/*
//check out
if (filter_input(INPUT_GET, 'action')  == 'checkout') {
    // go through the products to check a product that matches the GET ID
    foreach ($_SESSION['shopping_cart'] as $key => $product) {
        # remove the iitem
        unset($_SESSION['shopping_cart'] [$key]);
        
    }
     // reset session array keys so they match with product ids number array
     $_SESSION['shopping_cart'] =array_values($_SESSION['shopping_cart']);
}

           // pre_r ($_SESSION);

            function pre_r($array){
            echo '<pre>';
            print_r($array);
            echo '<pre>';
            }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart :: Checkout</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    
</head>
</body>

<!--- Checkout products section ends here --->
<div class="container-fluid md-5">

    <div class="row px-5 py-2">
   
    <br>
    <hr>
        <div class="col-md-7">
        <a href="shop.php" class="btn btn-success btn-block">Continue Shopping</a>
            <h4>My Cart</h4>
            <?php
                if (!empty ($_SESSION['shopping_cart'])):
                    $total = 0 ;
                    foreach ($_SESSION['shopping_cart'] as $key => $product):
                   
            ?>
           
            <div class="card px-3 mb-5">
            
                <div class="card-body">
                    <div class="row">

                    <!--- Product image --->  
                    <div class="col-md-4">
                    </div>
                        <div class="col-md-4">
                            <h4><?php echo $product ['name'];?></h4>
                            <h6><b>Description</b><?php echo $product ['description'];?></h6>
                            <p></p>
                                <span class="price"> <b><?php echo $product ['unit_price'];?>/-</b></span>
                            </h5>
                        </div>
                       
                        <div class="col-md-4 py-5 px-5">
                           <a href="checkout.php?action=delete&id=<?php echo $product ['id'];?>">
                                <div class="btn btn-danger">Remove</div>
                           </a>
                        </div>
                    </div>
                </div>
            </div>
               <?php 
                    $total = $total + ($product['quantity'] * $product['unit_price']);
                    endforeach;
               ?>
    <?php endif;  ?>
        </div>
<!--- Checkout products section ends here ---> 
        <!--- Total Price section ---> 
        <?php 
            if(!empty ($_SESSION['shopping_cart'])):
                if(count($_SESSION['shopping_cart']) > 0);
        ?>
        
<div class="col-md-5 py-5 px5">

    <div class="card">
    
        <div class="card-body">
            <b>Price Details</b>
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <h5>Price (<?php echo $product['quantity']?> items)</h5>
                </div>
                <div class="col-md-5">
                    <h5 class="float-right">
                        <?php echo $total;?>
                    </h5>
                </div>
                <!--- Price section ---> 
                <!--- Total price section --->
            <div class="row">
                <div class="col-md-5 py-4">
                    <h5><b>Amount Payable</b></h5>
                </div>
                <div class="col-md-5 py-4">
                    <h5 class="float-right"><b><?php echo $total;?></b></h5>
                </div>
            </div>
                </div>
            </div>
           
        </div>
        
    </div>
    <a href="sales_order.php">
                                <div class="btn btn-warning btn-block px-5">Continue Checkout</div>
                           </a>
</div>

                <?php 
                        endif;
                ?>
        <!--- Total Price section ends here --->
    </div>
</div>
</body>
</html>