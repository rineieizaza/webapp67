<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVD Movie Store</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-image: url(2a.jpg);
    background-size: cover; /* ขยายพื้นหลังให้เต็มพื้นที่ */
    background-position: center; /* จัดตำแหน่งพื้นหลังให้ตรงกลาง */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

        h1 {
            font-size: 4em;
            color: #f4f4f4;
            padding: 20px 40px;
            background-color:pink;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        nav {
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            display: inline-block;
            margin: 0 15px;
        }
        ul li a {
            text-decoration: none;
            font-size: 1.5em;
            color: #000;
            padding: 10px 20px;
            border-radius: 10px;
            background-color: palevioletred;
            transition: background-color 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        ul li a:hover {
            background-color: plum;
        }
    </style>
</head>
<body>
    <h1>DVD Movie Store</h1>
    <nav>
        <ul>
            <li><a href="mainmember.php">Member</a></li>
            <li><a href="mainactor.php">Actor</a></li>
            <li><a href="mainmovie.php">Movie</a></li>
        </ul>
    </nav>

    
</body>
</html>
