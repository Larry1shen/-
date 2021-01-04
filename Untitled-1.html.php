<!DOCTYPE html>
<html lang>

<head>
    <title>Course Mapping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/homepageCSS.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
    <link rel="stylesheet" type="text/css" href="css/messageBar.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

    <?php
    echo str_repeat(" ",1024);
    for ($i=0;$i<10;$i++) {
        echo $i."<br>";
        ob_flush();
        flush();
        sleep(1);
    }
    ?>
</body>

</html>