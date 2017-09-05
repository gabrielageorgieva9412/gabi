<?php

include('config/boot.php'); // statement includes and evaluates the specified file.

 //mysql_query:Send a MySQL query
$result = mysql_query("   
	SELECT * 
	FROM temp_hum
	 ");

$tp_array = array();		//Makes arrays
//mysql_fetch_object(param):Returns an object with properties that correspond to the fetched row and moves the internal data pointer ahead.
while($p = mysql_fetch_object($result)) {
	$tp_array[] = $p;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Raspberry Pi</title>		<!--Defines a title for the document  -->
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /> 			<!--Defines metadata about an HTML document:All meta information goes in the head section-->
																					<!--http-equiv:Provides an HTTP header for the information/value of the content attribute(value:content-type,default-style,refresh)  -->
																					<!--content:Gives the value associated with the http-equiv or name attribute(value:text)  -->
																					<!-- charset:Specifies the character encoding for the HTML document(value:character_set) -->
																					
	<link rel="stylesheet" type="text/css" href="css/default.css">	<!-- Link to an external style sheet -->
     
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>			<!--is used to define a client-side script, such as a JavaScript.  -->
	<script type="text/javascript" src="js/application.js"></script>				<!-- -||-  -->
	<script>setTimeout('window.location.reload();', 30000);</script>
</head>			<!--  -->
<body>			<!--  -->

						<form action="">
				<h2>Време на отчитане: </h2>
					<input type="data" name="data">
					<input type="submit" value="Промени">
						</form>
				
				
						<form  action="grafiks.php"  method="post" enctype="multipart/form-data" id="data">
						<input type="hidden"  name="data1" value="<?=$data1;?>&&<?=$data2;?>">
						
					<h2> Дата: </h2>
					 От:
					<input type="date" name="data1" >
					До:
					
					<input type="date" name="data2">
					<input type="submit" value="Изчертай">
						</form>
              
	<table class='layout'>		<!--tag defines an HTML table.  -->
								<!--class:The class attribute specifies one or more classnames for an element.  -->
		<tr>		<!--element defines a table row  -->
			<td class='panel'>		<!-- element defines a table cell -->
			<h1>Измерени стойности </h1>		<!-- tags are used to define HTML headings. -->
			<table class='grid'>	<!--  -->
				<tr>				<!--element defines a table row  -->
									<!-- tag defines a header cell in an HTML table. -->
					<th>Дата</th>	<!--  -->
					<th>Температура</th>	<!--  -->
					<tr>				<!--  -->
					
						
		
						
				<?php
					//foreach:makes loop
					foreach($tp_array as $p) {	
						
						echo "<tr>
							
							<td>".$p->data."</td>
							<td>".$p->temperature."</td>
							
						
						</tr>";
					}
				?>
				
			</table>		<!--  -->	
			<p>				<!-- tag defines a paragraph.  -->
				<a href='' ></a>	
				<a href='index.php' class='icon refresh_icon'>Refresh</a>			<!--href:pecifies the URL of the page the link goes to  -->
			</p>		<!--  -->
				
		</tr>		<!--  -->
		
	
</body>		<!--  -->
</html>		<!--  -->
