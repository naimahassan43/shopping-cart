<?php include ('header.php');

session_start();
// session_destroy();
?>

<!-- <?php print_r($_SESSION['cart']);?> -->
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3">
      <form action="manage-cart.php" method="POST">
        <div class="card">
          <img src="img/bag1.jpg" class="card-img-top" alt="hand bag">
          <div class="card-body text-center">
            <h5 class="card-title">Handbag 1</h5>
            <p class="card-text">Price: BDT. 1200</p>
            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 1">
            <input type="hidden" name="price" value="1200">
          </div>
        </div> <!-- Card  -->
      </form>
    </div><!-- /.col-lg-3  -->
    <div class="col-lg-3">
      <form action="manage-cart.php" method="POST">
        <div class="card">
          <img src="img/bag2.jpg" class="card-img-top" alt="hand bag">
          <div class="card-body text-center">
            <h5 class="card-title">Handbag 2</h5>
            <p class="card-text">Price: BDT. 1000</p>
            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 2">
            <input type="hidden" name="price" value="1000">
          </div>
        </div> <!-- Card  -->
      </form>
    </div><!-- /.col-lg-3  -->
    <div class="col-lg-3">
      <form action="manage-cart.php" method="POST">
        <div class="card">
          <img src="img/bag3.jpg" class="card-img-top" alt="hand bag">
          <div class="card-body text-center">
            <h5 class="card-title">Handbag 3</h5>
            <p class="card-text">Price: BDT. 900</p>
            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 3">
            <input type="hidden" name="price" value="900">
          </div>
        </div> <!-- Card  -->
      </form>
    </div><!-- /.col-lg-3  -->
    <div class="col-lg-3">
      <form action="manage-cart.php" method="POST">
        <div class="card">
          <img src="img/bag4.jpg" class="card-img-top" alt="hand bag">
          <div class="card-body text-center">
            <h5 class="card-title">Handbag 4</h5>
            <p class="card-text">Price: BDT. 1150</p>
            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add To Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 4">
            <input type="hidden" name="price" value="1150">
          </div>
        </div> <!-- Card  -->
      </form>
    </div><!-- /.col-lg-3  -->
  </div>
</div>

<?php include ('footer.php');?>