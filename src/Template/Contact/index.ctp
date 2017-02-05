<?php
    $this->assign('title', 'Me contacter');

    $this->Form->templates([
        'inputContainer' => '<div class="{{class}}"><i class="material-icons prefix">{{glyphicon}}</i>{{content}}</div>'
    ]);
?>

<div class="row">
</div>
<div class="row">
    <?php echo $this->Flash->render(); ?>
</div>
<div class="row">
    <div class="col m10 offset-m1 s12">
        <?= $this->Form->create($contact, [ 'class' => 'col s12']); ?>
            <div class="row">
                <div class="input-field">
                    <?= $this->Form->input('author', [
                        'templateVars' => ['glyphicon' => 'account_circle'],
                        'class' => 'validate',
                        'label' => ['text' => 'Votre nom']
                    ]); ?>
                    <?= $this->Form->input('website', [
                        'templateVars' => ['class' => 'website'],
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <?= $this->Form->input('email', [
                        'templateVars' => ['glyphicon' => 'email'],
                        'type' => 'email',
                        'class' => 'validate',
                        'label' => ['text' => 'E-mail']
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <?= $this->Form->input('subject', [
                        'templateVars' => ['glyphicon' => 'textsms'],
                        'class' => 'validate',
                        'label' => ['text' => 'Sujet']
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <?= $this->Form->input('body', [
                        'templateVars' => ['glyphicon' => 'mode_edit'],
                        'type' => 'textarea',
                        'class' => 'materialize-textarea',
                        'label' => ['text' => 'Message']
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="col m12">
                 <p class="right-align"><?= $this->Form->button('ENVOYER', ['class' => 'btn btn-large waves-effect waves-light']);?></p>
                </div>
            </div>
        <?= $this->Form->end(); ?>
    </div>
</div>