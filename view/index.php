<?php
session_start();

if(isset($_POST['email']))
{
    require_once("../PHP/validation.php");

    //zapamiętaj wprowadzone juz dane
    $_SESSION['a_name']=$name;
    $_SESSION['a_email']=$email;
    $_SESSION['a_message']=$message;

    require_once("../PHP/send.php");
}
?>

<?php include_once "../PHP/skills.php"?>
<!DOCTYPE html>
<html lang="pl">
<meta charset="utf-8"/>
<?php require_once "../PHP/style.php"?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/png" href="../Img/RJ.png">
<script type="text/javascript" src="https://code.jquery.com/jquery-git.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function onSubmit(token) {
        document.getElementById("i-recaptcha").submit();
    }
</script>
<title>Rafał Jarek - Portfolio</title>
</head>

<body>

<nav id="nav">
    <img src="../Img/RJ.png">
    <button id="nav-button">&#9776</button>
    <div>
    <ul id="nav-ul">
        <li><a href="#about">O mnie</a></li>
        <li><a href="#front-end-skills">Umiejętności z front-end</a></li>
        <li><a href="#back-end-skills">Umiejętności z back-end</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Kontakt</a></li>
        <li><a href="http://localhost/portfolio/Img/CV-Rafal-Jarek.pdf">Moje CV</a></li>
        <li><a href="https://github.com/RafalJarek">Mój Github</a></li>
    </ul>
</nav>

<script>
    $('#nav').click(function()
    {
        $('#nav').css('opacity','1');
        if($('#nav-ul').css('display') == 'none')
        {
            $('#nav-ul').css('display','block');
        }
        else
        {
            $('#nav-ul').css('display','none');
        }
    });

    $(window).on('hashchange', function(e)
    {
        $('#nav').css('opacity','0.2');
        $('#nav-ul').css('display','none');
    });
</script>

<header>
    <img id="big-picture" src="../Img/photo.jpg"/>
    <!--
    <img id="big-picture" src="../Img/photo.jpeg"/>
    <img id="big-picture" src="../Img/code.jpg"/>
    <img id="small-picture" src="../Img/me.png"/>
    -->
    <h1>Rafał Jarek<BR><span>JUNIOR FRONT-END<BR>DEVELOPER</span></h1>
</header>

<section id="about">
    <section id="about-me">
        <img id="small-picture" src="../Img/me.png"/>
        <section id="about-me-text">
            <h5>Imię i nazwisko:</h5>
            <h1>Rafał Jarek</h1>
            <h5>Wiek:</h5>
            <h1>25 lat</h1>
            <h5>Miejscowość:</h5>
            <h1>Kraków</h1>
            <h5>Doświadczenie:</h5>
            <h1><1 rok</h1>
        </section>
    </section>

    <section id="about-me-info">
        <section id="about-me-text">
            <h1>Witam,</h1>
            <h5><span style="margin-left:80px;"> </span>Nazywam się Rafał Jarek. Mam 24 lata. Całe swoje dotychczasowe życie spędziłem przy komputerze.
                Fakt ten pomógł mi w decyzji podjęcia studiów w tym kierunku. Od 2013 roku mieszkam w Krakowie. 1 lutego 2018 roku zdobyłem tytuł inżyniera
                informatyki na Politechnice Krakowskiej na wydziale Fizyki, Matematyki i Informatyki. Od października ubiegłego roku jestem narzeczonym
                mojego skarba o imieniu Karolina. Pierwszy konkretny kontakt z aplikacjami internetowymi pojawił się na przedmiocie "Projektowanie aplikacji
                internetowych" i od razu stwierdziłem, że to jest to co chcę robić w życiu. Obecnie przede wszystkim doszkalam swoje umiejętności tworząc
                różne porjekty dla siebie oraz poszukuję pracy jako stażysta bądź junior front-end deweloper.
        </section>
    </section>

    <script>
        $('#about-me').on('click',function(){
        $('#about-me').hide('slow')
        $('#about-me-info').show('slow');
        });

        $('#about-me-info').on('click',function(){
        $('#about-me-info').hide('slow')
        $('#about-me').show('slow');
        });
    </script>
</section>

