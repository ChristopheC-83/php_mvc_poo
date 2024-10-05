<div class="card 
<?= $character['side_name']?>Shadow
" style="width: 18rem;">
    <img src="<?=ROOT?>public/images/personnages/<?= $character['image'] ?>" class="card-img-top"
        alt="<?= $character['name'] ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $character['name'] ?></h5>
        <p class="card-text d-flex justify-content-between"><span><b>Santé :</b></span><span><?= $character['health'] ?>
                PV</span></p>
        <p class="card-text d-flex justify-content-between"><span><b>Magie :</b></span><span><?= $character['magic'] ?>
                PM</span></p>
        <p class="card-text d-flex justify-content-between"><span><b>Puissance
                    :</b></span><span><?= $character['power'] ?> Atk</span></p>
        <div class="d-flex justify-content-between">
            <!-- <a href="#" class="btn btn-primary">Modifier</a> -->

            <form action="<?= ROOT?>personnages/modifyCharacter" method="POST">
                <input type="hidden" value="<?= $character['id'] ?>" name="id">
                <button class="btn btn-primary" type="submit">Modifier</button>
            </form>


            <!-- <a href="#" class="btn btn-danger">Supprimer</a> -->
            <form action="<?=ROOT?>personnages/deleteCharacter" method="POST">
                <input type="hidden" value="<?= $character['id'] ?>" name="id">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </div>
    </div>
</div>