<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../resources/css/app.css">
    <style>
      th,td{
        text-align: center;
      }
    </style>

</head>
<body>

<div class="container mt-3">
  <h2>Students Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>       
  <a href="{{route('students.create')}}" class="btn btn-success mb-3 mt-3 ">單筆新增</a>
  <a href="{{route('student.export')}}" class="btn btn-success mb-3 mt-3 ">匯出EXCEL</a>
  {{-- <a href="{{route('student.import')}}" class="btn btn-success mb-3 mt-3 ">匯入EXCEL</a> 目前功能有問題暫時不匯入 --}}


  {{-- {{dd($data)}} --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>no</th>
        <th>name</th>
        <th>age</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>edit/del</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $itemkey=>$item)
        
        <tr>
            <td>{{$itemkey +1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            
            <td>
                {{-- <a href="/students/1/edit">修改</a> --}}
                {{-- {{dd(route('students.edit', ['student'=>1] ))}} --}}
                
                
                <form action="{{route('students.destroy',['student'=>$item->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    {{-- 編輯 --}}
                    <a class="btn btn-warning" href="{{route('students.edit', ['student'=>$item->id] )}}"><i class="fa-regular fa-pen-to-square"></i>&nbsp;編輯</a>
                    {{-- 刪除 (因為刪除需要放到FROM表單才能送出)--}}
                     <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>&nbsp;刪除</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
  </table>
</div>

</body>
</html>
