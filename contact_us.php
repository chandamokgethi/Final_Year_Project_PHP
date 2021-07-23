<?php 
require('config/db_config.php');



if(isset($_POST['submit']))
{

    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_number = $_POST['number'];
    $_message = $_POST['message'];

    if ($_name=='')
    {
            echo "<script>alert('Please enter your Names')</script>";
        }
            
        if ($_email=='')
        {
            echo "<script>alert('Please enter your Email-Address')</script>";
        }
        
        if ($_number=='')
        {
            echo "<script>alert('*fill out the field')</script>";
        }
        if ($_message=='')
        {
            echo "<script>alert('*fill out the field')</script>";
    }else
    {
        $query ="insert into messages (name, email, contact_no, message) values 
        ('$_name','$_email','$_number','$_message')";

        if(mysqli_query($conn,$query)){
            echo "success";
        }else{
            echo "failed";
        }
    }



}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <style>
     *{
      margin: 0;
      padding: 0;
      font-family: "montserrat",sans-serif;
  }
.contact-section{
    background-image:url(img/contact.jpg);
      background-size: cover;
      padding: 40px 0;

}
.contact-section h1{
    text-align: center;
    color: white;
}
.border{
    width: 100px;
    height: 10px;
    background: #34495e;
    margin: 40px auto;
}
.contact-form{
    max-width: 600px;
    margin: auto;
    padding: 0 10px;
    overflow: hidden;
}
.contact-form-text{
    display: block;
    width: 100%;
    box-sizing: border-box;
    margin: 16px 0;
    border: 0;
    background: #111;
    padding: 20px 40px;
    outline: none;
    color: #ddd;
    transition: 0.5s;
}
.contact-form-text:focus{
    box-shadow: 0 0 10px 4px #34495e;
}
textarea.contact-form-text{
    resize: none;
    height: 120px;
   
}
.contact-form-btn{
    float: right;
    border: 0;
    background: #34495e;
    color: #fff;
    padding: 12px 50px;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.5s;
}
.contact-form-btn:hover{
    background: #2980b9;
    
}   
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us </title>
    
</head>
<body>
<?php include "includes/navbar.php"; ?>

    <div class="contact-section">

        <br>
        <br>
        <br>
        <br>

        <br>

        <h1>Contact Us</h1>

        <div class="border"></div>
        <form  method="POST" class="contact-form" action="contact_us.php">
            <input type="text" id="name" name="name" class="contact-form-text" placeholder="Your Name">
            <input type="email" id="email" name="email" class="contact-form-text" placeholder="Your Email">
            <input type="text" id="number" name="number" class="contact-form-text" placeholder="Your phone">
            <textarea  id="message" name="message"class="contact-form-text" placeholder="Your Message"></textarea>
            <input type="submit" name="submit" class="contact-form-btn" value="Send">
        </form>

    </div>
    
</body>
</html>