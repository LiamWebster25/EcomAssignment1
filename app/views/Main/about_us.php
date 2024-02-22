<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>

<body>
    <div>
        <nav>
            <ul>
                <li><a href="index">Landing Page</a></li>
                <li><a href="about_us">About Us</a></li>
                <li><a href="Contact/index">Contact Us</a></li>
                <li><a href="#">See the messages we get</a></li>
            </ul>
        </nav>
    </div>
    <div>
        <h1>About Us</h1>
        <img src="/resources/image.jpeg" alt="Selfie image" style="width: 300px; height: 500px;">
        <figure>Sterben and Liam love chicken</figure>
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

    figure {
        font-size: 1.2em;
    }

    img {
        border: solid black 2px;
        transition: transform 0.3s ease-in-out;
    }

    img:hover {
        transform: scale(1.03);
        cursor: pointer;
    }
</style>