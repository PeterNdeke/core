<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="container">
  <h2>ZCPI List Unverified Users</h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/n</th>
        <th>Firstname</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Date Registered</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($data as $key => $item)
        <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->created_at->toFormattedDateString()}}</td>
       
       
          </tr>
        @endforeach
     
     
     
    </tbody>
  </table>
</div>

</body>
