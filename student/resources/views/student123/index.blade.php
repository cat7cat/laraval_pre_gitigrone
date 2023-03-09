<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        td,tr,table {
            border: 1px solid #000;
        }

        .title{
            background-color: #e86;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="title">
        <h1>Student.index</h1>
    </div>
       <a href="{{route('students.create')}}"><h1>create頁面</h1></a>
     <a href="{{route('student.excel')}}"><h1>excel頁面</h1></a>




<div class="title">
    <h1>Student.index Blade</h1>
</div>
<h2>HELLO,{{ $data['name']}}</h2>
<table>
    <tr>
        <td>姓名</td>
        <td>年齡</td>
        <td>電話</td>
        <td>備註</td>
    </tr>
    <tr>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['age'] }}</td>
        <td>{{ $data['tel'] }}</td>
        <td>{{ $data['note'][0] }}</td>
    </tr>
</table>

<?php
// 清掉變數  
// Unset($data); 

//因為同一頁面dd不能呈現兩個變數  所以使用  var_dump 
// var_dump ($dada); //放上面
// dd ($data);


//同時顯示只能這樣寫
dd ([$data , $dada]);
?>

<table>
    <tr>
        <td>姓名</td>
        <td>年齡</td>
        <td>電話</td>
        <td>備註</td>
    </tr>
    <tr>
        <td>{{ $data['name'] }}</td>
        <td>{{ $data['age'] }}</td>
        <td>{{ $data['tel'] }}</td>
        <td>{{ $data['note'][0] }}</td>
    </tr>
</table>

      {{--跳頁 {{route('students.create')}}  --}}
</body>
</html>