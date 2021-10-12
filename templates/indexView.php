<?php foreach ($animals as $value) : ?>
    <div class="col">
        <div class='card' style='width: 18rem;'>
            <img src='https://fakeimg.pl/286x180/?text=  <?= $value->getNom() ?>  ' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'><?= $value->getNom() ?></h5>
                <p class='card-text'> <?= $value->getDescription() ?></p>
                <?php echo '<a class="btn btn-primary" href="../templates/oneAnimal.php?id=' . $value->getId() . '?nom=' . $_SESSION['nom'] = $value->getNom() . '">Plus de détails sur cet animal</a>'; ?>
            </div>
        </div>
    </div>
<?php endforeach; ?>