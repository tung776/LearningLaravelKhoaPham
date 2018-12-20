<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sơn Cát Tường</title>
    <style>
        #wrapper {
            width: 980px;
            height: auto;
            margin: 0 auto;
        }
        #header {
            width: auto;
            height: 200px;
            background-color: red;
        }
        #content {
            width: auto;
            height: 500px;
            background-color: blue;
        }
        #footer {
            width: auto;
            height: 200px;
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">header</div>
        <div id="content">
            @yield('content')
        </div>
        <div id="footer">
            @yield('footer-content')
        </div>
    </div>
</body>
</html>