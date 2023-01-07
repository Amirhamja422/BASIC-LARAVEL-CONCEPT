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
    <!-- <?php foreach($test as $value){?> -->
        <!-- <?php } ?> -->
      @foreach($test as $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email}}</td>
        <td>
              <a href="{{route('post.show',$value->id)}}">Show Details</a>
              <a href="{{route('post.edit',$value->id) }}">Edit</a> 
              <a href="{{route('post.delete',$value->id)}}">Delete</a> 
        </tr>
      @endforeach
  
</table>
    
</body>
</html>