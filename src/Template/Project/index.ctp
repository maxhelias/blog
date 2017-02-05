<?php $this->assign('title', 'Mes projets'); ?>

<div class="row">
    <div class="col s12 offset-m1 m5">
        <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/osm.png" alt="OpenStreetMap">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Auteur<br>maxh/php-nominatim<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
                <a href="http://github.com/maxhelias/php-nominatim" target="_blank">Lien GitHub</a>
                <a href="http://nominatim.openstreetmap.org/" target="_blank">Lien Nominatim</a>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">maxh/php-nominatim<i class="material-icons right">close</i></span>
                <p>Nominatim est un outil permettant de chercher des données OSM par leur nom et adresse et de générer des adresse potentielles à partir d'un point OSM.</p>
                <p>La librairie est développée autour du web service REST que propose l'outil avec l'appuie de <a href="http://getcomposer.org">composer</a> et de <a href="http://docs.guzzlephp.org/en/latest/">GuzzleHttp</a>.</p>
                <p>Grâce à sa grande souplessité, elle peut être utilisée sur une instance publique ou bien privée.</p>
                <p>Inspiré de l'architecture pattern "DataMapper", créant une relation entre une instance et une méthode de recherche (Search, Reverse ou Lookup) nous permet d'avoir une couche d'abstraction avec le service et d'une simplicité pour de potentielle évolutions.</p>
            </div>
        </div>
    </div>

    <div class="col s12 m5">
        <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/i18n.png" alt="Internationalisation">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Contributeur<br>oscarotero/Gettext<i class="material-icons right">more_vert</i></span>
            </div>
            <div class="card-action">
                <a href="http://github.com/oscarotero/Gettext" target="_blank">Lien GitHub</a>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">oscarotero/Gettext<i class="material-icons right">close</i></span>
                <p>oscarotero/Gettext est une librairie PHP permettant l'import, l'export et l'édition au format PO, MO, PHP, Blade, Twig et bien d'autre format de fichier lié à l'internationalisation.</p>
                <p>Son utilisation est une sur-couche applicatifs à l'extension "gettext" de PHP, couramment utilisée pour écrire des programmes multilingues, en augmentant le choix des possibilités avec notamment sa force sur l'import/export/édition des fichiers d'internationalisation.</p>
                <p>Basé principalement sur une collection gérant les différentes traductions alimentées par l'extracteur du format entrant, je suis intervenu sur cette collection afin de connaitre le nombre de traduction renseignée ainsi que sur la procédure de test afin de vérifier sont bons fonctionnement pour chaque format disponible.</p>
            </div>
        </div>
    </div>
</div>