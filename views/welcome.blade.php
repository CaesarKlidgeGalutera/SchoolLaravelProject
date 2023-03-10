<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo1_Galutera</title>     

        <style>
      body{
   margin:0;
   font-family: Tahoma;
   color: white;
   font-size: 10pt;
   line-height: 1.3;
   background-color: #000000; 
}
h1, h3{
    text-shadow: 2px 2px rgba(0,0,0,0.5);
    font-family: Segoe UI;
    font-size: 1.55rem;
}

#logo{
    background-image:url(https://609528.smushcdn.com/606234/wp-content/uploads/2020/01/National-Geographic-logo.jpg?lossy=1&strip=1&webp=1);
    background-size: contain;
    background-repeat:no-repeat; 
    background-color: black;
    }
#righthead{
    border-left: 2px solid #FFFFFF;
    background-image: url(https://images.unsplash.com/photo-1524334228333-0f6db392f8a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGFyayUyMHNwYWNlfGVufDB8fDB8fA%3D%3D&w=1000&q=80);
    background-size: cover;
    background-position: 20%;
}
.container{
    display:flex;
    flex-wrap: wrap;
}
.flexcontent, .article, .video, .images{
    display: inline-flex;
    flex:auto;
    padding: 40px;
    transition: ease .3s;
}
.article{
    height:200px; padding: 50px;
    flex: 15%;
}
/*article hover*/
#article1:hover{
    opacity:0.9;
    transform: translateY(-10px);
}
#article2:hover{
    opacity:0.9;
    transform: translateY(-10px);
}
#article3:hover{
    opacity:0.9;
    transform: translateY(-10px);
}
/*article images*/
#article1{
    background-image: url(https://images.unsplash.com/photo-1505567745926-ba89000d255a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80);
    background-size: cover;
    background-position: 80%;
    opacity: 0.3;
}
#article2{
    background-image: url(https://images.unsplash.com/photo-1558216629-a2f7fe856792?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80);
    background-size: cover;
    background-position: 90%;
    opacity: 0.3;
}
#article3{
    background-image: url(https://images.unsplash.com/photo-1519292675981-997f3efa2da1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
    background-size: cover;
    background-position: 100%;
    opacity: 0.3;
}

.video{
    background-color: #FFCE00;
    float: none;
    padding: 0;
    max-width: 100%;
    height: 500px;
}
.images{
    height: 200px;
}
/*images different*/
#img1{
    background-image: url(https://images.unsplash.com/photo-1504608524841-42fe6f032b4b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80);
	background-size: cover; 
}
#img2{
	background-image: url(https://images.unsplash.com/photo-1486825586573-7131f7991bdd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80);
	background-size: cover; background-position:20%;
}
#img3{
	background-image: url(https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
	background-size: cover; background-position: 80%;
}
#img4{
	background-image: url(https://images.unsplash.com/photo-1529788295308-1eace6f67388?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80);
	background-size: cover; 
}
        </style>
    </head>
    <body>


<div class="container">
    <div class="flexcontent" id="logo"></div>
    <div class="flexcontent" id="righthead">'

    </div>
</div>

<div class="container">
    <div class="video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ymarrXoi0ZM?playlist=ymarrXoi0ZM&loop=1;rel=0&autoplay=1&mute=1&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write;" allowfullscreen></iframe>
    </div>
</div>

<div class="container">
    <div class="article" id="article1">
        <h1>'Forest Gardens' show how Native land stewardship can outdo nature</h1>
    </div>
    <div class="article" id="article2">
        <h1>A new app aims to help save critically endangered sea turtles</h1>
    </div>
    <div class="article" id="article3">
        <h1>Can China's coal capital transform itself into a solar mecca?</h1>
    </div>
</div>

<div class="container">
    <div class="images" id="img1"></div>
    <div class="images" id="img2"></div>
    <div class="images" id="img3"></div>
    <div class="images" id="img4"></div>
</div>


</body>
</html>
