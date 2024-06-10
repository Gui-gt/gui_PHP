<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elo SoftWare.com</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Reddit+Mono:wght@200..900&display=swap');
*{
        margin: 0px;
        padding: 0px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    header{
        background-image: url(imagens/pexels-francesco-ungaro-20578601.jpg);
        background-size: cover;
        height: 300px;
        background-repeat: no-repeat;
    }
    header h1{
        position: relative;
        color: white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;s
        top: 500px;
        margin-top:180px;
        left: 20px;
    }
    header nav{
        margin-right: 50px;
        font-size: 1.2em;
        text-align: right;
        padding: 10px;
    
    }
    nav#um{
        position: absolute;
        left: 500px;
        top: 10px;
    }
    header #dois{
        margin-top: 10px;
    }
    header a{
        text-decoration: none;
        color: white;
        margin: 5px;
        padding: 10px;
        font-weight: bold;
    }
    header a:hover{
        background-color: rgba(255, 255, 255, 0.126);
        color: rgb(255, 255, 255);
        border-radius: 20px;
        transition: 0.2s;
        box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.156);
        text-decoration: underline;
    }
    
    main{
        height: 350px;
        width: 85%;
        margin: auto;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.315);
    }
    h1#title{
        position: relative;
        top: -30px;
        margin-left: 400px;
        margin-top: 40px;
        
    }
    footer{
        padding: 50px;
        color: white;
        background-color: black;
        text-align: center;
    }
    .icon{
        border-radius: 15px;
    }
    img{
        margin: auto;
        text-align: center;
        display: block;
        margin-top: 35px;
    }
    input#txtp{
        position: relative;
        top: 15px;
        padding: 10px;
        left: 1305px;
        border: none;
        outline: none;
        border-radius: 10px;
        background-color: aliceblue;
    }
    .icon{
        margin-left: 20px;
        width: 25px;
        background-color: aliceblue;
        display: inline-block;
        padding: 15px;
    }
    .icon:hover{
        box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.444);
        transform: translate(-5px,-5px);
        transition: 0.5s;
    }
    h3{
        margin-top: 10px;
    }
</style>
<body>
    <header>
        <div id="p"><input type="text" name="pesq" id="txtp" placeholder="Search" > <img id="p" width="20px" src="/imagens/lupa.png" alt=""></div>
            
                <nav id="um">
                    <a href="#">Curiosidades</a>
                    <a href="#">Páginas especiais</a><a href="#">Fale conosco</a>
                    <a href="#">Quem somos</a>
                    <a href="#">Contato</a>
                </nav>
        <h1>Exemplo teste</h1>
    </header>
<main>

</main>
    <footer>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur repellat natus nihil minus quidem doloremque suscipit debitis unde eaque! Magni reiciendis cupiditate ipsa magnam. Repellendus, consequuntur eaque. Harum, tempore.</p>

        <nav id="footer">
            <h3>REDES SOCIAIS</h3>
            <a href="https://github.com/Gui-gt" target="_blank"><img class="icon"  src="imagens/icon git.png" alt=""></a>
            <a href="https://www.linkedin.com/in/guilherme-henrique-1a773a263/" target="_blank"><img class="icon"  src="imagens/icon linkedin.png" alt=""></a>
            <a href="https://www.instagram.com/gui_h08/" target="_blank"><img class="icon"  src="/imagens/icon insta.png" alt=""></a>
            <a href="https://www.facebook.com/profile.php?id=100022228692385" target="_blank"><img class="icon"  src="imagens/icon facebook.png" alt=""></a>
        </nav>
    </footer>
</body>
</html>