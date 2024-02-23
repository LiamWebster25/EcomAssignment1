<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="views/style.css">
</head>

<body>
    <div>
        <nav>
            <ul>
                <li><a href="../Main/index">Landing Page</a></li>
                <li><a href="../Main/about_us">About Us</a></li>
                <li><a href="index">Contact Us</a></li>
                <li><a href="read">See the messages we get</a></li>
                </a>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Want to reach us? Write your email information and message in the following form and then submit.</p>
        <form method="post">
            <div class="form-group">
                <label for="input1">Email: </label>
                <input id="input1" type="text">
            </div>
            <div class="form-group">
                <label for="input2">Message: </label>
                <textarea id="input2" name="multiLineTextInput" rows="4"></textarea>
            </div>
            <input type="submit" value="Send!">
        </form>
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

    form {
        display: flex;
        flex-direction: column;
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    textarea {
        width: calc(100% - 20px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>