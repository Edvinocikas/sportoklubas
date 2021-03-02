<?php $this->view("sportClub/header"); ?>

    <div class="container">
        <form action="action_page.php">

            <label for="fname">Vardas</label>
            <input type="text" id="fname" name="firstname" placeholder="Tavo vardas..">

            <label for="lname">Pavardė</label>
            <input type="text" id="lname" name="lastname" placeholder="Tavo pavardė..">

            <label for="subject">Tema</label>
            <textarea id="subject" name="subject" placeholder="Rašyti kažką.." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
    </div>


<?php $this->view("sportClub/footers"); ?>