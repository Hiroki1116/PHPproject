<?php
	include("MySQL_AccountInformation.php");
	
	$cxn = mysqli_connect($host, $user, $password, $dbname)
	or die("Connection failed" . mysqli_error($cxn));
	$query = "SELECT * FROM pattern_table.patterns;";
	
	$result_event = mysqli_query($cxn, $query)
	or die("Coudn't execute query. " . mysqli_error($cxn));
	$result_case = mysqli_query($cxn, $query)
	or die("Coudn't execute query. " . mysqli_error($cxn));
	$result_log = mysqli_query($cxn, $query)
	or die("Coudn't execute query. " . mysqli_error($cxn));
?>

<div id ="header">
	<h2>
		<a href="Top.php">Event Log Imperfection Patterns</a>
	</h2>
</div>
<div id="menu">           
	<ul>
		<!-- 1st level menu-->		
		<li><a href="Top.php">Home</a></li>              
		<li><a href="#">Patterns</a>
			<ul>
				<!-- 2nd level menu-->				
				<li><a href ="#">Event</a>
					<ul>
						<?php
							while ($data = mysqli_fetch_array($result_event)) {
								if($data['Category'] == "Event"){
								?>
								<li><a href ="pattern.php?PatternName=<?php echo $data['PatternName']; ?>"><?php echo $data['PatternName']; ?></a></li>
								<?php
								}
							}
						?>						
					</ul>
				</li>
				<!-- 2nd level menu-->				
				<li><a href ="#">Case</a>
					<ul>
						<?php
							while ($data = mysqli_fetch_array($result_case)) {
								if($data['Category'] == "Case"){
								?>
								<li><a href ="pattern.php?PatternName=<?php echo $data['PatternName']; ?>"><?php echo $data['PatternName']; ?></a></li>
								<?php
								}
							}
						?>						
					</ul>
				</li>				
				<!-- 2nd level menu-->				
				<li><a href ="#">Log</a>
					<ul>
						<?php
							while ($data = mysqli_fetch_array($result_log)) {
								if($data['Category'] == "Log"){
								?>
								<li><a href ="pattern.php?PatternName=<?php echo $data['PatternName']; ?>"><?php echo $data['PatternName']; ?></a></li>
								<?php
								}
							}
						?>						
					</ul>
				</li>
			</ul>                        
		</li>                    
		<li><a href="About.php">About</a></li>
		<li><a href="Link.php">Links</a></li>
		<li><a href="Impact.php">Impact</a></li>
		<li><a href="Documentation.php">Documentation</a></li>
		<li><a href="Contact.php">Contact</a></li>           
	</ul>         
</div>	