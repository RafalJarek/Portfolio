<!doctype html>
<html>
<?php include_once "../PHP/skills.php"?>
<head>
    <title>QNimate Slider</title>
    <link href="..\Css\styles.css" type="text/css" rel="stylesheet">
    <link href="..\Css\style-375-320.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="slider-holder">
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
        <div class="image-holder">
            <div id="HTML5" class="slider-image">
                <img src="../Img/HTML5.png"><br>
                <?php echo $skill3; ?>
            </div>

            <div id="BEM" class="slider-image">
                <img src="../Img/bem.png"><br>
                <?php echo $skill0; ?>
            </div>

            <div id="Wordpress" class="slider-image">
                <img src="../Img/wordpress.png"><br>
                <?php echo $skill0; ?>
            </div>
        </div>
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>
</body>
</html>