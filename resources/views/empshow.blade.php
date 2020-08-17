<!DOCTYPE html>
<html>
<head>

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
<table style="width:100%">
  <thead>
  <tr>
    <th>id</th>
    <th>Name</th>
    <th colspan="1">Position</th>
    <th colspan="1">Email</th>
    <th colspan="1">Phone</th>
  </tr>
</thead>
<tbody>
  @foreach ($result as $value)
  <td>{{$value->id}}</td>
  <td>{{$value->name}}</td>
  <td>{{$value->roll}}</td>
  <td>{{$value->email}}</td>
  <td>{{$value->phone}}</td>
  
  @endforeach
</tbody>
  </table>

</body>
</html>
