<?php $this->view("sportClub/header", $data); ?>

    <div style="margin: auto; max-width: 600px;width: 100%;padding: 2em;padding-bottom: 17%">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">El.paštas</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="El.paštas" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Slaptažodis</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Slaptažodis" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<?php $this->view("sportClub/footers", $data); ?>