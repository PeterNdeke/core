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
        <th>Full name</th>
        <th>Phone</th>
        <th>Address</th>
       
        
       
      </tr>
    </thead>
    <tbody>
        
        @foreach ($data as $key => $item)
        <tr>
        <td>{{$key + 1}}</td>

        <td>{{$item->user->name}}</td>
        <td>{{$item->user->phone}}</td>
      
        <td>{{$item->user->profile->address}}</td>
       
       
        
       
       
          </tr>
        @endforeach
     
     
     
    </tbody>
  </table>
</div>

</body>
