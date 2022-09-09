<html>
<head>
    <title>Hellos/Index</title>
    <style>
        body{font-size:16pt;color:#999;}
        h1{
            font-size :100px;
            text-align:right;
            color:#eee;
            margin:-40px 0px -50px 0px;
        }
    </style>
</head>
<body>
    <h1>Hellos Blade Index</h1>
    <p>{{ $msg }}</p>
    <p>{{ $msg2 }}</p>
    <p>ID={{ $id }}</p>
    <p><?php echo date("Y年n月j日"); ?></p>
</body>
</html>