<?php $this->view("sportClub/header"); ?>

    <form action="action_page.php">
        <div class="container">
            <h1>Registruotis</h1>
            <p>Norėdami sukurti paskyrą, užpildykite šią formą.</p>
            <hr>

            <label for="email"><b>Vardas</b></label>
            <input type="text" placeholder="Iveskite Vardą" name="name" id="name" required>

            <label for="email"><b>Pavardė</b></label>
            <input type="text" placeholder="Iveskite Pavardę" name="surname" id="surname" required>

            <label for="email"><b>el.paštas</b></label>
            <input type="text" placeholder="Iveskite El.paštą" name="email" id="email" required>

            <label for="email"><b>tel.numeris</b></label>
            <input type="text" placeholder="Iveskite tel.numerį" name="telnumber" id="telnumber" required>

            <label for="psw"><b>Slaptažodis</b></label>
            <input type="password" placeholder="Iveskite Slaptažodį" name="pass" id="pass" required>

            <label for="psw-repeat"><b>Pakartoti Slaptažodi</b></label>
            <input type="password" placeholder="Pakartoti slaptažodį" name="pass-repeat" id="pass-repeat" required>
            <hr>

            <button type="submit" class="registerbtn">Registruotis</button>
        </div>

        <div class="container signin">
            <p>Jau turite paskyrą? <a href="#">Prisijungti</a>.</p>
        </div>
    </form>

<?php $this->view("sportClub/footers"); ?>