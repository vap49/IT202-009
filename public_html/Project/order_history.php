<?php
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to view this page!", "warning");
    die(header("Location: $BASE_PATH" . "login.php"));
}
$userId = get_user_id();
$db = getDB();
$query = "SELECT * FROM orders WHERE `user_id` = $userId";
$stmt = $db->prepare($query);
$orders = [];
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $orders = $r;
    }
} catch (PDOException $e) {
    flash("Something Broke Here");
}
?>
<h3 align = "center"> Your Orders</h3>
<?php if ($orders && count($orders) == 0) : ?>
    <p>Nothing to show here!</p>
<?php else : ?>
    <table class = "userHist" style="width:50%";>
        <tr>
            <th >Id</th>
            <th >User ID</th>
            <th >Address</th></b>
            <th >Payment</th></b>
            <th >Date Purchased</th></b>
            <th >Details</th></b>
        </tr>
        <?php foreach ($orders as $item) : ?>
            <tr>
                <th><?php se($item, "id") ?></th>
                <th><?php se($item, "user_id") ?></th>
                <th><?php se($item, "address") ?></th>
                <th><?php se($item, "payment_method") ?></th>
                <th><?php se($item, "created");?></th>
                <th>
                    <a href="<?php  
                    $full = (string) get_url("order_details.php") . "?id=" . (int) se($item, "id","",false);
                    echo $full;?>" class = "orderLink">Order Details</a>
                    
                </th>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

<!-- Style here -->
<style>
      .userHist {
        margin-left: auto;
        margin-right: auto;
    }
td,th {
        border: 1px solid black;
        padding: 5px 15px;
        justify-items: center;
        color: #543855;
    }
</style>
