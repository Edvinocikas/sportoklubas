<?php $this->view("sportClub/header"); ?>

    <form action="action_page.php" method="post">

        <div class="container">
            <label for="uname"><b>El.paštas</b></label>
            <input type="text" placeholder="Iveskite El.paštą" name="uname" required>

            <label for="psw"><b>Slaptažodis</b></label>
            <input type="password" placeholder="iveskite slaptažodį" name="psw" required>

            <button type="submit">Prisijungti</button>
        </div>

    </form>

<?php $this->view("sportClub/footers"); ?>