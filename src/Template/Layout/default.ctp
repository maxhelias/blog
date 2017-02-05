<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

 //Template Html->link();
 $this->Html->templates([
    'link' => '<a href="{{url}}"{{attrs}}><i class="material-icons prefix">{{glyphicon}}</i>{{content}}</a>'
 ]);
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--Import Google Icon Font-->
    <?= $this->Html->css('http://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <!--Import materialize.css-->
    <?= $this->Html->css('materialize.min.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <header>
        <nav class="top-nav">
            <div class="container">
                <a href="#!" class="brand-logo page-title"><?= $this->fetch('title') ?></a>
            </div>
        </nav>

        <div class="container">
            <a href="#" data-activates="mobile-demo" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
        </div>

        <div class="side-nav fixed" id="mobile-demo">
            <div class="row">
            </div>

            <div class="row">
                <div class="col l12 s12 logo">
                    <a id="logo-container" href="/" class="brand-logo" style="background-color:inherit;">
                        <?= $this->Html->image("me.jpg", [
                            'alt' => 'Me',
                            'fullBase' => true,
                            'class' => 'responsive-img circle',
                            'style' => 'width:60%;'
                        ]); ?>
                    </a>
                </div>
            </div>

            <div class="row">
            </div>

            <div class="row">
                <div class="col l12 s12 center-align">
                    <h6>Maxime Hélias</h6>
                    <h6>Développeur Web Back-end</h6>
                </div>
            </div>

            <div class="row">
                <ul class="col l12 s12">
                    <li class="bold">
                        <?= $this->Html->link('Compétences', '/skill', [
                            'class' => 'waves-effect waves-teal',
                            'glyphicon' => 'assignment'
                        ]); ?>
                    </li>
                    <li class="bold">
                        <?= $this->Html->link('Expériences', '/experience', [
                            'class' => 'waves-effect waves-teal',
                            'glyphicon' => 'work'
                        ]); ?>
                    </li>
                    <li class="bold">
                        <?= $this->Html->link('Diplômes', '/degree', [
                            'class' => 'waves-effect waves-teal',
                            'glyphicon' => 'school'
                        ]); ?>
                    </li>
                    <li class="bold">
                        <?= $this->Html->link('Mes projets', '/project', [
                            'class' => 'waves-effect waves-teal',
                            'glyphicon' => 'code'
                        ]); ?>
                    </li>
                    <li class="bold">
                        <?= $this->Html->link('Loisirs', '/hobbies', [
                            'class' => 'waves-effect waves-teal',
                            'glyphicon' => 'casino'
                        ]); ?>
                    </li>
                    <li class="bold">
                        <?= $this->Html->link('Contact', '/contact', [
                            'class' => 'waves-effect waves-teal',
                            'glyphicon' => 'contact_mail'
                        ]); ?>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col l6 s6">
                    <a href="http://www.linkedin.com/in/maximehelias" style="text-align: center;background-color:inherit;" target="_blank"><img src="img/linkedin.png" width=50 alt="" class="circle"></a>
                </div>
                <div class="col l6 s6">
                    <a href="http://github.com/maxhelias" style="text-align: center;background-color:inherit;" target="_blank"><img src="img/github.png" width=50 alt="" class="circle"></a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </main>

    <footer class="page-footer">
        <div class="container">
            <?= $this->fetch('footer') ?>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 Maxime Helias, All rights reserved.
                <a class="grey-text text-lighten-4 right" href="https://github.com/maxhelias/maxhelias/blob/master/LICENSE" target="_blank">MIT License</a>
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <?= $this->Html->script('jquery.js'); ?>
    <?= $this->Html->script('materialize.min.js'); ?>
    <?= $this->Html->script('init.js'); ?>
</body>
</html>
