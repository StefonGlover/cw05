<?php 

    if(empty($_POST['name']) || empty($_POST['selection']) || empty($_POST['card_number']) || empty($_POST['card_type'])){
        header('Location: try_again.html');

    }
   else{
        $file = 'suckers.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= "${_POST['name']};${_POST['selection']};${_POST['card_number']};${_POST['card_type']}\n";
        // Write the contents back to the file
        file_put_contents($file, $current);
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet">
</head>
<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $_POST['name']?></dd>

			<dt>Section</dt>
			<dd><?php echo $_POST['selection']?></dd>

			<dt>Credit Card</dt>
			<dd><?php echo $_POST['card_number']. " (${_POST['card_type']})"?></dd>
		</dl>

        <p>Here are all the sucks who have submitted here:</p>
  
        <pre><?php echo file_get_contents("suckers.txt");?></pre>
	</body>
</html>