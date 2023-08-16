<?php

/** @var yii\web\View $this */
/** @var array $items */

$this->title = 'test app';
?>
<div class="site-index">
    <div class="list">
        <?php foreach ($items as $item) { ?>
            <div class="list__item">
                <div class="list__item__cities__popup">

                </div>
                <div class="list__item__header">
                    <div class="item__cities"><img src="/pic/building.png" alt="img">London, Lissabon</div>
                    <div class="item__likes">+54</div>
                </div>
                <img class="list__img" src="<?= $item['pic']?>" alt="pic">
                <div class="item__description">
                    <span class="item__name"><?= $item['name']?></span>
                    <span class="item__site"><?= $item['site']?></span>
                </div>
                <div class="item__data">
                    <div class="item__views"><img class="icon" src="/pic/girl.png" alt="pic"><?= $item['views']?></div>
                    <div class="item__verified"><?= $item['verified']?'<img src="/pic/ok.png"> WEB VERIFIED':'NOT VERIFIED'?></div>
                    <div class="item__followings"><?= $item['followings']?> FOLLOWINGS</div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
