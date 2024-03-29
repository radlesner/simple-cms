<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="administrator/admin_styles/top_bar.css">
    <link rel="stylesheet" href="styles/nav_bar.css">
    <link rel="stylesheet" href="styles/separator.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/operators.css">
    <link rel="stylesheet" href="styles/button.css">
    <link rel="stylesheet" href="styles/page_name.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/clock.css">

    <link rel="stylesheet" href="styles/user_custom_style.php">

    <script src="scripts/lib/jquery-3.4.1.min.js"></script>
    <script src="scripts/lib/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <title>
        <?php
            require_once "administrator/get_page_title.php";
            echo $page_title;
        ?>
    </title>
</head>
<body>
    <div id="screen_dimming"></div>

    <header class="bg_00">
        <nav id="nav_horizontal_panel">
            <div class="slide_menu_button show_vertical_panel">
                <div class="menu_button"></div>
            </div>
            <div class="button left to_sec_1">
                <?php
                    require_once "administrator/get_section_01_content.php";
                    echo $title_sec_01;
                ?>
            </div>
            <div class="button left to_sec_2">
                <?php
                    require_once "administrator/get_section_02_content.php";
                    echo $title_sec_02;
                ?>
            </div>
            <div class="button left to_sec_3">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $title_sec_03;
                ?>
            </div>
            <div class="page_name right page_reload">
                <?php
                    require_once "administrator/get_page_title.php";
                    echo $page_title;
                ?>
            </div>
            <?php
                if ( isset($_SESSION['logged']) )
                {
                    echo '<div class="button right to_admin_panel">Admin panel</div>';
                    echo '<div class="button right to_logout">Logout</div>';
                }
            ?>
        </nav>
        <article>
            <div class="header_content header_item_1">
                <?php
                    require_once "administrator/get_header_content.php";
                    echo $header_content_1;
                ?>
            </div>
            <div class="header_content header_item_2">
                <?php
                    require_once "administrator/get_header_content.php";
                    echo $header_content_2;
                ?>
            </div>
            <div class="header_content header_item_3">
                <?php
                    require_once "administrator/get_header_content.php";
                    echo $header_content_3;
                ?>
            </div>

            <div id="previous_content">
                <img src="images/icons/left-arrow-light.svg">
            </div>
            <div id="next_content">
                <img src="images/icons/right-arrow-light.svg">
            </div>
        </article>
    </header>

    <div class="separator">
        <div class="separator_title" id="sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
    </div>

    <section>
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_01_content.php";
                    echo $content_sec_01;
                ?>
            </div>
        </article>
    </section>

    <div class="separator" id="sec_02">
        <div class="separator_title">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
    </div>

    <section>
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_02_content.php";
                    echo $content_sec_02;
                ?>
            </div>
        </article>
    </section>

    <div class="separator" id="sec_03">
        <div class="separator_title">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
    </div>

    <section>
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $content_sec_03;
                ?>
            </div>
            </article>
    </section>

    <footer>
        <hr>
        <div class="footer_content">
            <div class="footer_row">
                Street address:
            </div>
            <div class="footer_row">
                Phone number:
            </div>
        </div>

        <hr>
        <div id="media_links">
            <div class="button left">
                <a href="#">
                    <img src="images/social_media/facebook.svg">
                </a>
            </div>
            <div class="button left">
                <a href="#">
                    <img src="images/social_media/twitter.svg">
                </a>
            </div>
            <div class="button left">
                <a href="#">
                    <img src="images/social_media/linkedin.svg">
                </a>
            </div>
            <div class="button left">
                <a href="https://github.com/CasinoRoyaleKrupier/simple-cms">
                    <img src="images/social_media/github.svg">
                </a>
            </div>
        </div>
    </footer>


    <nav id="slide_horizontal_panel">
        <div class="slide_menu_button show_vertical_panel">
            <div class="menu_button"></div>
        </div>
        <div class="page_name right page_reload">
            <?php
                require_once "administrator/get_page_title.php";
                echo $page_title;
            ?>
        </div>
        <div class="button left to_sec_1">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
        <div class="button left to_sec_2">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
        <div class="button left to_sec_3">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
        <?php
            if ( isset($_SESSION['logged']) )
            {
                echo '<div class="button right to_admin_panel">Admin panel</div>';
                echo '<div class="button right to_logout">Logout</div>';
            }
        ?>
    </nav>

    <nav id="nav_vertical_panel">
        <div class="slide_menu_button hide_vertical_panel">
            <div class="menu_button"></div>
        </div>
        <div class="page_name right page_reload">
            <?php
                require_once "administrator/get_page_title.php";
                echo $page_title;
            ?>
        </div>
        <div class="button" id="button_sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
        <div class="button" id="button_sec_02">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
        <div class="button" id="button_sec_03">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
        <?php
            if ( isset($_SESSION['logged']) )
            {
                echo '<div class="button to_admin_panel">Admin panel</div>';
                echo '<div class="button to_logout">Logout</div>';
            }
        ?>
    </nav>

    <script src="scripts/jquery_functions.js"></script>
    <script src="scripts/others_functions.js"></script>
    <script src="scripts/header_functions.js"></script>
    <script src="scripts/scroll_reveal.js"></script>
    <script src="scripts/scroll_to_selector.js"></script>
    <script src="scripts/clock.js"></script>
</body>
</html>