<!doctype html> 
<html> 
    <head> 
        <title>About</title> 
        <link rel="stylesheet" type="text/css" href="MainPage.css"> 
	</head>
	
    <body> 
        <?php include("menu.php"); ?>
        <div id="mainContainer">           
            <div id="content">             
                <h2>About - Event Log Imperfection Patterns</h2>             
                <?php
					$cxn = mysqli_connect($host, $user, $password, $dbname)
					or die("Connection failed" . mysqli_error($cxn));
					$query = "SELECT * FROM pattern_table.about;";
					
					$result = mysqli_query($cxn, $query)
					or die("Coudn't execute query. " . mysqli_error($cxn));					
					
					while ($data = mysqli_fetch_array($result)) {
						echo '<p>'. $data['Description'] .'</p>';	
					}
					
				?>
			</div> <!-- end content -->                      
            <?php include("footer.html"); ?> 
		</div> <!-- end mainContainer --> 
	</body> 
</html>