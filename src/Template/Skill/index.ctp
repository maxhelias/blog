<?php $this->assign('title', 'Compétences'); ?>

<div class="row">
</div>

<div class="row">
    <?php foreach ($skills as $skill): ?>
        <div class="col s12 m6">
            <ul class="collection">
                <li class="collection-item avatar">
                    <img src="img/<?= $skill->logo; ?>" alt="" class="circle">
                    <span class="title"><?= $skill->libelle; ?></span>
                    <div class="progress">
                        <div class="determinate" style="width: <?= $skill->progress; ?>%"></div>
                    </div>
                    <a href="#!" class="secondary-content"><?= $skill->progress; ?>%</a>
                </li>
            </ul>
        </div>
    <?php endforeach ?>
</div>
