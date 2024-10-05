<h1 class="text-center my-4">La taverne des Combattants</h1>
<h3 class="text-center my-4"> Créons un nouveau Combattant</h3>


<form method="POST" action="createCharacter">

    <div class="mb-3">
        <label for="name" class="form-label">Nom du Personnage</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Avatar du Personnage</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Entrez l'image'" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="health" class="form-label">Santé du Personnage</label>
        <input type="number" class="form-control" id="health" name="health" placeholder="Entrez ses PV" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="magic" class="form-label">Magie du Personnage</label>
        <input type="number" class="form-control" id="magic" name="magic" placeholder="Entrez ses PM" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="power" class="form-label">Puissance du Personnage</label>
        <input type="number" class="form-control" id="power" name="power" placeholder="Entrez sa puissance" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="side" class="form-label">Côté de la force</label>
        <select type="text" name="side" id="side" class="form-select">
            <option disabled selected >⏬ Choisissez un côté ⏬</option>
            <?php foreach ($sides as $side): ?>
                <option value="<?= $side['id'] ?>"><?= $side['side'] ?></option>
            <?php endforeach ?>

        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-3 w-100">Créer</button>
</form>