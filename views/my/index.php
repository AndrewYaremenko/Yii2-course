<?php

/** @var yii\web\View $this */
?>
<h1>my/index</h1>

<p>
    22<?= $hello ?>11
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<br><?= '<br>' . $id ?>
<br><?php print_r($nicknames) ?>
<br><?= $nicknames[0] ?>
<br><?= $nicknames[1] ?>
<br><?= $nicknames[2] ?>
<br><?php foreach ($nicknames as $nickname) {
        echo "<br>" . $nickname;
    } ?>

