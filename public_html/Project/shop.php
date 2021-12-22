<?php
require(__DIR__ . "/../../partials/nav.php");
$name = se($_GET, "name", "", false);
$results = [];
$db = getDB();
//Sort and Filters
$col = se($_GET, "col", "cost", false);
//allowed list
if (!in_array($col, ["unit_price", "category", "name","rating"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
$name = se($_GET, "name", "", false);
//dynamic query
$query = "SELECT * FROM Products WHERE visibility > 0"; //1=1 shortcut to conditionally build AND clauses
$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}
//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
}
$stmt = $db->prepare($query); //dynamically generated query
//$stmt = $db->prepare("SELECT id, name, description, cost, stock, image FROM BGD_Items WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute($params); //dynamically populated params to bind
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<form class="row row-cols-auto g-3 align-items-center">
    <div class="col">
        <div class="input-group">
            <div class="input-group-text">Search</div>
            <input class="form-control" name="name" value="<?php se($name); ?>" />
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-text">Sort</div>
            <!-- make sure these match the in_array filter above-->
            <select class="form-control" name="col" value="<?php se($col); ?>">
                <option value="unit_price">Price</option>
                <option value="category">Category</option>
                <option value="rating">Rating</option>
            </select>
            <script>
                //quick fix to ensure proper value is selected since
                //value setting only works after the options are defined and php has the value set prior
                document.forms[0].col.value = "<?php se($col); ?>";
            </script>
            <select class="form-control" name="order" value="<?php se($order); ?>">
                <option value="asc">Up</option>
                <option value="desc">Down</option>
            </select>
            <script>
                //quick fix to ensure proper value is selected since
                //value setting only works after the options are defined and php has the value set prior
                document.forms[0].order.value = "<?php se($order); ?>";
            </script>
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <input type="submit" class="btn btn-primary" value="Apply" />
        </div>
    </div>
</form>


<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card 2 bg-light">
                    <div class="card-header">
                        <?php if (has_role("Admin")) : ?>
                            <a href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name"); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="body">
                        <h5 class="title"><a href="product_details.php?id=<?php se($item, "id"); ?>"><?php se($item, "name"); ?></a></h5>
                        <p class="desc"><?php se($item, "description"); ?></p>
                    </div>
                    <div class="footer">
                        Cost: $<?php
                                $item_cost = (int)se($item, "unit_price", "", false);
                                echo $item_cost / 100;
                                ?>
                        <br>
                        <button class="btn-primary"> <a href="cart.php?action=add&id=<?php se($item, "id"); ?>"> ADD TO CART </a></button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
require(__DIR__ . "/../../partials/footer.php");
?>