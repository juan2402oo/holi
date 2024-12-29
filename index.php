<!DOCTYPE html>
<html lang="es-en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/logo_miradorrar.jpg">
    <link rel="stylesheet" href="Css/style10.css" />
    <title> HOSTAL MIRADOR PISCO </title>
    <link rel="icon" type="image/x-icon" href="icono.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Teachers', sans-serif;
            background-color:white;
        }



        /* Estilo para la barra de navegación */
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background-color: transparent;
            transition: background-color 0.3s ease;
            padding: 20px 20px; /* Aumentar altura de la barra de navegación */
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Espacio entre los elementos */
            flex-wrap: wrap; /* Permite que los elementos se ajusten en la línea siguiente si es necesario */
        }

        .navbar.scrolled {
            background-color: #a08869; /* Color arena */
        }

        .navbar .menu-container {
            display: flex;
            align-items: center;
            transform: translateX(400px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .menu-button {
            cursor: pointer;
            font-size: 24px; /* Reducir tamaño del ícono del menú */
            color: white;
            margin-right: 10px; /* Espacio entre el ícono y el texto */
        }

        .navbar .location {
            font-size: 16px; /* Reducir tamaño del texto de la ubicación */
            color: #fff;
            transform: translateX(400px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .location i {
            margin-right: 10px; /* Espacio entre el ícono y el texto */
            font-size: 20px; /* Reducir tamaño del ícono de ubicación */
        }

        .navbar .reserve-button a {
            background-color: #fff;
            color: #a08869; /* Color arena */
            border: none;
            padding: 10px 20px; /* Reducir tamaño del botón */
            font-size: 16px; /* Reducir tamaño del texto del botón */
            font-weight: bold;
            cursor: pointer;
            border-radius: 0px;
            text-decoration: none;
            transform: translateX(-100px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .language-selector select {
            background: transparent;
            color: white;
            border: none;
            font-size: 16px; /* Reducir tamaño del texto del selector de idioma */
            transform: translateX(-400px); /* Mueve el elemento hacia la izquierda */
        }

        .navbar .menu-container span {
            font-size: 16px; /* Ajustar tamaño del texto del menú */
            color: white;
            margin-right: 20px; /* Espacio entre el texto del menú y el siguiente elemento */
        }

        /* Estilos para el menú desplegable */
        #btn-menu {
            display: none;
        }

        .container-menu {
    position: fixed;
    background: white; /* Fondo blanco medio transparente */
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
    opacity: 0;
    visibility: hidden;
    z-index: 1000;
}


        #btn-menu:checked ~ .container-menu {
            opacity: 1;
            visibility: visible;
        }

        .cont-menu {
            width: 100%;
            background: white;
            height: 100%;
            position: relative;
            display: flex;
            flex-direction: column; /* Cambiar a columna para ajustar las filas */
            padding-top: 50px; /* Espacio superior */
        }

        nav {
            display: flex;
            flex-direction: column; /* Coloca los elementos en columnas */
            align-items: center; /* Centra los elementos horizontalmente */
            width: 100%; /* Asegura que el menú ocupe todo el ancho */
            background: white; /* Fondo del menú */
            border-radius: 8px; /* Bordes redondeados del menú */
            overflow: hidden; /* Oculta el desbordamiento del menú */
        }

        .nav-row {
            width:100%;
            display: flex;
            justify-content: center; /* Centra los elementos horizontalmente en cada fila */
            margin-bottom: 20px; /* Espacio entre las filas */
        }

        .nav-row a {
            display: block;
            text-decoration: none;
            padding: 20px 30px; /* Aumentar el padding para más separación */
            color: #c7c7c7;
            border: 2px solid trasparent; /* Borde transparente por defecto */
            border-radius: 8px; /* Bordes redondeados para forma rectangular */
            transition: all 0.3s ease;
            width: 250px; /* Ajustar el ancho de cada enlace */
            text-align: center; /* Centra el texto dentro de cada enlace */
            position: relative; /* Necesario para el posicionamiento de la imagen */
            margin: 10px 0; /* Añadir margen vertical entre los elementos */
        }

        .nav-row a:hover {
            border: 2px solid #c7c7c7; /* Borde visible en hover */
            background: #1f1f1f; /* Fondo en hover */
            color: #fff; /* Color de texto en hover */
        }


        .nav-row a.habitacionesh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */

}

.nav-row a.habitacionesh:hover {
    background: url('imagenes/imagen1.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */

}

.nav-row a.habitacionesh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen1.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.habitacionesh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}

.nav-row a.galeriah {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black; /* Color de texto blanco */
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    text-align: center; /* Centra el texto dentro de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.galeriah:hover {
    background: url('imagenes/imagen2.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: white; /* Asegura que el texto siga siendo blanco sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}

.nav-row a.galeriah::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen2.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.galeriah:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}



.nav-row a.restauranteh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    text-align: center; /* Centra el texto dentro de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.restauranteh:hover {
    background: url('imagenes/imagen3.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.restauranteh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen3.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.restauranteh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}

.nav-row a.reservash {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    text-align: center; /* Centra el texto dentro de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.reservash:hover {
    background: url('imagenes/imagen4.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.reservash::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen4.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.reservash:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}


.nav-row a.contactoh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.contactoh:hover {
    background: url('imagenes/imagen5.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.contactoh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen5.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.contactoh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}



.nav-row a.eventosh {
    display: block;
    text-decoration: none;
    padding: 120px 120px; /* Aumentar el padding para hacer el cuadro más grande */
    color: black;
    border: 2px solid #0000000d; /* Borde transparente por defecto */
    border-radius: 0px; /* Bordes redondeados para forma rectangular */
    transition: all 0.7s ease;
    width: 24%;
    max-width: 300px; /* Ajustar el ancho de cada enlace */
    position: relative; /* Necesario para el posicionamiento de la imagen */
    margin: 10px 0; /* Añadir margen vertical entre los elementos */
    background: #a0886914; /* Fondo por defecto sin imagen */
    font-size: 18px; /* Tamaño de fuente inicial */
    font-weight: normal; /* Peso de fuente inicial */
    text-shadow: none; /* Sin sombra de texto por defecto */
}

.nav-row a.eventosh:hover {
    background: url('imagenes/imagen6.jpg') no-repeat center center; /* Establecer la imagen de fondo solo en hover */
    background-size: cover; /* Asegura que la imagen cubra el área del enlace */
    color: #fff; /* Asegura que el texto sea visible sobre la imagen de fondo */
    font-size: 20px; /* Tamaño de fuente al hacer hover */
    font-weight: bold; /* Fuente en negrita al hacer hover */
    text-shadow: 1px 1px 0 #a08869, -1px -1px 0 #a08869, 1px -1px 0 #a08869, -1px 1px 0 #a08869; /* Borde beige solo al hacer hover */
}
.nav-row a.eventosh::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('imagenes/imagen6.jpg') no-repeat center center;
    background-size: cover;
    filter: blur(0px); /* Desenfoque inicial */
    transition: filter 0.5s ease; /* Transición suave para el desenfoque */
    z-index: -1;
}

.nav-row a.eventosh:hover::before {
    filter: blur(5px); /* Desenfoque al hacer hover */
}
        .cont-menu label {
            position: absolute;
            right: 20px;
            top: 20px;
            color: #fff;
            cursor: pointer;
            font-size: 24px; /* Tamaño del ícono */
            z-index: 1001; /* Asegúrate de que esté por encima del menú */
        }

        .navbar .menu-button {
            cursor: pointer;
            font-size: 24px; /* Reducir tamaño del ícono del menú */
            color: white;
            margin-right: 10px; /* Espacio entre el ícono y el texto */
        }
        .icon-equis i {
    color: black; /* Color negro para el ícono */
}



/*responsive :C*/

@media screen and (max-width: 1366px) {
    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 15%; 
        height: 150px; 
        padding: 30px 40px; 
        text-align: center; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }
    .nav-row a {
        font-size: 14px; 
        
    }
    .navbar .location {
        transform: translateX(200px); /* Ajustar la posición */
    }
}

@media screen and (max-width: 850px) {
    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 20%; /
        height: 90px; 
        padding: 20px 10px; 
    }

    .nav-row a {
        font-size: 13px; 
    }
}


