<!DOCTYPE HTML>
<?php
include("connection.php");
?>
<HTML>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width" />
    <title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/style.css" />
  </head>
<body>
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
    <div class="container-fluid">
  <div class="container-fluid" style="background-color:black;color:white">
<div class="container">
<p class="pull-right">Email:skkmgenuine@gmail.com</p>
</div>
<div class="container">
    <p class="pull-left" style="color:white;"><a href="../index.php">Back to Home</a></p>
</div>
</div>
<div class="container"><font face="centaur"><h1>My Shop</font></h1></div>
<div class="container"><!--navigation-->
    <div class="container" style="background: blue; color: white;">
    <div class="row">
<div class="col-sm-12 mymanu">
<nav class="navbar ">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
  <span class="icon-bar">--</span>
  <span class="icon-bar">--</span>
  <span class="icon-bar">--</span>
</button>
</div>
<div class="collapse navbar-collapse" id="mystyle">
<ul class="nav navbar-nav">
  <li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
  <li><a href="pro.php" class="active"><font color="white">Product</font></a></li>
  <li><a href="sell.php" class="active"><font color="white">Sell</font></a></li>
  <li><a href="index.php" class="active"><font color="white">Logout</font></a></li>
</ul>
</div>
</nav>
</div>
</div>
</div>
</div><!--navigation ends here-->
<div class="container">
  <h1>Product List</h1>
<table class="table">
    <tr>
        <td>Product Name
        </td>
        <td>Brand
        </td>
        <td>Catergory
        </td>
        <td>Price
        </td>
<td>Image</td>
        </tr>

        <?php
        $q="select * from product";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
            $pname=$row['name'];
            $brand=$row['brand'];
            $cat=$row['cat'];
            $price=$row['price'];
    $img=$row['img'];
            ?>
            <tr>
                <td> <?php echo $pname;?></td>
                <td> <?php echo $brand;?></td>
                <td> <?php echo $cat;?></td>
                <td> <?php echo $price;?></td>
 <td><?php echo $img; ?></td>
             </tr>
            <?php
        }
        ?>
</table>
<br><br>

</div>
<div class="container" style="background-color:silver; color:white;">
<h1 align="center">SkkmGenuine.com</h1>
</div>

    </div>
</body>
</html>
