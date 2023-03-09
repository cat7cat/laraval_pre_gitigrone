<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>  

        @section('sidebar')
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/f1"><h1>泰山大飯店</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="/f1"><h2>1F</h2></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/f2"><h2>2F</h2></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/f3"><h2>3F</h2></a>
                    </li>    
                </ul>
                </div>
            </div>
            </nav>
        @show
        

        <div class="container">
            @yield('content')
        </div>
</body>
</html>