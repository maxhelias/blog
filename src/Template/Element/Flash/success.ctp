<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="col m10 offset-m1 s12">
    <div id="card-alert" class="card green lighten-5">
        <div class="card-content green-text">
            <div class="message success center-align" onclick="this.classList.add('hidden')"><?= $message ?></div>
        </div>
    </div>
</div>