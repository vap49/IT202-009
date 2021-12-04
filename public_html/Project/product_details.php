
<?php
require(__DIR__ . "/../../partials/nav.php");
$item_id = $_GET['id'];
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
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-7 g-4">
        <?php foreach ($results as $item) : 
            if (se($item,"id","",false) == $item_id) :
            ?>
<div class="container">

<section class="mb-5">

<div class="row">
  <div class="col-md-6">

    <h1><?php se($item, "name") ?></h1>
    <a class ="edit_btn" href="admin/edit_item.php?id=<?php se($item, "id"); ?>"> EDIT: <?php se($item, "name");?></a>
    </div>
    <p class="mb-2 text-muted text-uppercase small"><?php se($item,"category")?></p>
    <p><span class="mr-1"><strong>Cost: $<?php $item_cost = (int)se($item, "unit_price", "", false);
                            $num = deci($item_cost);
                            echo $num;?></strong></span></p>
    <p class="pt-1"><?php se($item,"description") ?></p>
    
    <div class="table-responsive">
    </div>
    <hr>
    <div class="table-responsive mb-2">
      <table class="table table-lg table-borderless">
        <tbody>
          <tr>
            <td class="pl-0 pb-0 w-25">Quantity</td>

          </tr>
          <tr>
            <td class="pl-0">
              <div class="def-number-input number-input safari_only mb-0">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                  class="minus"></button>
                <input class="quantity" min="0" name="quantity" value="1" type="number">
                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                  class="plus"></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <button class = "btn-primary"> <a href="cart.php?action=add&id=<?php se($item, "id"); ?>"> ADD TO CART </a></button>
    
  </div>
</div>

</section>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>