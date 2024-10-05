<h1 class="text-center my-4">La taverne des Combattants</h1>
<h3 class="text-center my-4"> Tous nos Combattants</h3>


<!-- <?php Utilities::showArray($characters) ?> -->


<div class="d-flex flex-wrap gap-4 justify-content-center">
    <?php foreach ($characters as $character) : ?>
        <?php require("./views/components/card.php")  ?>
    <?php endforeach ?>
</div>