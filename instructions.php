<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Setup Instructions</title>


      <?php require("".dirname(__FILE__)."/bootstrap.php") ?>
</head>

<body>

      <!-- Sidebar -->
      <div id="wrapper">

        <div class="col-md-3">
            <?php require("".dirname(__FILE__)."/sidebar.php") ?>
  </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Setup Instructions</h1>
                        <p><br>DVWS can be used with a XAMPP setup. XAMPP is a free and open source cross-platform web server solution which mainly consists of an Apache Web Server and MySQL database. </p>



                        <p>Click on the 'Create / Reset Database' button below to create or reset your database. If the database already exists, it will be cleared and all data will be reset. Incase of any MySQL Access denied error, make necessary changes in the <b>dvws/instructions.php.</b></p>



	<form action="<?php $_PHP_SELF ?>" method="post">
		<input name="create_db" type="submit" value="Reset Database">

	</form>

</body>

</html>
<?php
   if (isset( $_POST["create_db"])) {
//connect to database. Make necessary changes to $connect for successful connection
		$connect =  new mysqli('localhost', 'root', '');
		if ($connect->connect_error) {
		die("Connection failed<br> " . $conn->connect_error);
		}
//delete previous database
        $drop_db = "DROP DATABASE dvws";

		if ($connect->query($drop_db) === TRUE) {
			echo "<br>Database deleted successfully <br>";
		} else {
			echo "Error deleting database <br> " . $connect->error;
		}
//create new database
		$create_db = "CREATE DATABASE dvws";

		if ($connect->query($create_db) === TRUE) {
			echo "<br> Database created successfully ";
		} else {
			echo "Error creating database <br> " . $connect->error;
		}

		$connect =  new mysqli('localhost', 'root', '','dvws');

		$create_tb = "CREATE TABLE users
		(
		id int,
		first_name varchar(15),
		last_name varchar(15),
		secret varchar(15)
		)";

		if ($connect->query($create_tb) === TRUE) {
		echo "<br> Tables created successfully <br>";
		} else {
			echo "Error creating tables <br>" . $connect->error;
		}


		$insert = "INSERT INTO `users` VALUES
		('1','Darth','Vader','039498utr'),
		('2','Gordon','Brown','fgkjiu4h54'),
		('3','Hack','Me','1337'),
		('4','Pablo','Picasso','34sdfrsdgf'),
		('5','Kylo','Ren','34sdfrsdgf'),
		('6','Anakin','Skywaler','343425d33'),
		('7','Aaron','Unknown','34434222'),
		('8','Bob','Smith','5jhgjdyh3343')";


		if ($connect->query($insert) === TRUE) {
			echo "Data inserted successfully <br>";
		} else {
			echo "Error inserting data <br> " . $connect->error;
			}

		$connect->close();
	}
?>
