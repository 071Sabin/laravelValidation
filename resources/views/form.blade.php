<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Form Page</title>
    <style>
        *{
            color: white;
        }
        body{
            background-color: rgb(18, 105, 0);
            color: white;
        }
        .main{
            width: 350px;
            margin: 200px auto;
        }
        
        form{
            border-radius: 20px;
            flex-direction: row;
            box-shadow: 0 0 10px rgb(0, 196, 55);
            padding: 20px;
        }
        form *{
            width: 100%;
        }
        button{
            margin-top: 20px;
            background-color: rgb(0, 136, 77);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px;
        }
        button:hover{
            background-color: rgb(8, 156, 0);
        }
        input{
            border: none;
            border-bottom: 2px solid black;
            margin-bottom: 15px;
            background: 0%;
            padding: 5px 5px;
        }

        a{
            text-decoration: none; 
        }
        
    </style>
</head>
<body>
    <div class="main">
        <h2>Login Form</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $e)
                    {{ $e }} <br/>
                @endforeach
            </div>
        @endif

        <form action="{{ route('form') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Email</label><br>
            <input type="text" placeholder="Email" name="email"><br>
            <label for="">Password</label><br>
            <input type="password" placeholder="Password" name="password"><br>
            <a href="">Forgot Password?</a><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>