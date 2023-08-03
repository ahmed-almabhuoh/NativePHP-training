<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ORBIT TECH</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset some default styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .title {
            text-align: center;
            font-size: 32px;
            color: #333;
            margin-bottom: 30px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .input-field {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-btn {
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-btn:hover {
            background-color: #2185c5;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">ORBIT TECH</h1>
        <form class="login-form" action="{{route('login.submit')}}" method="POST">
            @csrf
            <input type="text" placeholder="Username" name="username" class="input-field">
            <input type="password" placeholder="Password" name="password" class="input-field">
            <button type="submit" class="login-btn">Log In</button>
        </form>
    </div>
</body>

</html>
