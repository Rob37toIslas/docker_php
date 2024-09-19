<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false; 
} 
else {
    echo "<h1>¿Qué es Docker?</h1>";
    echo "<p>Docker es una plataforma que permite a los desarrolladores automatizar la implementación de aplicaciones en contenedores. Estos contenedores incluyen todo lo necesario para ejecutar la aplicación de forma aislada, asegurando que funcione de la misma manera en cualquier entorno.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker y PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: #3d9cbe;
            font-size: 3rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            color: #555;
        }

        img {
            width: 200px;
            height: auto;
            margin: 20px auto;
            display: block;
            transition: transform 0.3s ease;
        }

        img:hover {
            transform: scale(1.1);
        }

        form {
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #3d9cbe;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #287f99;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            p {
                font-size: 1rem;
            }

            img {
                width: 150px;
            }

            input[type="submit"] {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <img src='./img/images.jpeg' alt='Imagen de Docker' class='img'>
    
    <form action="redirigir.php" method="POST">
        <input type="submit" value='Press me'/>
    </form>
</body>
</html>
