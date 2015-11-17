<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/mystyles.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    @yield("header")
</head>
<body>
<div>
    <br />
    @yield("content")
</div>
<footer>
    <em>WebAdmin</em>: Tyler Throckmorton<br />
    For details on the structure of this web page, contact the admin <a href="mailto:tyler.throckmorton@msj.edu">here</a>.<br />
    @yield("footer")
</footer>
</body>
</html>