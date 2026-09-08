<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu Site')</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 20px;
            color: #333;
        }

        h1 {
            color: #6a0dad;
        }

        a {
            color: #6a0dad;
        }

        nav a {
            margin-right: 15px;
        }
    </style>
</head>
<body>

    @yield('content')

</body>
</html>