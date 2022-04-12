<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/header.inc"); ?>

	<div class="slider-container">
      <div class="slider">
        <div class="slider__slides">
            <?php
            $slids_count = 3;
            $i = 1;
            while ($i <= $slids_count) {
                $slider_class = ($i == 1) ? 'slider__slide active' : 'slider__slide';
                echo ('<div class="'.$slider_class.'">');
                    echo ('<img src="./images/'.$i.'.jpg">');
                echo ('</div>');
                $i++;
            } ?>
            <div id="slider_nav-button--prev" class="slider__nav-button"></div>
            <div id="slider_nav-button--next" class="slider__nav-button"></div>
            <div class="slider__nav">
                <?php $i = 1;
                while ($i <= $slids_count) {
                    $slider_class = ($i == 1) ? 'slider__navlink active' : 'slider__navlink';
                    echo ('<div class="'.$slider_class.'"></div>');
                    $i++;
                } ?>
            </div>
        </div>
      </div>
    </div>

    <div class="banner_text">
        Proposed deep-sea mining<br/>
        would kill animals not yet discovered
    </div>
    
    <div class="main_text">
        <h1>
            5 reasons why deep sea mining<br>
            will only get our planet into deep trouble
        </h1>

        <p>
            The depths of our oceans hide a unique living 
            world that we barely understand – but these 
            mysteries are already under threat from a controversial 
            new industry: deep sea mining.
        </p>

        <img class="center" src="/images/content/1.jpg">
        <div class="image_description center">
            Lion’s Mane Jellyfish, a deep sea creatures found in the Arctic. 
            © Alexander Semenov
        </div>
                
        <p>
            A handful of companies and governments are planning to send 
            monster machines deep beneath the waves, disrupting sensitive 
            and unique habitats to extract metals and minerals. While 
            licences have been granted to explore for deep sea mining in 
            over a million square kilometres of our global oceans, no deep 
            sea mining is happening – yet.
        </p>

        <p>
            Sending gigantic mining machines designed to bulldoze and churn 
            up the seabed is clearly a very bad idea. Want to know how bad? 
            Here’s five reasons why deep sea mining will only get our planet 
            into deep trouble.
        </p>

        <img class="center" src="/images/content/2.jpg">
        <div class="image_description center">
            A shoal of Almoco Jacks on the Dom João de Castro seamount, Azores.
        </div>

        <iframe 
            class="center video"
            width="560"
            height="315" 
            src="https://www.youtube.com/embed/9iy5jEHWykQ" 
            title="Kamila`s vidos" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>


<?php require_once($_SERVER["DOCUMENT_ROOT"]."/templates/footer.inc"); ?>