
<!DOCTYPE html>
<html>
<head>
    <title>My PHP App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #eaf2f8;
            padding: 60px;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            display: inline-block;
            box-shadow: 0 4px 10px #aaa;
        }

        h1 {
            color: #2874a6;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to My PHP Application!</h1>

    <?php
        echo "<h2>Hello from OpenShift!</h2>";
        echo "<p>My PHP application is running successfully.</p>";
        echo "<p>Version: 1.0</p>";
        echo "<p>Today's Date: " . date("d-m-Y") . "</p>";
        echo "<p>Current Time: " . date("h:i:s A") . "</p>";
    ?>

    <p>Deployed using GitHub and OpenShift.</p>
</div>

</body>
</html>

