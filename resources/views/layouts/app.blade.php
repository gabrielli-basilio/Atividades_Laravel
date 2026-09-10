<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Meu Site')</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            background-color: #f3eefc;
            color: #000000;
        }

        nav {
            background-color: #5b21b6;
            padding: 16px 30px;
            display: flex;
            gap: 25px;
            align-items: center;
            margin: 2px 1px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-size: 17px;
            font-weight: bold;
            letter-spacing: 0.5px;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background-color 0.2s;
        }

        nav a:hover {
            background-color: #7c3aed;
        }

        main {
            padding: 30px;
        }

        h1 {
            color: #5b21b6;
            margin-top: 0;
        }

        h2 {
            color: #000000;
            font-size: 20px;
            margin-top: 25px;
            margin-bottom: 8px;
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 6px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 6px;
            box-shadow: 0 5px 7px rgba(0,0,0,0.1);
            padding: 20px;
            display: inline-block;
        }

        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
        }

        form label {
            margin-top: 10px;
            font-weight: bold;
            color: #5b21b6;
        }

        form input {
            padding: 8px;
            margin-top: 4px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-family: inherit;
        }

        form button {
            margin-top: 15px;
            padding: 10px;
            background-color: #5b21b6;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        form button:hover {
            background-color: #7c3aed;
        }

        .btn-criar {
            display: inline-block;
            background-color: #5b21b6;
            color: white;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
            margin: 10px 0;
        }

        .btn-criar:hover {
            background-color: #7c3aed;
        }

        .erros {
            color: #b91c1c;
            background-color: #fee2e2;
            padding: 10px 20px;
            border-radius: 6px;
            max-width: 300px;
        }

    </style>
</head>
<body>

    @include('layouts.nav')

    <main>
        @yield('content')
    </main>

</body>
</html>