<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/header.inc"); ?>

	<div class="slider-container">
      <div class="slider">
        <div class="slider__slides">
            <?php
            $i = 1;
            while ($i < 3) {
                $slider_class = ($i == 1) ? 'slider__slide active' : 'slider__slide';
                echo ('<div class="'.$slider_class.'">');
                    echo ('<img src="./images/'.$i.'.jpg">');
                echo ('</div>');
                $i++;
            } ?>
            <div id="slider_nav-button--prev" class="slider__nav-button"></div>
            <div id="slider_nav-button--next" class="slider__nav-button"></div>
            <div class="slider__nav">
                <?php
                $i = 1;
                while ($i < 3) {
                    $slider_class = ($i == 1) ? 'slider__navlink active' : 'slider__navlink';
                    echo ('<div class="'.$slider_class.'"></div>');
                    $i++;
                } ?>
            </div>
        </div>
      </div>
    </div>

<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.inc"); ?>