<?php $this->view("sportClub/header"); ?>

    <div class="container" style="width: 50%;padding-bottom: 69px">
        <form action="action_page.php" method="post">

            <label class="color for="fname">Vardas</label>
            <input type="text" id="fname" name="firstname" placeholder="Tavo vardas..">

            <label class="color for="lname">Pavardė</label>
            <input type="text" id="lname" name="lastname" placeholder="Tavo pavardė..">

            <label class="color for="subject">Tema</label>
            <textarea id="subject" name="subject" placeholder="Rašyti kažką.." style="height:200px"></textarea>

            <button type="submit" value="Submit">submit</button>

        </form>
    </div>


<?php $this->view("sportClub/footers"); ?>