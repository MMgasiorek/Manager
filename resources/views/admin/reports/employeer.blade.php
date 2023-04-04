<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
</head>
<body>
    <h1>Report peroid {{ $start }} to {{ $end }}</h1>
    <p>{{ $date }}</p>
    <h3>Employeer</h3>
      <p>{{$employeer->name }}</p>
      <p>{{$employeer->surname }}</p>
    <h3>General Information</h3>
    <p> Amount earned  {{ $total_money }} zl</p>
    <p> Work time {{ $total_time }} h</p>
</body>
</html>