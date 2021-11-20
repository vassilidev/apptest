<?php

$jobs = [
    'writer' => 'Scénariste',
    'director' => 'Réalisateur',
    'cast' => 'Casting',
    'producer' => 'Producteur',
    'distribution_co' => 'Société de distribution',
    'sales_co' => 'Société de ventes',
];

?>

<form method="post" action="<?= url() . 'form/createFilm.php' ?>">
    <div class="row">
        <div class="col">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="col">
            <label for="year">Année</label>
            <input type="number" step="1" min="1885" max="3000" name="year" id="year" value="<?= date('Y') ?>"
                   class="form-control">
        </div>
    </div>
    <hr>
    <h3>Contacts</h3>
    <?php foreach ($jobs as $key => $text) { ?>
        <div class="mt-2">
            <label for="<?= $key ?>"><?= $text ?></label>
            <select name="contacts[<?= $key ?>][]" id="<?= $key ?>" class="form-control" multiple></select>
        </div>
    <?php } ?>
    <hr>
    <div class="mt-2">
        <button class="btn btn-primary">Créer</button>
    </div>
</form>

<script>
    $.getJSON("<?= url() . '/ajax/getAllContacts.php' ?>", function (data) {
        $.each(data, function (key, val) {
            $('select').append(new Option(val['text'], val['id']))
        })
    });
</script>
