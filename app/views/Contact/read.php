<html>

<head>
    <title>
        Contact - Messages Sent
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                <th>message</th>
                <th>IP</th>
            </tr>

            <?php
            foreach ($data as $index => $message) {
                echo "<tr><td>$message->email</td><td>$message->message</td><td>$message->IP</td></tr>";
            }
            ?>
        </table>
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

    table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    font-family: 'Arial', sans-serif;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th {
    background-color: #5B63B7;
    color: white;
    text-align: left;
    padding: 10px;
}

td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}
</style>