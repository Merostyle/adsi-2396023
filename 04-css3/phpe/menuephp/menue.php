<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="Css/menu.css" rel="stylesheet" type="text/css" media="all">
</head>

<header>
        <div class="container__header">
            <div class="escudo">
                <img src="Images/escudo.png" alt="Escudo Atanasio Girardot">
            </div>

            <div class="logo">
                <img src="Images/logo.png" alt="Logo Girardot Aprende">
            </div>

            <nav class="container__nav">
                <ul>
                    <li><a href="#"><i class="fa-solid fa-house"></i>TUS PROFESORES</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-newspaper"></i></i>NOTAS</a></li>
                    <li><a href="#"><i class="fa-solid fa-people-line"></i>OFICINA VIRTUAL</a>
                        <ul class="sub-menu">
                            <li><a href="#"><i class="fa-solid fa-book"></i>CERTIFICADOS</a></li>
                            <li><a href="#"><i class="fa-sharp fa-solid fa-puzzle-piece"></i>SOLICITUD RECTORIA</a></li>
                            <li><a href="#"><i class="fa-solid fa-location-dot"></i>SOLICITUD PSICOLOGIA</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-right-to-bracket"></i>CRONOGRAMA</a></li>
                    <li><a href="#"><i class="fa-sharp fa-solid fa-right-to-bracket"></i>INICIO-ESTUDIANTE</a></li>
                </ul>
            </nav>
        </div>
        <div id="Burguer-menu">
            <span></span>
  </div>

           <div id="menu">
            
            <ul>
                <li><a href="#" id="inicio"></a></li>
                <li><a href="#" id="matriculas"></a></li>
                <li><a href="#" id="noticias">Noticias</a></li>
                <li><a href="#" id="quienes somos">Quienes somos</a></li>
            </ul>
           </div>
</header>

    <!-- Main - Cuerpo de la página -->
    <main>
        <div class="separador">
            <img src="Images/banner.svg" alt="Barra de separación">
        </div>
    </main>
    <section>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nam ducimus consequuntur quidem quae aspernatur, non dolores sequi, impedit suscipit odit consequatur maiores reiciendis optio tenetur! Maiores, nesciunt esse? Nihil?</p>
    </section>



    <!-- Pie de página -->

    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="escudo_footer">
                    <img src="Images/escudo.png" alt="Escudo Atanasio Girardot">
                </div>
                <div class="terminos">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora aspernatur voluptatem modi? Minima nobis quasi labore recusandae hic totam tempora deleniti quos voluptates! Magni quia amet repellat possimus quasi labore?</p>
                </div>
            </div>
            <div class="box__footer">
                <h2>Contacto</h2>
                <a href="#">Ubicación</a>
                <a href="#">Correo Electronico</a>
                <a href="#">Número de contacto</a>
                <div class="footer__convenio">
                    <img src="Images/Alcaldia-De-Manizales.png" alt="Alcaldia De Manizales">
                </div>
            </div>

            <div class="box__footer">
                <h2>Convenio Público</h2>
                <a href="#">Secretaria de eduación</a>
                <a href="#">Alcaldia de Manizales</a>
                <a href="#">SENA</a>
                <div class="footer__convenio">
                    <img src="Images/Secretaria.jpg" alt="Alcaldia De Manizales" class="secretaria">
                </div>
            </div>

            <div class="box__footer">
                <h2>Redes Sociales</h2>
                <a href="#"><i class="fa-brands fa-square-facebook"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-youtube"></i>Youtube</a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
                <div class="footer__convenio">
                    <img src="Images/logo.png" alt="Alcaldia De Manizales">
                </div>
            </div>
        </div>
        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados &copy;<b>I.E Atanasio Girardot</b> 2022</p>
        </div>
    </footer>


<script src="Js/main.js"></script>
<script src="/Inicio-Estudiantes/app.js"></script>

<body>
<a href="<?php echo $logoutAction ?>">Desconectar</a>
</body>
</html>