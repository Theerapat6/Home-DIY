<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="head">
            <div class="logo-1">
                <h1 class="head11">Home</h1>
                <h1 class="head22">DIY</h1>            </div> 
            <ul class="nav-link">
                <li><a href="#">Home</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.php">Contact</a></li>
            </ul>
        </div>
    </header>
    <section>
        <div class="sec-1">
            <img src="image/index_bg.jpg" class="bg-img">
            <div class="p-text">
                <h1>Welcome to DIY</h1>
                <h5>Let's Chat</h5>
                <a href="#" id="not_login">DIY NOW</a>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('not_login').onclick = function(){
            alert('ควยๆๆ Error เหี้ยไรนักหนาไอสัส!');
        }
    </script>
</body>
</html>