@media screen and (max-width: 430px) {
    .nav-row {
        display: flex;
        flex-wrap: wrap; 
        justify-content: center; 
    }

    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 48%; 
        margin-bottom: 2%; 
        height: 80px; 
        padding: 15px 10px; 
        text-align: center; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }

    .nav-row a {
        font-size: 12px; 
    }
}
@media screen and (max-width: 390px) {
    .nav-row a.habitacionesh,
    .nav-row a.galeriah,
    .nav-row a.restauranteh,
    .nav-row a.reservash,
    .nav-row a.contactoh,
    .nav-row a.eventosh {
        width: 90%; 
        margin-bottom: 4%; 
        height: 60px; 
        padding: 8px; 
        font-size: 10px; 
    }
}
/*la cosa esa del menu*/
@media screen and (max-width: 1366px) {
    .navbar .menu-container {
        transform: translateX(300px); /* Mover menos a la izquierda */
    }
}

/* Ajustes para pantallas hasta 850px */
@media screen and (max-width: 850px) {
    .menu-container {
        transform: translateX(-100px); /* Mover menos a la izquierda */
    }
}
@media screen and (max-width: 1300px) {
    .navbar .menu-container {
        transform: translateX(200px); /* Mover más a la izquierda */
    }
}
@media screen and (max-width: 920px) {
    .navbar .menu-container {
        transform: translateX(100px); /* Mover más a la izquierda */
    }
}
@media screen and (max-width: 600px) {
    .navbar .menu-container {
        transform: translateX(60px); /* Mover más a la izquierda */
    }
}
/* Ajustes para pantallas hasta 430px */
@media screen and (max-width: 430px) {
    .navbar .menu-container {
        transform: translateX(40px); /* Mover menos a la izquierda */
    }

    .navbar .menu-container button {
        font-size: 20px; /* Reducir el tamaño del ícono */
    }

    .navbar .menu-container span {
        font-size: 12px; /* Reducir el tamaño del texto */
    }
}

