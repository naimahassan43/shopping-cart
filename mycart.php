<?php 
  include ('header.php');

?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center border rounded bg-light my-5">
      <h1>MY CART</h1>
    </div>
    <div class="col-lg-9">
      <table class="table table-striped table-bordered table-hover table-responsive text-center">
        <thead>
          <tr>
            <th scope="col">Serial No.</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Price</th>
            <th scope="col">Quantity</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <?php 

        $total = 0;
        if (isset($_SESSION['cart'])) {
          foreach($_SESSION['cart'] as $key => $value)
        {
          $sr=$key+1;
          $total = $total + $value['Price'];
          // print_r($value);
          echo
          "<tr>
            <th>$sr</th>
            <td>$value[Item_Name]</td>
            <td>$value[Price]</td>
            <td> <input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'> </td>
            <td> 
              <form action='manage-cart.php' method='POST'> 
                <button class='btn btn-outline-danger btn-sm' name='remove_item'>Remove</button>
                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
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
      <div class="border bg-light rounded p-4">
        <h4>Total:</h4>
        <h5 class="text-end"><?php echo $total; ?></h5>
        <form action="">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
              checked>
            <label class="form-check-label" for="exampleRadios1">
              Cash On Delivery
            </label>
          </div>
          <br>
          <button class="btn btn-primary btn-block">Make Purchase</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include ('footer.php');?>