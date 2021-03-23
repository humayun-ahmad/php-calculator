 <!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>
	<head>
		<title>Simple Calculator In PHP | Webdevtrick.com</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px;">

		    <!-- Calculator form by webdevtrick.com -->
		    <form method="post" action="calculator.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">Plus</option>
		            <option value="minus">Minus</option>
		            <option value="multiply">Multiply</option>
		            <option value="divided by">Devide</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    				
	    	<div style="background-color: #2c3e50; height:50px ; width: 40%; margin-top: 20px; color: #fff; text-align: center; padding: 10px; font-weight: 700; font-size: 20px;">
				<p>
					<?php 
						if(isset($_POST['submit'])){

							$number1 = $_POST['number1'];
							$number2 = $_POST['number2'];
							$operation = $_POST['operation'];

							switch ($operation) {
								case 'plus':
									$add = $number1 + $number2;
									echo "The Additon will be {$add}";
									break;
								case 'minus':
									$sub = $number1 - $number2;
									echo "The subtraction will be {$sub}";
									break;
								case 'multiply':
								$mul = $number1 * $number2;
									echo "The Multiplication will be {$mul}";
									break;
								case 'divided by':
								$div = $number1 / $number2;
									echo "The division will be {$div}";
									break;
								
								default:
									echo "something went wrong";
									break;
							}
						}
					 ?>
				</p>
			</div>
		</div>

		
	
	</body>
</html>