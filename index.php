<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <title>systeminfo</title>
</head>
<body>
    <div id="container">
        <div id="dock1">
            <div id="logo">systeminfo</div>
            <div id="nav_menu"><img src="images/nav-menu-button.svg"></div>

            <div id="buttons">
                <div class="section-button" id="about">
                    <img src="images/main_about_content.svg">
                    About program
                </div>
                <div class="section-button" id="screenshots">
                    <img src="images/screenshot.svg">
                    Screenshots
                </div>
                <div class="section-button" id="download">
                    <img src="images/download.svg">
                    Download
                </div>
                <div class="section-button" id="bug_tracer">
                    <img src="images/issuse.svg">
                    Bug tracer
                </div>
            </div>
        </div>
        <div id="dock2">
            <div id="animation">
                <span class="animation_title">Example of program use</span>
                <img src="images/animation.gif" id="animation_image">
            </div>
            <span id="about_content">
                About <br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur eleifend enim, quis tristique odio varius sed. Etiam quis venenatis enim, id eleifend purus. Aliquam at tincidunt enim. Vestibulum fringilla, purus vel lobortis tempor, tellus risus volutpat magna, ut commodo est nisi ac erat. Cras aliquet imperdiet felis id convallis.
            </span>
            <span id="screenshot_content">
                Screenshots program<br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur eleifend enim, quis tristique odio varius sed. Etiam quis venenatis enim, id eleifend purus. Aliquam at tincidunt enim. Vestibulum fringilla, purus vel lobortis tempor, tellus risus volutpat magna, ut commodo est nisi ac erat. Cras aliquet imperdiet felis id convallis.
            </span>
            <span id="download_content">
                <?php
                    $database = mysqli_connect("localhost", "root", "", "systeminfo_cms");

                    if ( mysqli_connect_errno() )
                    {
                        echo "Database connection error has occurred";
                    }

                    $query = mysqli_query($database, "SELECT * FROM download_content");

                    while($row = mysqli_fetch_array($query))
                    {
                        $title = $row['title'];
                        $content = $row['content'];
                    }

                    mysqli_close($database);

                    echo "<h3>" . $title . "</h3><br>";
                    echo $content;
                ?>
            </span>
        </div>
    </div>

    <script src="scripts/main.js"></script>
</body>
</html>