/* Ajustes para pantallas hasta 390px */
@media screen and (max-width: 390px) {
    .navbar .menu-container {
        transform: translateX(20px); /* Mover menos a la izquierda */
    }

    .navbar .menu-container button {
        font-size: 18px; /* Reducir aún más el tamaño del ícono */
    }

    .navbar .menu-container span {
        font-size: 10px; /* Reducir aún más el tamaño del texto */
    }
}
/*LOCACIOOOONNNN*/
@media screen and (max-width: 1680px) {
    .navbar .location {
        transform: translateX(380px); 
    }
}
@media screen and (max-width: 1600px) {
    .navbar .location {
        transform: translateX(360px); 
    }
}
@media screen and (max-width: 1440px) {
    .navbar .location {
        transform: translateX(300px); 
    }
}
@media screen and (max-width: 1300px) {
    @media screen and (max-width: 1300px) {
    .navbar .location {
        transform: translateX(200px);
        font-size: 14px;
    }
}
}

@media screen and (max-width: 1366px) {
    .navbar .location {
        transform: translateX(280px); 
    }
}

@media screen and (max-width: 912px) {
    .navbar .location {
        font-size: 14px; 
        transform: translateX(250px); 
    }
}


@media screen and (max-width: 853px) {
    .navbar .location {
        font-size: 14px; 
        transform: translateX(230px); 
    }
    .navbar .location i {
        font-size: 18px; 
    }
}

@media screen and (max-width: 800px) {
    .navbar .location {
        display: none; 
    }
}



/*BOTON DE RESERVAAAARRR*/
@media screen and (max-width: 1366px) {
    .navbar .reserve-button {
        padding: 8px 16px; 
        font-size: 15px; 
        transform: translateX(20px); 
    }
}
@media screen and (max-width: 1280px) {
    .navbar .reserve-button {
        padding: 6px 12px;
        font-size: 14px; 
        transform: translateX(40px); 
    }
}
@media screen and (max-width: 1230px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(50px); 
    }
}
@media screen and (max-width: 1200px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(60px); 
    }
}
@media screen and (max-width: 1180px) {
    .navbar .reserve-button {
        padding: 6px 12px;
        font-size: 14px; 
        transform: translateX(70px); 
    }
}

@media screen and (max-width: 1150px) {
    .navbar .reserve-button {
        padding: 6px 12px;
        font-size: 14px; 
        transform: translateX(80px);
    }
    
}
@media screen and (max-width: 1105px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(90px); 
    }
}
@media screen and (max-width: 1125px) {
    .navbar .reserve-button {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(120px); 
    }
}
@media screen and (max-width: 853px) {
    .navbar .reserve-button a {
        padding: 6px 12px; 
        font-size: 14px; 
        transform: translateX(-20px); 
    }
}
@media screen and (max-width: 500px) {
    .navbar .reserve-button {
        padding: 4px 10px; 
        font-size: 11px; 
        transform: translateX(-40px); */
    }
}

@media screen and (max-width: 430px) {
    .navbar .reserve-button {
        padding: 4px 10px; 
        font-size: 11px; 
        transform: translateX(-80px); */
    }
}

