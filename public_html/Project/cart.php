<!DOCTYPE html>
<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("You must be logged in to see this!");
    die(header("Location: login.php"));
}
?>

<html>
    <head>
        <title>
            Bamazon.com | Your Shopping Cart
        </title>
        <meta name = "description" content = "A Shopping Cart">
        <link href = "stylesheet" href = "styles.css" />
        <script scr="helpers.js "async> </script>
    </head>

    <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
    
</html>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>

