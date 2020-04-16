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
        <th>Phone</th>
        <th>Email</th>
        <th>Date Invested</th>
        <th>Maturity Date</th>
        <th>Current ROI</th>
        <th>Status</th>
        <th>Amount Invested</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($data as $key => $item)
        <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->user->name}}</td>
        <td>{{$item->user->phone}}</td>
        <td>{{$item->user->email}}</td>
        <td>{{$item->created_at->toFormattedDateString()}}</td>
        <td>{{$item->user->email}}</td>
        <td>{{$item->due_date}}</td>
        <td>{{$item->withdrawable_amount}}</td>
        @if ($item->status == 0)
        <td>Running</td>
        @else
        <td>Completed</td> 
        @endif
        <td>{{$item->amount}}</td>
          </tr>
        @endforeach
     
     
     
    </tbody>
  </table>
</div>

</body>
