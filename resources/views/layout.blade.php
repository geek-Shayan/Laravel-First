<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-first</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/hi">Hi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/bye">Bye</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/people">People</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/students/show">Show</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/students">Students</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/students/add">Add</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/students/show">Update</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/students/show">Delete</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="/students/preview">Preview</a>
        </li> --}}
    </ul>

    <div class ="Container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html> 