@media screen and (max-width: 390px) {
    .navbar .reserve-button a {
        padding: 3px 8px; 
        font-size: 10px; 
        transform: translateX(-20px); 
    }
}
/*lo de lenguajeeee*/
@media screen and (max-width: 1600px) {
    .navbar .language-selector {
        transform: translateX(60px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1440px) {
    .navbar .language-selector {
        transform: translateX(94px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1366px) {
    .navbar .language-selector {
        transform: translateX(150px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1200px) {
    .navbar .language-selector {
        transform: translateX(230px); 
        font-size: 15px; 
    }
}
@media screen and (max-width: 1280px) {
    .navbar .language-selector {
        transform: translateX(220px); /* Mueve un poco menos a la izquierda */
        font-size: 15px; /* Ajusta el tamaño del texto */
    }
}
@media screen and (max-width: 1152px) {
    .navbar .language-selector {
        transform: translateX(250px); /* Mueve un poco menos a la izquierda */
        font-size: 15px; /* Ajusta el tamaño del texto */
    }
}
@media screen and (max-width: 1024px) {
    .navbar .language-selector {
        transform: translateX(350px); /* Mueve un poco menos a la izquierda */
        font-size: 15px; /* Ajusta el tamaño del texto */
    }
}
/* Ajustes para pantallas hasta 850px */
@media screen and (max-width: 850px) {
    .navbar .language-selector {
        transform: translateX(-200px); /* Mueve aún menos a la izquierda */
        font-size: 13px; /* Ajusta el tamaño del texto */
    }
}

/* Ajustes para pantallas hasta 500px */
@media screen and (max-width: 500px) {
    .navbar .language-selector {
        display: none; 
    }
}

/* Ajustes para pantallas hasta 430px */
@media screen and (max-width: 430px) {
    .language-selector select {
        transform: translateX(0px); /* Ajuste adicional para pantallas más pequeñas */
        font-size: 12px; /* Tamaño más pequeño del texto */
    }
}

/* Ajustes para pantallas hasta 390px */
@media screen and (max-width: 390px) {
    .language-selector select {
        transform: translateX(-100px); /* Mueve el elemento más hacia el centro */
        font-size: 11px; /* Tamaño aún más pequeño del texto */
    }
}
.info-section {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    font-size: 18px;
    color: #777;
    margin: 0 20px;
}

.info-item a {
    text-decoration: none;
    color: #777;
}

.info-item a:hover {
    color: #000; /* Cambia el color al pasar el mouse */
}

.info-divider {
    width: 1px;
    height: 20px;
    background-color: #777;
    margin: 0 20px;
}

.info-item img {
    margin-left: 10px;
    width: 30px;
    height: auto;
}

    </style>
</head>
<body>
    <div class="navbar" id="navbar">
        <div class="menu-container">
            <label for="btn-menu" class="menu-button">
                <i class="fas fa-bars"></i>
            </label>
            <span>MENÚ</span>
        </div>
        <div class="location">
            <i class="fas fa-map-marker-alt"></i> Av. San Martín 267 - Pisco
        </div>
        <div class="reserve-button"><a href="#">Reservar Aquí</a></div>

        <div class="language-selector">
            <select>
                <option value="es">Es</option>
                <option value="en">En</option>
            </select>
        </div>
    </div>

    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <div class="nav-row">
                    <a href="cc.php" class="menu-item habitacionesh">HABITACIONES</a>
                    <a href="galeria.php" class="menu-item galeriah">GALERÍA</a>
                    <a href="restaurante.php" class="menu-item restauranteh">RESTAURANTE</a>
                    </div>

                    <div class="nav-row" >
                    <a href="#" class="menu-item reservash">RESERVAS</a>
                    <a href="contactos.php" class="menu-item contactoh">CONTACTO</a>
                    <a href="index.php" class="menu-item eventosh">INICIO</a>
                    </div>
                    <div class="info-section">
    <div class="info-item">
        <a href="nosotros.php">Sobre Nosotros</a>
    </div>
    <div class="info-divider"></div>
    <div class="info-item">
        <a href="librodereclamaciones.php">Libro de Reclamaciones</a>
        <img src="imagenes/libro.png" alt="Libro de Reclamaciones">
    </div>
</div>
            </nav>

            <label for="btn-menu" class="icon-equis">
                <i class="fas fa-times"></i>
            </label>
        </div>
    </div>
    <script>
        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            if (window.pageYOffset > 0) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        };

        document.getElementById("menuButton").onclick = function() {
            var menuContent = document.getElementById("menuContent");
            menuContent.style.display = menuContent.style.display === "block" ? "none" : "block";
        };
    </script>
</body>
</html>








<?php
include ("navbar.php")
?>


<style>
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Lato, sans-serif;
}
        body {

            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 200vh;
            background-color: white;
}

        .slider-frame {
            width: 100%;
            height: 115vh; /* Ajusta según sea necesario */
            margin: 0 auto;
            overflow: hidden;
            position: relative; /* Necesario para posicionar el texto dentro del contenedor */
}

        .slider-frame ul {
            display: flex;
            padding: 0;
            width: 400%; /* Espacio para todas las imágenes */
            height: 100%;  /* Ajusta la altura del ul al contenedor */
            animation: margin-left 28s infinite alternate ease-in-out; /* Duración de 28 segundos */
        }

        .slider-frame li {
            width: 100%;
            list-style: none;
            position: relative; /* Necesario para el posicionamiento absoluto del texto */
}
        .slider-text {
            position: absolute;
            text-align: center;
            padding: 0 18.5vw; /* Padding basado en el ancho de la pantalla */
            top: 10vh; /* Posiciona el texto relativo a la altura de la pantalla */
            color: aliceblue;
            font-size: 2.5vw; /* Tamaño de fuente relativo al ancho de la pantalla */
}
        .texto1{
            position: absolute;
            text-align: center;
            padding: 0 18.5vw; /* Padding basado en el ancho de la pantalla */
            top: 10vh; /* Posiciona el texto relativo a la altura de la pantalla */
            color: aliceblue;
            font-size: 2.5vw; /* Tamaño de fuente relativo al ancho de la pantalla */
}
        .texto1 p{
            font-family: 'monserrat';
            font-size: 1.5rem; /* Tamaño de fuente para el párrafo */
            line-height: 1.5; /* Altura de línea para mejor legibilidad */
            margin: 280px  0 0; /* Espacio adicional en la parte superior del párrafo */
            text-align: justify; /* Justificar el texto */
            top:55px;
}
        .slider-text h2 {
            font-family: 'roboto';
            font-size: 2rem; /* Tamaño de fuente grande para el título */
            margin-bottom: 0; /* Espaciado inferior */
            margin-top: 200px; /* Espacio adicional en la parte superior */
            position: absolute; /* Posicionamiento absoluto */
            left: 18.5%; /* Espacio desde el borde izquierdo del contenedor */
}
        .texto1 h2 {
            font-family: 'roboto';
            font-size: 2rem; /* Tamaño de fuente grande para el título */
            margin-bottom: 0; /* Espaciado inferior */
            margin-top: 200px; /* Espacio adicional en la parte superior */
            position: absolute; /* Posicionamiento absoluto */
            left: 18.5%; /* Espacio desde el borde izquierdo del contenedor */
}
        .slider-text p {
            font-family: 'monserrat';
            font-size: 1.5rem; /* Tamaño de fuente para el párrafo */
            line-height: 1.5; /* Altura de línea para mejor legibilidad */
            margin: 280px 0 0 0; /* Espacio adicional en la parte superior del párrafo */
            text-align: justify; /* Justificar el texto */
}


        .slider-frame img {
            width: 100%;
            height: 80%;  /* Ajusta la imagen para que llene el contenedor */
            object-fit: cover; /* Mantiene las proporciones de la imagen mientras llena el contenedor */
            display: block;
            filter: brightness(60%); /* Oscurece la imagen */
            transition: filter 0.5s ease-in-out; /* Transición para el efecto de oscurecimiento */
        }
        .slider-frame li:hover img {
            filter: brightness(95%); /* Aumenta el brillo al pasar el mouse */
}
        .slider-text-overlay {
            position: absolute;
            top: 50%; /* Centra verticalmente */
            left: 50%;
            transform: translate(-50%, -50%); /* Centra horizontal y verticalmente */
            color: white;
            font-size: 36px; /* Aumenta el tamaño de la fuente */
            font-weight: bold;
            padding: 20px 40px; /* Ajusta el padding para hacer el contenedor más grande */
            border-radius: 10px; /* Bordes más redondeados */
            z-index: 2;
            text-align: justify;
            max-width: 80%; /* Limita el ancho del texto */
            line-height: 1.4; /* Ajusta el espacio entre líneas */
            background: none; /* Sin fondo de color */
}
        .slider-frame li.active .slider-text-overlay {
            opacity: 1; /* Mostrar el texto para el slide activo */
}
        .slider-frame button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0);
            border: none;
            color: white;
            font-size: 30px;
            padding: 10px;
            cursor: pointer;
            z-index: 1000;
            transition: background-color 0.3s, border-radius 0.3s;
}

        .slider-frame button:hover {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 100%;
            color: black;
}

        .slider-frame .prev0 {
            left: 10px;
            color: white;
}

        .slider-frame .next0 {
            right: 10px;
}


        @keyframes slide {
	        0% {margin-left: 0;}
	        20% {margin-left: 0;}
	
	        25% {margin-left: -100%;}
	        45% {margin-left: -100%;}
	
	        50% {margin-left: -200%;}
	        70% {margin-left: -200%;}
	
	        75% {margin-left: -300%;}
	        100% {margin-left: -300%;}
        }
        @media (max-width: 768px) {
        .slider-frame {
            width: 100%;
            height: auto;
            position: static; /* Cambia la posición a estática en pantallas pequeñas */
            transform: none;
    }

        .slider-frame img {
            width: 100%;
            height: auto;
            object-fit: contain;
    }

        .slider-frame button {
            font-size: 20px;
    }
   }
   @media (max-width: 430px) {
        .slider-frame {
            width: 100%;
            height: 300px;
            position: static; /* Cambia la posición a estática en pantallas pequeñas */
            transform: none;
    }

        .slider-frame img {
            width: 100%;
            height: auto;
            object-fit: contain;
    }

        .slider-frame button {
            font-size: 20px;
    }
   }
    @media (max-width: 768px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 10vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 17vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}
@media (max-width: 690px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 10vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 16vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}
@media (max-width: 590px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 10vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 15vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}
@media (max-width: 511px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 6vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2vw; /* Ajusta el tamaño de la fuente para pantallas más pequeñas */
        margin-top: 11vh; /* Reduce el margen superior en pantallas pequeñas */
        padding: 0 5vw; /* Reduce el padding lateral en pantallas pequeñas */
    }
}

@media (max-width: 480px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
    .texto1 p, .slider-text p {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 11vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
}
@media (max-width: 436px) {
    .texto1 h2, .slider-text h2 {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
    .texto1 p, .slider-text p {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 10vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
}

@media (max-width: 430px){
    .texto1 h2, .slider-text h2 {
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 0.5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }
    .texto1 p, .slider-text p{
        font-size: 2.5vw; /* Ajusta el tamaño de la fuente para pantallas muy pequeñas */
        margin-top: 5vh; /* Reduce más el margen superior */
        padding: 0 2vw; /* Reduce más el padding lateral en pantallas muy pequeñas */
    }

}
  /* BOTONES CARRUSEL*/
  

  @media (max-width: 768px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -40%;
  }
    .slider-frame .next0 {
    right: 10px;
     color: white;
     margin-top: -40%;
}
@media (max-width: 430px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -80%;
  }
  }
  @media (max-width: 430px){
    .slider-frame .next0 {
            right: 10px;
            color: white;
            margin-top: -80%;
}

  }
  }
  @media (max-width: 412px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -80%;
  }
    .slider-frame .next0 {
    right: 10px;
     color: white;
     margin-top: -80%;
}

  }
 
  @media (max-width: 375px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -60%;
  }
    .slider-frame .next0 {
    right: 10px;
    color: white;
    margin-top: -60%;
}

  }
  @media (max-width: 344px){
  .slider-frame .prev0{
    left: 10px;
    color: white;
    margin-top: -100%;
  }
    .slider-frame .next0 {
    right: 10px;
     color: white;
     margin-top: -100%;
}

  }
  
