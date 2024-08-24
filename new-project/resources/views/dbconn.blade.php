<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Learn Blogs DB connection</title>
</head>
<body>
<div>
    <?php
    if (DB::connection()->getPdo()) {
        echo "Successfully connected to DB and DB name is " . DB::connection()->getDatabaseName();
    }
    ?>
</div>
</body>
</html>
