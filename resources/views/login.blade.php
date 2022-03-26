<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("https://wallpaperaccess.com/full/680087.jpg");
            background-repeat: no-repeat;
            background-size: 2300px 1100px;
        }
        #title{
            color:#DA1212;
            font-size: 50px;
            font-weight: bold;
            font-family:algerian;
        }
        #main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        #form{
            border-radius: 20px;
            padding: 30px 80px;
            padding-bottom: 80px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #EEEBDD;
        }
    </style>
</head>
<body>
    <div id="main">
        <h1 id="title">THE SHOE STORE</h1>
        <div id="form">
            <h4>Customer Sign-in</h4>
            <form action="{{url('/process_login')}}" method="POST">
            @csrf
                <input type="text" name="uname" placeholder="Username"><br><br>
                <input type="text" name="upass" placeholder="Enter Password"><br><br>
                <input style="margin-left: 10px;  margin-top: 30px; width: 150px; 
                background: #344CB7; height: 40px" type="submit" name="save" value="Login">
            </form>
        </div>
    </div>
</body>
</html>