<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./slider.css">
    <script src="./slider.js"></script>
    <title>slider</title>
</head>
<body>
    <div class="slider-container">
      <div class="slider">
        <div class="slider__slides">
            <?php
            $i = 1;
            while ($i < 5) {
                $slider_class = ($i == 1) ? 'slider__slide active' : 'slider__slide';
                echo ('<div class="'.$slider_class.'">');
                    echo ('<img src="./images/img'.$i.'.jpg">');
                echo ('</div>');
                $i++;
            } ?>
            <div id="slider_nav-button--prev" class="slider__nav-button"></div>
            <div id="slider_nav-button--next" class="slider__nav-button"></div>
            <div class="slider__nav">
                <?php
                $i = 1;
                while ($i < 5) {
                    $slider_class = ($i == 1) ? 'slider__navlink active' : 'slider__navlink';
                    echo ('<div class="'.$slider_class.'"></div>');
                    $i++;
                } ?>
            </div>
        </div>
      </div>
    </div>

    <!-- ------------------------------------------------------------------------------- -->

    <div class="slider-container">
      <div class="slider">
        <div class="slider__slides">
            <?php
            $i = 1;
            while ($i < 5) {
                $slider_class = ($i == 1) ? 'slider__slide active' : 'slider__slide';
                echo ('<div class="'.$slider_class.'">');
                    echo ('<img src="./images/img'.$i.'.jpg">');
                echo ('</div>');
                $i++;
            } ?>
            <div id="slider_nav-button--prev" class="slider__nav-button"></div>
            <div id="slider_nav-button--next" class="slider__nav-button"></div>
            <div class="slider__nav">
                <?php
                $i = 1;
                while ($i < 5) {
                    $slider_class = ($i == 1) ? 'slider__navlink active' : 'slider__navlink';
                    echo ('<div class="'.$slider_class.'"></div>');
                    $i++;
                } ?>
            </div>
        </div>
      </div>
    </div>

    <!-- ------------------------------------------------------------------------------- -->

    <!-- key=AIzaSyCOdTt_sUo6iwEfVrL7Tx0kmN5hxKAfe4I -->
</body>
</html>