<section id="front-end-skills">
        <h1 id="my-skills">Moje umiejętności z front-end</h1>

        <div id="HTML5">
            <img src="../Img/HTML5.png">
            <?php echo $skill3; ?>
        </div>

        <div id="CSS">
            <img src="../Img/CSS3.png">
            <?php echo $skill3; ?>
        </div>

        <div id="RWD">
            <img src="../Img/rwd.png">
            <?php echo $skill3; ?>
        </div>

        <div id="jQuery">
            <img src="../Img/jquery.png">
            <?php echo $skill3; ?>
        </div>

        <div id="GitHub">
            <img src="../Img/git.png">
            <?php echo $skill3; ?>
        </div>

        <div id="JS">
            <img src="../Img/js.png">
            <?php echo $skill1; ?>
        </div>

        <div id="AJAX">
            <img src="../Img/ajax.png">
            <?php echo $skill1; ?>
        </div>

        <div id="Wordpress">
            <img src="../Img/wordpress.png">
            <?php echo $skill1; ?>
        </div>

        <h1 id="my-frontend-aim">Moje cele edukacyjne</h1>

        <div id="SASS">
            <img src="../Img/sass.png">
            <?php echo $skill0; ?>
        </div>

        <div id="Bootstrap">
            <img src="../Img/bootstrap.png">
            <?php echo $skill0; ?>
        </div>

        <div id="BEM">
            <img src="../Img/bem.png">
            <?php echo $skill0; ?>
        </div>
</section>

<section id="back-end-skills">
        <h1 id="my-skills">Moje umiejętności z back-up</h1>

        <div id="PHP">
            <img src="../Img/php.png">
            <?php echo $skill3; ?>
        </div>

        <div id="MySQL">
            <img src="../Img/mysql.png">
            <?php echo $skill4; ?>
        </div>

        <div id="Oracle">
            <img src="../Img/oracle.png">
            <?php echo $skill4; ?>
        </div>

        <div id="CSharp">
            <img src="../Img/csharp.png">
            <?php echo $skill2; ?>
        </div>

        <h1 id="my-backend-aim">Moje cele edukacyjne</h1>

        <div id="React">
            <img src="../Img/react.png">
            <?php echo $skill0; ?>
        </div>

        <div id="Laravel">
            <img src="../Img/laravel.png">
            <?php echo $skill0; ?>
        </div>

        <div id="Angular">
            <img src="../Img/angular.png">
            <?php echo $skill0; ?>
        </div>

        <h1 id="my-program-skills">Umiejętności obsługi programów</h1>

        <div id="Visual-Studio-Code">
            <img src="../Img/vscode.png">
            <?php echo $skill4; ?>
        </div>

        <div id="PhotoShop">
            <img src="../Img/photoshop.png">
            <?php echo $skill3; ?>
        </div>

        <div id="MySQL-Workbench">
            <img src="../Img/MySQLWorkbench.png">
            <?php echo $skill3; ?>
        </div>

        <div id="phpMyAdmin">
            <img src="../Img/phpmyadmin.png">
            <?php echo $skill3; ?>
        </div>
</section>

<script>
    $("[id$='end-skills']").children().hover(function()
    {
        if ($(this).css('transform') == 'none') {
        $(this).css({'transform': 'rotatey(360deg)'});
        } else {
        $(this).css({'transform': ''});
        };
    });
</script>

