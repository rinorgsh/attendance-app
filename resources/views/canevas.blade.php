<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <header>
                <h3 class="text-center">ESI Attendance</h3>
            </header>
            <nav class="navbar navbar-expand-lg rounded" style="background-color: #3D8EB9;">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/students">Étudiants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/courses">Cours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/lessons">Leçons</a>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
</body>

</html>