/*responsive de los platos*/



/* Ajustes para pantallas más pequeñas */
@media (max-width: 1024px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 250px;
        height: 250px;
    }
}
@media (max-width: 821px) { /* Ajusta el valor según necesites */

.container1, .container2, .container3, .container4, .container5, 
.container6, .container7, .container8, .container9, .container10 {
    width: 500px;
    height: 500px;
}
}

/* Ajustes para pantallas medianas */
@media (max-width: 768px) { /* Ajusta el valor según necesites */

    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 250px;
        height: 250px;
    }
}

@media (max-width: 738px) { /* Ajusta el valor según necesites */

.container1, .container2, .container3, .container4, .container5, 
.container6, .container7, .container8, .container9, .container10 {
    width: 240px;
    height: 240px;
}
}

@media (max-width: 730px) { /* Ajusta el valor según necesites */

.container1, .container2, .container3, .container4, .container5, 
.container6, .container7, .container8, .container9, .container10 {
    width: 240px;
    height: 240px;
}
}


@media (max-width: 721px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 225px;
        height: 225px;
    }
}

@media (max-width: 686px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 220px;
        height: 220px;
    }
}

@media (max-width: 677px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 210px;
        height: 210px;
    }
}

@media (max-width: 673px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 210px;
        height: 210px;
    }
}