<section id="portfolio">
    <h1 id="my-portfolio">Moje dotychcasowe projekty</h1>
    <section id="my-projects">

        <div id="my-projects-container">
            <a id="project-a-img" target="_blank" href="https://inzynier.000webhostapp.com/">
                <img id="project-img" src="../Img/Lisia.png">
                <div id="description">
                    <div class="text">
                        <p class="p6">Wykorzystane technologie:</p>
                        <p class="p1">HTML + CSS + CSS GRID + PHP +MySQL + jQuery + RWD</p>
                        <p class="p6">Wykorzystane programy:</p>
                        <p class="p1">Visual Studio Code + Photoshop + GitHub</p>
                    </div>
                </div>
            </a>

            <a id="project-a-title" target="_blank" href="https://inzynier.000webhostapp.com/">
                <h2>W pełni responsywny sklep internetowy</h2>
            </a>
        </div>

        <div id="my-projects-container">
        <a id="project-a-img" target="_blank" href="https://rj-blog.000webhostapp.com/">
                <img id="project-img" src="../Img/blog.jpg"></img>
                <div id="description">
                    <div class="text">
                        <p class="p6">Wykorzystane technologie:</p>
                        <p class="p1">Wordpress + MySQL</p>
                        <p class="p6">Wykorzystane programy:</p>
                        <p class="p1">Photoshop + GitHub</p>
                    </div>
                </div>
            </a>

            <a id="project-a-title" target="_blank" href="https://rj-blog.000webhostapp.com/">
                <h2>Blog internetowy oparty o WordPress</h2>
            </a>
        </div>

        <div id="my-projects-container">
            <a id="project-a-img" href="#project-a-img">
                <img id="project-img" src="../Img/wkrotce.png" class="future-project"></img>
                <div id="description">
                    <div class="text">
                        <p class="p1">Już niebawem</p>
                    </div>
                </div>
            </a>
            <a id="project-a-title" href="#project-a-img">
                <h2>Już niebawem</h2>
            </a>
        </div>

        <div class="project-4-th" id="my-projects-container">
            <a id="project-a-img" href="#project-a-img">
                <img id="project-img" src="../Img/wkrotce.png" class="future-project"></img>
                <div id="description">
                    <div class="text">
                        <p class="p1">Już niebawem</p>
                    </div>
                </div>
            </a>
            <a id="project-a-title" href="#project-a-img">
                <h2>Już niebawem</h2>
            </a>
        </div>

    </section>
    <h1 id="my-portfolio-end">Wkrótce więcej...</h1>
</section>

<section id="contact">
    <h1 class="contact-title">Zatrudnij mnie</h1>
    <form id='i-recaptcha' class="contact-form" method="POST"> <!--style="display:none"-->
        <input name="data" placeholder="Imię i Nazwisko" value="<?php
            if(isset($_SESSION['a_name']))
            echo $_SESSION["a_name"];
            else
            echo "";?>">

        <?php
            if(isset($_SESSION['e_name']))
            {
                echo'<div class="error_name_mobile">'.$_SESSION['e_name'].'</div>';
                unset($_SESSION['e_name']);
            }
        ?>

        <input name="email" placeholder="Adres Email" value="<?php
            if(isset($_SESSION["a_email"]))
            echo $_SESSION["a_email"];
            else
            echo "";?>">

        <?php
            if(isset($_SESSION['e_email']))
            {
                echo'<div class="error_email_mobile">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
            }
        ?>

        <textarea name="message" placeholder="Twoja wiadomość..."><?php
            if(isset($_SESSION["a_message"]))
            echo $_SESSION["a_message"];
            ?></textarea>

        <button class="g-recaptcha" data-sitekey="6LekdkQUAAAAAATUlsIOxcVLq-VRHGK_tEXyEsst" data-callback="onSubmit">Wyślij</button>
        <?php
        if (isset($maileffect))
        {
            echo '<div style="text-align:center;color: #9cd4eb;font-weight: bold;">'.$maileffect.'</div>';
        }
        ?>
    </form>

    <?php
    echo"<div class='errors'>";
    if(isset($_SESSION['e_name']))
    {
        echo'<div class="error_name">'.$_SESSION['e_name'].'</div>'.'<br />';
        unset($_SESSION['e_name']);
    }

    if(isset($_SESSION['e_email']))
    {
        echo'<div class="error_email">'.$_SESSION['e_email'].'</div>'.'<br />';
        unset($_SESSION['e_email']);
    }

    if(isset($_SESSION['e_bot']))
    {
        echo'<div class="error_bot">'.$_SESSION['e_bot'].'</div>'.'<br />';
        unset($_SESSION['e_bot']);
    }
    echo"</div>";
    ?>
</section>

<script>
    $('.contact-title').click(function ()
    {
    if($('.contact-form').css('display') =='none')
        {
        $('.contact-form').css('display','grid');
        }
    else if($('.contact-form').css('display') =='grid')
        {
        $('.contact-form').css('display','none');
        }
    }
    );
</script>

<footer>
    <img src="../Img/RJ_white.png">
    <p>Copyright &copy 2018 Rafał Jarek</p>
    <a class="CV" href="http://rafaljarek.000webhostapp.com/Img/CV-Rafal-Jarek.pdf"><img src="../Img/CV.png"></a>
    <a class="github" target="_blank" href="https://github.com/RafalJarek"><img src="../Img/git_white.png"></a>
</footer>
<!--

<img id="project-img" src="../Img/wkrotce.png"></img>


<section id="about">
<img id="info-picture" src="../Img/info.png"/>
</section>
-->

</body>
</html>