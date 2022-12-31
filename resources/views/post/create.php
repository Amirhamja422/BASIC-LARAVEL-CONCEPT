<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="<?php echo url('post/store'); ?>" method="post"> -->
<form action="<?php echo route('post.store'); ?>" method="post">
<?php echo csrf_field(); ?>
  <label for="name">First name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="email" name="email"><br><br>
  <input type="submit" value="Submit">
</form> 
    
</body>
</html>