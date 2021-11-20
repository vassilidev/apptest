<form method="post" action="<?= url() . 'form/createContact.php' ?>">
    <div class="row">
        <div class="col-2">
            <label for="gender">Genre</label>
            <select name="gender" id="gender" class="form-control">
                <option value="mr">Mr</option>
                <option value="mme">Mme</option>
            </select>
        </div>
        <div class="col-5">
            <label for="name">Prénom</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="col-5">
            <label for="surname">Nom</label>
            <input type="text" name="surname" id="surname" class="form-control">
        </div>
    </div>
    <div class="mt-2">
        <button class="btn btn-primary">Créer</button>
    </div>
</form>
