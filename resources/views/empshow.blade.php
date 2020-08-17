<!DOCTYPE html>
<html>
<head>
<tilte></tilte>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>
<table style="width:100%" class="table">
  <thead class="thead-dark">
  <tr>
    <th>id</th>
    <th>Name</th>
    <th colspan="1">Position</th>
    <th colspan="1">Email</th>
    <th colspan="1">Phone</th>
  </tr>
</thead>
 @foreach ($var as $value)
<tbody>
   <td>{{$value->id}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->roll}}</td>
  <td>{{$value->email}}</td>
  <td>{{$value->phone}}</td>
<td><a href="{{route('reg.edit', $value->id)}}" class="btn btn-default btn-edit-post">Edit</a></td>
</tbody>
 @endforeach
  </table>

</body>
</html>
