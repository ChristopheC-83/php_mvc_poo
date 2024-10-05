<!-- <?= Utilities::showArray($character) ?> -->


<h1 class="text-center my-4">La taverne des Combattants</h1>
<h3 class="text-center my-4"> Modifions <?= $character['name'] ?></h3>

<form method="POST" action="<?= ROOT ?>personnages/updateCharacter">
    <input type="hidden" name="id" value="<?= $character['id'] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nom du Personnage</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $character['name'] ?>" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Avatar du Personnage</label>
        <input type="text" class="form-control" id="image" name="image" value="<?= $character['image'] ?>" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="health" class="form-label">Santé du Personnage</label>
        <input type="number" class="form-control" id="health" name="health" value="<?= $character['health'] ?>" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="magic" class="form-label">Magie du Personnage</label>
        <input type="number" class="form-control" id="magic" name="magic" value="<?= $character['magic'] ?>" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="power" class="form-label">Puissance du Personnage</label>
        <input type="number" class="form-control" id="power" name="power" value="<?= $character['power'] ?>" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="side" class="form-label">Côté de la force</label>
        <select type="text" name="side" id="side" class="form-select">
            <?php foreach ($sides as $side): ?>
                <option value="<?= $side['id'] ?>"
                    <?= $side['id'] === $character['side_id'] ? "selected" : "" ?>>
                    <?= $side['side'] ?></option>
            <?php endforeach ?>

        </select>
    </div>

    <button type="submit" class="btn btn-primary mt-3 w-100">Modifier</button>
</form>