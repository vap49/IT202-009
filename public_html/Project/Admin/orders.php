<?php
require(__DIR__ . "/../../../partials/nav.php");

if (!is_logged_in()) {
    flash("You must be logged in to view this page!", "warning");
    die(header("Location: $BASE_PATH" . "login.php"));
}
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "shop.php"));
}

$userId = get_user_id();
$db = getDB();
$query = "SELECT * FROM orders LIMIT 10";
$stmt = $db->prepare($query);
$orders = [];
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $orders = $r;
    }
} catch (PDOException $e) {
    flash("Something Broke");
}
?>
<html>

<body>
    <h3 align="center">All Orders</h3>
    <?php if ($orders && count($orders) == 0) : ?>
        <p>No orders!</p>
    <?php else : ?>
        <table class="t1" style="width:50%" ;>
            <tr>
                <th style="font-size: 20px;">Id</th>
                <th style="font-size: 20px;">User ID</th>
                <th style="font-size: 20px;">Address</th></b>
                <th style="font-size: 20px;">Payment</th></b>
                <th style="font-size: 20px;">Date Purchased</th></b>
                <th style="font-size: 20px;">Order Details</th></b>
            </tr>
            <?php foreach ($orders as $item) : ?>
                <tr>
                    <th><?php se($item, "id") ?></th>
                    <th><?php se($item, "user_id") ?></th>
                    <th><?php se($item, "address") ?></th>
                    <th><?php se($item, "payment_method"); ?></th>
                    <th><?php se($item, "created"); ?></th>
                    <th>
                        <a href="<?php
                           $full = (string) get_url("order_details.php") . "?id=" . (int) se($item, "id", "", false);
                           echo $full; ?>" class="orderLink">Order Details
                        </a>

                    </th>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>
<!-- Style Here Later -->