@media (max-width: 658px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 210px;
        height: 210px;
    }
}

@media (max-width: 657px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 205px;
        height: 205px;
    }
}

@media (max-width: 650px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 205px;
        height: 205px;
    }
}

@media (max-width: 646px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 200px;
        height: 200px;
    }
}

@media (max-width: 636px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 199px;
        height: 199px;
    }
}

@media (max-width: 635px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 199px;
        height: 199px;
    }
}

@media (max-width: 634px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 196px;
        height: 196px;
    }
}

@media (max-width: 630px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 195px;
        height: 195px;
    }
}

@media (max-width: 626px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 192px;
        height: 192px;
    }
}

@media (max-width: 625px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 190px;
        height: 190px;
    }
}

@media (max-width: 621px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 190px;
        height: 190px;
    }

}

@media (max-width: 618px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 180px;
        height: 180px;
    }

}

@media (max-width: 597px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 170px;
        height: 170px;
    }

}

@media (max-width: 574px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 158px;
        height: 158px;
    }

}

@media (max-width: 553px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 147px;
        height: 147px;
    }

}

@media (max-width: 531px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 137px;
        height: 137px;
    }

}


@media (max-width: 521px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10 {
        width: 130px;
        height: 130px;
    }
}

/* Ajustes para pantallas pequeñas */
@media (max-width: 498px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 115px;
        height: 115px;
    }
}

/* Ajustes para pantallas pequeñas */
@media (max-width: 480px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 105px;
        height: 105px;
    }
}

@media (max-width: 448px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 100px;
        height: 100px;
    }
}

@media (max-width: 437px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 96px;
        height: 96px;
    }
}

@media (max-width: 429px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 85px;
        height: 85px;
    }
}

@media (max-width: 412px) { /* Ajusta el valor según necesites */
    .container1, .container2, .container3, .container4, .container5, 
    .container6, .container7, .container8, .container9, .container10  {
        width: 96px;
        height: 96px;
    }
}
@media (max-width: 680px){
    .contenedores {
            margin-top: -25%;

        }
}

  /*RESPONSIVE TEXTO DE PLATOS*/

  @media (max-width: 680px){
    h2 {
        font-size: 15px;
        margin: 10px 0;
  }
}

