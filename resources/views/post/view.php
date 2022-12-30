<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
<body>
<table class="table table-dark">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
  </tr>
    <?php foreach($test as $value){?>
    <tr>
    <td><?php echo $value->name; ?></td>
    <td><?php echo $value->email; ?></td>
    <td>
      <a href="<?php echo url('post/show',$value->id); ?>">Show Details</a>
      <a href="<?php echo url('post/edit',$value->id); ?>">Edit</a> 
      || delet</td>
    </tr>
    <?php } ?>
</table>
    
</body>
</html>