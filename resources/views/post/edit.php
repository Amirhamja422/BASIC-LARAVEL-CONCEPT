<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo url('post/update',$post->id);?>" method="post">
<?php echo csrf_field(); ?>
<input hidden  type="text"  name="_method" value="PUT"><br>

  <label for="name">First name:</label><br>
  <input type="text" id="name" name="name" value="<?php echo  $post->name;?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="email" name="email" value="<?php  echo $post->email?>"><br><br>
  <button>submit</button>
</form> 
    
</body>
</html>