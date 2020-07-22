<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="container">
  <h2>Pending Withdraw Request List</h2>
             
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S/n</th>
        
        <th>Investor Username</th>
        
        <th>Amount Requested</th>
        <th>Amount Charged</th>
        <th>Net Amount</th>
        <th>New/Rollover Investment</th>
        <th>Investment Status</th>
        <th>Date Invested</th>
        <th>Plan Invested On</th>
        <th>Maturity Date</th>
        <th>Current ROI</th>
        <th>Amount Invested</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($data as $key => $item)
        <tr>
        <td>{{$key + 1}}</td>
      
        <td>{{$item->user->username}}</td>
      
        <td>{{$item->amount}}</td>
        <td>{{$item->charge}}</td>
        <td>{{$item->net_amount}}</td>
         <td> @if ($item->investment->rollover == null)
            New Investment
        @else
            Rollover Investment
        @endif</td>
        <td> @if ($item->investment->status == 0)
          Running
        @elseif($item->investment->status == 1)
           Completed
        @endif</td>
       
        <td>{{$item->investment->created_at->toFormattedDateString()}}</td>
        <td>{{$item->investment->plan->name}}</td>
        <td>{{$item->investment->due_date}}</td>
        <td>{{$item->investment->withdrawable_amount}}</td>
       
        <td>{{$item->investment->amount}}</td>
          </tr>
        @endforeach
     
     
     
    </tbody>
  </table>
</div>

</body>
