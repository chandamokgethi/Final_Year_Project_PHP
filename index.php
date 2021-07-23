<!DOCTYPE html>
<html lang="en">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            text-align: center;
        }
        .wrapper{
            width: 1170px;
            margin: 0 auto;
        }
        header{
            height: 100px;
            background: #262626;
            width: 100%;
            z-index: 12;
            position: fixed;
        }
        .logo{
            width: 30%;
            float: left;
            line-height: 100px;
            
        }
        .logo a{
            text-decoration: none;
            font-size: 30px;
            font-family: bignoodletitling;
            color: #fff;
            letter-spacing: 5px;
            margin: 0 10px;
        }
        nav{
            float: right;
            line-height: 100px;
        }
        nav a{
            text-decoration: none;
            font-family: bignoodletitling;
            letter-spacing: 4px;
            font-size: 20px;
            margin: 0 10px;
            color: #fff;
        }
        nav a:hover{
            background: red;
             border-radius: 2px;
        }
        .banner-area{
            width: 100%;
            height: 500px;
            position: fixed;
            top: 100px;
            background-image: url(img/events1.jpg);
            background-size: cover;
            background-position: center center;
        }
        .banner-area h2{
            padding-top: 8%;
            font-size: 70px;
            font-family: poppings;
            text-transform: uppercase;
            color: #fff;
        }
        .content-area{
            width: 120%;
            position: relative;
            top: 450px;
            background: #ddd;
            height: 1500px;
        }
        .content-area h2{
            font-family: bignoodletitling;
            letter-spacing: 4px;
            padding-top: 30px;
            font-size: 40px;
            margin: 0;
        }
        .content-area p{
            padding: 2% 0;
            font-family: merienda;
            line-height: 30px;
        }
        input[type=submit] {
  width: 100%;
  background-color: #063146;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type="submit"]:hover{
    cursor: pointer;
    background: #4CAF50;
    color: #000;
}
        </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
   
</head>
<body>
    <div class="box-area">
        <header>
        <div class="wrapper">

        
        
        </div>
        </header>
        <div class="banner-area">
            <h2>Event Management System</h2>
        </div>
        <div class="content-area">
            <div class="wrapper">
                <h2>WELCOME TO THE FUN OLYMPICS GAMES</h2>
                <form method="POST"  action="home.php"> 
                <input href="home.php" type="submit" name="submit" value="WELCOME">
                </form>
            </div>
            

        </div>
    </div>
    
</body>
</html>