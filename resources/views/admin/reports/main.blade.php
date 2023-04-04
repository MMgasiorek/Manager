<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
</head>
<body>
    <h1>Report peroid {{ $start }} to {{ $end }}</h1>
    <p>{{ $date }}</p>
    <h3>General Information</h3>
    <p> Revenue  {{ $total_amount }} zl</p>
    <p> Work Time {{ $total_time }} h</p>
    <p> Number of Visits {{ $visits }} </p>
    <p> Number of Clients {{ $total_clients }}</p>
    <h3>Accessories condition</h3>
    @foreach ($accessories as $accessory)
      <p>{{$accessory->name }} : {{$accessory->amount }}</p>
    @endforeach
</body>
</html>