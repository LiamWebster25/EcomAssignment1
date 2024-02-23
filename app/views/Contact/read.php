<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - messages sent</title>
</head>

<body>
    <div>
        <nav>
            <ul>
                <li><a href="../Main/index">Landing Page</a></li>
                <li><a href="../Main/about_us">About Us</a></li>
                <li><a href="index">Contact Us</a></li>
                <li><a href="read">See the messages we get</a></li>
            </ul>
        </nav>
    </div>
    <div>
        <h1>Contact Us - messages sent</h1>
        <table>
            <tr>
                <th>email</th>
                <th>name</th>
                <th>IP</th>
            </tr>

            <?php
            foreach ($data as $index => $message) {
                echo "<tr><td>$message->email</td><td>$message->name</td><td>$message->ip</td></tr>";
            }
            ?>
    </div>
</body>

</html>

<style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    body {
        text-align: center;
        margin: 0;
        height: 100vh;
        width: 100%;
        overflow: hidden;
        background: linear-gradient(to bottom, #CBCCFF, #9296F0)
    }

    nav ul {
        list-style-type: none;
        padding: 20px;
        margin: 0;
        background-color: black;
    }

    nav {
        text-align: center;
        width: 100%;
    }

    nav ul li {
        display: inline;
        padding-left: 30px;
        padding-right: 30px;
    }

    a {
        color: #5B63B7;
        text-decoration: none;
    }

    a:hover {
        color: #5b63b788;
    }
</style>