<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price FROM Products WHERE stock > 0 && visibility > 0 LIMIT 50"); // admins can't see because visibility checker but this shows how to create shop page for users
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $document.ready(function(){
        $('#add_to_cart').submit(function(e){
            
            $.ajax({
                type: "POST",
                url:"cart.php",
                data: $("#add_to_cart").serialize(),
                success: function(data){
                    flash("Successfully Added To Cart!")
                }
            })
            
            e.preventDefault();
        })
    })
</script>
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
                               //action=add&id=<?#php se($item, "id");?>
            <form id = "add_to_cart" action="cart.php?" method = "POST">
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header">
                        </div>
                        <?php if (se($item, "image", "", false)) : ?>
                            <img src="<?php se($item, "image"); ?>" class="card-img-top" alt="...">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php se($item, "name"); ?></h5>
                            <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        </div>
                        <div class="card-footer">
                            Cost: $<?php se($item, "unit_price"); ?>
                            <!--<button onclick="purchase('<?php //se($item, 'id'); ?>')" class="btn btn-primary">Add To Cart</button> -->
                            <button name = add_to_cart type = "submit" class = "btn btn-info">Add To Cart</button>
                        </div>
                    </div>
                </div>
            <input type="number" id = "quantity" class="form-control mb-3" name="quantity" value="1">
            <input type="hidden" id = "id" name="id" value="<?php se($item,"id");?>">
            <input type="hidden" id = "name" name="name" value="<?php se($item,"name");?>">
            <input type="hidden" id = "description" name="description" value="<?php se($item,"description");?>">
            <input type="hidden" id = "unit_price" name="unit_price" value="<?php se($item,"unit_price");?>">
        <?php endforeach; ?>
    </div>
    
</form>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>