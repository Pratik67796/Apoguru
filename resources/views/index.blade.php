
<!DOCTYPE html>
<html>
<head>
  <title>Laravel 9 Generate PDF File Using DomPDF - Techsolutionstuff</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 15px ">
        <div class="pull-left">
          <h2>{{$title}}</h2>
          <h4>{{$date}}</h4>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="">Download PDF</a>
        </div>
      </div>
    </div><br>
    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</body>
</html>