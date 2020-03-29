<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="container">
  <h2>ZCPI Investment List</h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/n</th>
        <th>Firstname</th>
       
        <th>Phone Number</th>
        
      </tr>
    </thead>
    <tbody>
        
        @foreach ($data as $key => $item)
        <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->user->name}}</td>
       
        <td>{{$item->user->phone}}</td>
        
          </tr>
        @endforeach
     
     
     
    </tbody>
  </table>
</div>

</body>
