<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ALAM'S URBAN EATERY - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

   

</head>

<body>

    <div class="brand">ALAM'S URBAN EATERY</div>
    <div class="address-bar">MAIN ROAD|NEAR RED FORT|NEW DELHI</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">ALAM'S URBAN EATERY
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/blog1.jpg" alt="">
                    <h2>burger or hamburger
                        <br>
                        <small>January 16 2016</small>
                    </h2>
                    <p>A grilled meat or vegetable patty on a bun is called a burger. ... You can use the word burger as a casual shorthand for hamburger.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/blog2.jpg" alt="">
                    <h2>pizza 
                        <br>
                        <small>February, 2016</small>
                    </h2>
                    <p>Pizza is an Italian food that was created in Italy (The Naples area). It is made with different toppings. Some of the most common toppings are cheese, sausages, pepperoni, vegetables, tomatoes, spices and herbs and basil. These toppings are added over a piece of bread covered with sauce.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/blog3.jpg" alt="">
                    <h2>biryani
                        <br>
                        <small>March 4 2016</small>
                    </h2>
                    <p>Biryani (/bɜːrˈjɑːni/) is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made with Indian spices, rice, and meat usually that of chicken, goat, lamb, prawn, fish, and sometimes, in addition, eggs or vegetables such as potatoes in certain regional varieties.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/blog5.jpg" alt="">
                    <h2>shahi paneer
                        <br>
                        <small>April 4 2016</small>
                    </h2>
                    Shahi paneer is a preparation of paneer, native to the Indian subcontinent, consisting of a thick gravy of cream, tomatoes and Indian spices.It is mainly eaten with traditional Indian flat-breads like roti or naan, rice and bread.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">To learn it's recipe follow the link given below</h4>
		  </div>
		  <div class="modal-body">
			<p > <a href="https://www.youtube.com/watch?v=Z_WHZgQpxvA"> https://www.youtube.com/watch?v=Z_WHZgQpxvA</a></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">for pizza recipe click the link given below</h4>
		  </div>
		  <div class="modal-body">
			<p><a href="https://www.youtube.com/watch?v=sv3TXMSv6Lw">https://www.youtube.com/watch?v=sv3TXMSv6Lw</a></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">for biryani recipe click the link given below</h4>
		  </div>
		  <div class="modal-body">
			<p><a href="https://www.youtube.com/watch?v=95BCU1n268w">https://www.youtube.com/watch?v=95BCU1n268w</a></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
  	<!-- Modal 4 -->
	<div id="myModal4" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">for shahi paneer recipe click the link given below</h4>
		  </div>
		  <div class="modal-body">
			<p><a href="https://www.youtube.com/watch?v=G3-EASdBTOU">https://www.youtube.com/watch?v=G3-EASdBTOU</a></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;  ALAM'S URBAN EATERY - 2021</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
