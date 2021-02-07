<?php
session_start();
// session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['Add_To_Cart']))
  {
    if(isset($_SESSION['cart']))
    {
    $myitems =array_column($_SESSION['cart'], 'Item_Name');
    if(in_array($_POST['Item_Name'], $myitems)){
      echo "<script>alert('Item Already Added');
      window.location.href='index.php';
      </script>";
    }
    else{
      $count=count($_SESSION['cart']);
      $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['price'], 'Quantity'=>1 );
      // print_r($_SESSION['cart']);
      echo "<script>alert('Item Added');
        window.location.href='index.php';
        </script>";
      }
    }
    else
    {
      $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['price'], 'Quantity'=>1 );
      // print_r($_SESSION['cart']);
      echo "<script>alert('Item Added');
      window.location.href='index.php';
      </script>";
    }
  }
}
?>