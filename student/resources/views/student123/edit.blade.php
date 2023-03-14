<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>修改 Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>        
        <th>name</th>
        <th>age</th>        
      </tr>
    </thead>
    {{-- {{dd($data)}} --}}
    <form action="{{route('students.update',['student' => $data->id])}}" method="post">
      @csrf
      @method('PUT')

          <tbody>
            <tr>
              <td>
                {{$data->id}}
               </td>
              <td>
                    <input type="text" name="name" id="name" value="{{$data->name}}">
              </td>
              <td>
                    <input type="text" name="age" id="age" value="{{$data->age}}">
              </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" class="btn btn-primary btn-block">submit</button>
                </td>
            </tr>
          </tbody>
    </form>
    
  </table>
</div>

</body>
</html>
