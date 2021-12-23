<?php
include "database.php";
?>
<!DOCTYPE htmml>
<html>

<head>
    <title>KOSMOS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <header id="header">
        <section id="branding">
            <h1><span class="highlight">KOSMOS</span></h1>
        </section>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Pocetna</a></li>
            <li class="dropdown"><a href="#">Solarni sistemi</a>
                <ul class="submenu">
                    <li><a href="#scp">Prikazi</a></li>
                    <li><a href="#scu">Unesi novi</a></li>
                    <li><a href="#sci">Izmeni</a></li>
                    <li><a href="#sco">Obrisi</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Planete</a>
                <ul class="submenu">
                    <li><a href="#sap">Prikazi</a></li>
                    <li><a href="#sau">Unesi novu</a></li>
                    <li><a href="#sao">Obrisi</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <section id="showcase"></section>
    <section id="scp">
        <div class="container">
            <h3>Prikazi sve solarne sisteme</h3>
            <button id="scpb">Prikazi</button>
            <div class="scp" id="tabela_sistemi"></div>


        </div>
    </section>
    <section id="scu">
        <div class="container">
            <h3>Unesi novi solarni sistem</h3>
            <form method="post" action="">
                <ul class="wrapper">
                    <li class="form-row">
                        <label>Naziv:</label></br>
                        <input type="text" name="naziv" required>
                    </li>
                    <li class="form-row">
                        <label>Zvezda:</label></br>
                        <input type="text" name="zvezda" required>
                    </li>
                    <li class="form-row">
                        <label>Otkriven:</label></br>
                        <input type="Date" name="otkriven" required><br>
                    </li>
                    <li class="form-row">
                        </br>
                        <button type="submit" name="unesi" value="Unesi">Unesi</button>
                    </li>
                </ul>
            </form>
        </div>
    </section>
    <section id="sci">
        <div class="container">
            <h3>Izmeni solarni sistem</h3>
            <form method="post" action="">
                <ul class="wrapper">
                    <li class="form-row">
                        <label>ID izmene:</label></br>
                        <input type="text" name="idp" required>
                    </li>
                    <li class="form-row">
                        <label>Naziv:</label></br>
                        <input type="text" name="naziv" required>
                    </li>
                    <li class="form-row">
                        <label>Zvezda:</label></br>
                        <input type="text" name="zvezda" required>
                    </li>
                    <li class="form-row">
                        <label>Otkriven:</label></br>
                        <input type="Date" name="otkriven" required><br>
                    </li>
                    <li class="form-row">
                        </br>
                        <button type="submit" name="izmeni" value="Izmeni">Izmeni</button>
                    </li>
                </ul>
            </form>

        </div>
    </section>
    <section id="sco">
        <div class="container">
            <h3>Obrisi solarni sistem</h3>
            <form method="post" action="">
                <ul class="wrapper">
                    <li class="form-row">
                        <label for="name">ID:</label></br>
                        <input type="text" name="id" required>
                    </li>
                    <li class="form-row">
                        </br>
                        <button type="submit" name="obrisi" value="Obrisi">Obrisi</button>
                    </li>
                </ul>
            </form>


        </div>
    </section>
    <section id="sap">
        <div class="container">
            <h3>Prikazi planete</h3>
            <button id="sapb">Prikazi</button>
            <div class="sap" id="tabela_planete"></div>


        </div>
    </section>
    <section id="sau">
        <div class="container">
            <h3>Unesi novu planetu</h3>
            <form method="post" action="">
                <ul class="wrapper">
                    <li class="form-row">
                        <label for="name">Naziv:</label></br>
                        <input type="text" name="naziv" required>
                    </li>
                    <li class="form-row">
                        <label>Atmosfera:</label></br>
                        <select name="atmosfera" required>
                            <option selected="selected">Izaberi atmosferu</option>
                            <option value="1">Kiseonik</option>
                            <option value="2">Azot</option>
                            <option value="3">Vodonik</option>
                        </select>
                    </li>
                    <li class="form-row">
                        <label>ID solarnog sistema:</label></br>
                        <select name="id4" required>
                            

                        </select>
                    </li>
                    <li class="form-row">
                        <label>Otkrivena:</label></br>
                        <input type="Date" name="otkrivena" required><br>
                    </li>
                    <li class="form-row">
                        </br>
                        <button type="submit" name="unesi" value="Unesi">Unesi</button>
                    </li>
                </ul>
            </form>
        </div>
       
        
    </section>
    <section id="sao">
        <div class="container">
            <h3>Obrisi planetu</h3>
            <form method="post" action="">
                <ul class="wrapper">
                    <li class="form-row">
                        <label>ID:</label>
                        <input type="text" name="id" required>
                    </li>
                    <li class="form-row">
                        </br>
                        <button type="submit" name="obrisia" value="Obrisi">Obrisi</button>
                    </li>
                </ul>
            </form>
            
            
        </div>
    </section>
    <footer>
        <p>KOSMOS, Copyright &copy; 2021</p>
    </footer>


</body>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>