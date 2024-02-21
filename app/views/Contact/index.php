<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <div>
        <nav>
            <ul>
                <a href="#">
                    <li>Landing Page</li>
                </a>
                <a href="#">
                    <li>About Us</li>
                </a>
                <a href="index">
                    <li>Contact Us</li>
                </a>
                <a href="read">
                    <li>See the messages we get</li>
                </a>
            </ul>
        </nav>
    </div>
    <div>
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
    body {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    nav {
        margin-top: 20%;
        padding-right: 10%;
    }

    form {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
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