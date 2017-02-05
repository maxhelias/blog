<?php $this->assign('title', 'Expériences'); ?>

<div class="row">
</div>
<div class="row">
    <section id="timeline" class="timeline-outer">
        <div class="container" id="content">
            <div class="row">
                <div class="col s12 m12 l12">
                    <ul class="timeline">
                        <?php foreach ($experiences as $experience): ?>
                            <li class="event" data-date="<?= $experience->date; ?>">
                                <h3><?= $experience->libelle; ?></h3>
                                <h6 class="timeline-place"><?= $experience->place; ?></h6>
                                <?= $experience->description; ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>