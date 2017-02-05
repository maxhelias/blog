<?php $this->assign('title', 'Diplômes'); ?>

<div class="row">
</div>
<div class="row">
    <section id="timeline" class="timeline-outer">
        <div class="container" id="content">
            <div class="row">
                <div class="col s12 m12 l12">
                    <ul class="timeline">
                        <?php foreach ($degrees as $degree): ?>
                            <li class="event" data-date="<?= $degree->date; ?>">
                                <h3><?= $degree->libelle; ?></h3>
                                <h6 class="timeline-place"><?= $degree->place; ?></h6>
                                <?= $degree->description; ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>