<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<title>Test</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        width: 600px;
    }
    .banner {
        width: 100%;
        height: 100vh;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .banner video {
        position: absolute;
        top: 0;
        left: 0;
        object-fit : cover;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }
    .banner .content {
        position: relative;
        z-index: 1;
        max-width: 1000px;
        margin: 0 auto;
    }



</style>
</head>
<body>
    <div class="banner">
        <video autoplay muted loop>
            <source src="./Diving.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>Full Screen</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Iusto ad nulla dolor voluptatem veniam pariatur labore iste enim laborum dignissimos quas expedita, obcaecati consequuntur fugiat dolorem vel, odio, earum nam.
            </p>
        </div>
    </div>

</body>
</html>