@media (max-width: 555px){
    h2 {
        font-size: 12px;
        margin: 10px 0;
  }
}

@media (max-width: 500px){
    h2 {
        font-size: 11px;
        margin: 10px 0;
  }
}

@media (max-width: 477px){
    h2 {
        font-size: 10px;
        margin: 10px 0;
  }
}

  @media (max-width: 412px){
    h2 {
        font-size: 10px;
        margin: 10px 0;
  }
}
@media (max-width: 430px){
    h2 {
        font-size: 10px;
        margin: 9px 0;
  }
}
    </style>


    </script>
<!-- FIN BARRA DE NAVEGACIÓN -->
</html>
<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- INICIO CODIGO carrusel -->
<div class="slider-frame">
<ul>
<li>
                <img src="imagenes/portada_galeria.png" alt=""></li>
            <li><img src="imagenes/portada_galeria2.png" alt=""></li>
            <li><img src="imagenes/portada_galeria3.png" alt=""></li>
            <li><img src="imagenes/portada_galeria4.png" alt=""></li>
            <li><img src="imagenes/portada_galeria5.png" alt=""></li>
        </ul>
    <button class="prev0" aria-label="Previous Slide">&#10094;</button>
    <button class="next0" aria-label="Next Slide">&#10095;</button>
</div>
<!-- FIN CODIGO carrusel -->
 <script>
    const sliderBox = document.querySelector('.slider-frame ul');
    const slides = document.querySelectorAll('.slider-frame li');
    const prevButton = document.querySelector('.prev0');
    const nextButton = document.querySelector('.next0');
    const textOverlays = document.querySelectorAll('.slider-text-overlay');
    
    let slideIndex = 1; // Empezamos en 1 porque insertaremos un slide clonado al inicio
    const totalSlides = slides.length;
    
    // Clonar el primer y el último slide
    const firstSlide = slides[0].cloneNode(true);
    const lastSlide = slides[slides.length - 1].cloneNode(true);
    
    // Añadir los slides clonados
    sliderBox.appendChild(firstSlide); // Añadimos al final
    sliderBox.insertBefore(lastSlide, slides[0]); // Añadimos al inicio
    
    // Establecer ancho del contenedor para acomodar los slides + clones
    sliderBox.style.width = `${(totalSlides + 2) * 100}%`;
    
    // Posicionar el slider en el primer slide original
    sliderBox.style.marginLeft = `-${slideIndex * 100}%`;
    
    function showSlide(index) {
        sliderBox.style.transition = 'margin-left 0.5s ease-in-out';
        sliderBox.style.marginLeft = `-${index * 100}%`;
    
        // Actualizar la visibilidad del texto
        textOverlays.forEach((text, i) => {
            text.style.opacity = i === index - 1 ? '1' : '0'; // Ajustar visibilidad del texto
        });
    }
    
    nextButton.addEventListener('click', () => {
        slideIndex++;
        showSlide(slideIndex);
        if (slideIndex === totalSlides + 1) {
            setTimeout(() => {
                sliderBox.style.transition = 'none';
                slideIndex = 1;
                sliderBox.style.marginLeft = `-${slideIndex * 100}%`;
            }, 500);
        }
    });
    
    prevButton.addEventListener('click', () => {
        slideIndex--;
        showSlide(slideIndex);
        if (slideIndex === 0) {
            setTimeout(() => {
                sliderBox.style.transition = 'margin-left 1.5s ease-in-out'; 
                slideIndex = totalSlides;
                sliderBox.style.marginLeft = `-${slideIndex * 100}%`;
            }, 500);
        }
    });
    
    // Auto Slide
    setInterval(() => {
        nextButton.click();
    }, 7000);
</script>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style11.css">
    <title>HOSTAL MIRADOR ALBORADA</title>
</head>

<body>
    <header>
        <h1>BIENVENIDO AL <span class="text1">HOSTAL MIRADOR - PISCO</span></h1>
    </header>

    <main>
    <section class="container">
        <img class="primero" src="imagenes/c1.jpg" alt="Imagen del Hostal">
        <div class="text-content">
            <h4>DESCUBRE COMODIDAD Y EXPERIENCIAS INOLVIDABLES</h4>
            <p>¡Bienvenidos a nuestro exclusivo hotel en Pisco! Aquí, donde el lujo y la comodidad se fusionan, te invitamos a relajarte y disfrutar de una estadía inolvidable. Nuestras elegantes habitaciones están diseñadas con cada detalle en mente, combinando estilo sofisticado y calidez para brindarte el máximo confort. Desde vistas panorámicas hasta comodidades modernas, cada espacio está pensado para ti.</p>
        </div>
    </section>
</main>

<hr class="horizontal-line">

