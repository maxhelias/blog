<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="col m10 offset-m1 s12">
    <div id="card-alert" class="card red lighten-5">
        <div class="card-content red-text">
            <div class="message error center-align" onclick="this.classList.add('hidden');"><?= $message ?></div>
        </div>
    </div>
</div>