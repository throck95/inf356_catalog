<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/mystyles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<nav>
    <a href="https://twitter.com/realDonaldTrump">Twitter</a>
    <a href="https://www.facebook.com/DonaldTrump">Facebook</a>
</nav>
<div>
    @yield("content")
</div>
<footer>
    WebAdmin: Tyler Throckmorton
    @yield("footer")
</footer>
</body>
</html>