<main>
    <section class="container1">
        <img class="primero1" src="imagenes/c2.jpg" alt="Imagen del Hostal">
        <div class="text-content1">
        <h5>NUESTRA <span class="text2"> MISION </span></h5>
            <p>En este Hostal Mirador - Pisco, nos dedicamos a ofrecer una experiencia única de alojamiento y gastronomía, donde la comodidad, la hospitalidad cálida y la excelencia culinaria se encuentran en armonía. Nuestra misión es brindar a cada huésped un servicio personalizado en un entorno que refleja la belleza de Pisco, utilizando ingredientes frescos y locales en nuestra cocina para crear momentos inolvidables.</p>
        </div>
    </section>
</main>


<main>
    <section class="container3">
        <img class="primero2" src="imagenes/c3.jpg" alt="Imagen del Hostal">
        <div class="text-content2">
        <h3>NUESTRA <span class="text3"> VISION </span></h3>
            <p>Ser reconocidos como el destino preferido en la región de Pisco, ofreciendo una combinación inigualable de alojamiento cómodo y gastronomía auténtica. En el Hostal Mirador-Pisco, aspiramos a destacarnos por nuestro compromiso con la calidad, la atención al detalle y el turismo sostenible, posicionándonos como un referente tanto para viajeros como para amantes de la buena cocina.</p>
        </div>
    </section>
</main>

<hr class="horizontal-line">

<div class="container4">
    <h2>NUESTROS VALORES</h2>
    <div class="valores-container">
        <div class="valores-lista">
            <ul>
                <li onclick="mostrarMensaje('Compromiso', 'Nos comprometemos a cumplir con nuestros objetivos.')">Compromiso</li>
                <li onclick="mostrarMensaje('Trabajo en Equipo', 'Promovemos la colaboración en todas nuestras actividades.')">Trabajo en Equipo</li>
                <li onclick="mostrarMensaje('Sencillez', 'Fomentamos la humildad y simplicidad en nuestras acciones.')">Sencillez</li>
                <li onclick="mostrarMensaje('Honestidad', 'Actuamos con transparencia y ética en todo momento.')">Honestidad</li>
                <li onclick="mostrarMensaje('Servicio Personalizado', 'Ofrecemos atención única para cada cliente.')">Servicio Personalizado</li>
                <li onclick="mostrarMensaje('Hospitalidad', 'Hacemos que todos se sientan bienvenidos.')">Hospitalidad</li>
            </ul>
        </div>
        <div class="mensaje" id="mensaje">
            <h2 id="titulo">Selecciona un valor para más información</h2>
            <p id="descripcion"></p>
        </div>
    </div>
</div>

<script>
    function mostrarMensaje(titulo, descripcion) {
        const mensajeElemento = document.getElementById("mensaje");
        const tituloElemento = document.getElementById("titulo");
        const descripcionElemento = document.getElementById("descripcion");

        if (mensajeElemento && tituloElemento && descripcionElemento) {
            mensajeElemento.style.display = "block"; // Hacer visible el contenedor
            tituloElemento.textContent = titulo;
            descripcionElemento.textContent = descripcion;
        } else {
            console.error("No se encontraron los elementos para mostrar el mensaje.");
        }
    }
</script>

    <h2 class="preguntas">PREGUNTAS FRECUENTES</h2>
    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Cuáles son los horarios de check-in y check-out?</div>
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    El check-in es a partir de las 2:00 p.m., y el check-out debe realizarse antes de las 12:00 p.m. Si
                    necesitas horarios especiales, por favor contáctanos y trataremos de acomodarte según
                    disponibilidad.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿El restaurante está abierto al público en general o solo a los huéspedes del
                        hostal?</div>
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    Nuestro restaurante está abierto tanto para los huéspedes del hostal como para el público en general.
                    Ofrecemos un menú variado con platos locales.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Aceptan mascotas?</div>
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    Lamentablemente, no aceptamos mascotas en el hostal por el momento.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Cuál es el horario del restaurante?</div>
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    El restaurante está abierto todos los días de 8:00 a.m. a 10:00 p.m. Sirviendo desayunos, almuerzos y
                    cenas. También contamos con servicio a la habitación para los huéspedes.
                </p>
            </div>
        </div>

        <div class="accordion-item">
            <button class="accordion-trigger">
                <div class="flex">
                    <div class="aaa">¿Cómo puedo hacer una reserva?</div>
                </div>
            </button>
            <div class="accordion-content">
                <p>
                    Puedes hacer tu reserva directamente a través de nuestro sitio web, por teléfono o enviándonos un
                    correo electrónico. Te recomendamos reservar con antelación para asegurar disponibilidad.
                </p>
            </div>
        </div>
    </div>
    <Script>
        // JavaScript para el comportamiento del acordeón
document.querySelectorAll('.accordion-trigger').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.closest('.accordion-item');
        const content = item.querySelector('.accordion-content');
        
        // Alterna la visibilidad del contenido
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
        
        // Añade o quita la clase "active" para la animación
        item.classList.toggle('active');
    });
});
</Script>
</body>
</html>
<?php
include("footer.php")
    ?>
