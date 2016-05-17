 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin Page</title>
 </head>
 <body>
 	<h3>Admin Page</h3>
 	<section>
 		<form action="process_homepage.php" method="post">
 			<input type="text" name="description" />
 			<select name="status">
 				<option value="1">Enable</option>
 				<option value="0">Disable</option>
 			</select>
 			<button type="submit">Submit</button>
 		</form>
 	</section>
 	<section>
 		<form action="process_productpage.php" method="post">
 			<input type="text" name="description" />
 			<select name="status">
 				<option value="1">Enable</option>
 				<option value="0">Disable</option>
 			</select>
 			<button type="submit">Submit</button>
 		</form>
 	</section>
 </body>
 </html>
