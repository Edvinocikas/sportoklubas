<?php $this->view("sportClub/header", $data); ?>

    <div style="margin: auto; max-width: 600px;width: 100%;padding: 2em;">

        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Vardas</b></label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Iveskite Vardą">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Pavardė</b></label>
                <input name="surname" type="text" class="form-control" id="exampleInputPassword1"
                       placeholder="Iveskite Pavardę">
            </div>
            <div class="form-group">El.paštas<label for="exampleInputPassword1"></label>
                <input name="email" type="email" class="form-control" id="exampleInputPassword1"
                       placeholder="Iveskite El.paštą">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tel.numerį</label>
                <input name="text" type="text" class="form-control" id="exampleInputPassword1"
                       placeholder="Iveskite tel.nr">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Slaptažodis</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Iveskite Slaptažodį">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Pakartoti slaptažodį</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Pakartoti slaptažodį">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



<?php $this->view("sportClub/footers", $data); ?>