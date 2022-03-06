<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Form Data</title>
</head>
<body>

<h1>Raw Form Data</h1>
    <?php 

        print_r($_POST)
   
    ?>

<!-- Extract each form item from posted data -->

<h1>Form input values</h1>
<p>Your Name: <?php echo $_POST['visitor_name']?></p>
<p>Password: <?php echo $_POST['password']?></p>
<p>License accepted: <?php echo $_POST['licenseOK']?></p>
<p>Account type: <?php echo $_POST['account_type']?></p>
<p>Options:<?php foreach($_POST['options'] as $options) {echo $options. " ";} ?> </p>
<p>Operating system: <?php echo $_POST['system']?></p>
<p>Remarks: <?php echo $_POST['remarks']?></p>

</body>
</html>