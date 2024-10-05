<h1 class="text-center my-4">La taverne des Combattants</h1>
<h3 class="text-center my-4"> <?= $character['name'] ?>, le dernier arrivant !</h3>


<!-- <?php Utilities::showArray($character) ?> -->

<div class="d-flex flex-wrap gap-4 justify-content-center">
    <?php require_once("./views/components/card.php")  ?>
</div>

<div class="d-flex justify-content-center my-5">
    <a href="./personnages/liste">
        <button class="btn btn-dark">Retrouvez tous les Combattants ICI !</button>
    </a>
</div>