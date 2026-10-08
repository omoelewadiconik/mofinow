<!DOCTYPE html>
<html lang="en">

<head>

    <!-- =========================================
         PAGE INFORMATION
    ========================================== -->

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Mofinow login page"
    >

    <title>Login | Mofinow</title>


    <!-- =========================================
         FAVICON
    ========================================== -->

    <link
        rel="icon"
        type="image/png"
        href="assets/image/logo.png"
    >


    <!-- =========================================
         GOOGLE FONT
    ========================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >


    <!-- =========================================
         GLOBAL STYLING
    ========================================== -->

    <style>

        /* -----------------------------------------
           RESET
        ----------------------------------------- */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        /* -----------------------------------------
           HTML
        ----------------------------------------- */

        html {

            width: 100%;

            min-height: 100%;

            scroll-behavior: smooth;
        }


        /* -----------------------------------------
           BODY
        ----------------------------------------- */

        body {

            width: 100%;

            min-height: 100vh;

            margin: 0;

            padding: 0;

            background-color: #ffffff;

            color: #222222;

            font-family:
                'Poppins',
                Arial,
                Helvetica,
                sans-serif;

            overflow-x: hidden;
        }


        /* -----------------------------------------
           MAIN PAGE CONTAINER
        ----------------------------------------- */

        .page-container {

            width: 100%;

            min-height: 100vh;

            margin: 0;

            padding: 0;

            background-color: #ffffff;
        }


        /* -----------------------------------------
           IMAGES
        ----------------------------------------- */

        img {

            max-width: 100%;

            height: auto;
        }


        /* -----------------------------------------
           FORM ELEMENTS
        ----------------------------------------- */

        input,
        button {

            font-family:
                'Poppins',
                Arial,
                Helvetica,
                sans-serif;
        }


        /* -----------------------------------------
           LINKS
        ----------------------------------------- */

        a {

            text-decoration: none;
        }

    </style>

</head>


<body>


    <!-- =========================================
         MAIN PAGE CONTAINER
    ========================================== -->

    <main class="page-container">


        <!-- =====================================
             HERO SECTION
             
             Loads:
             include/hero.php
        ====================================== -->

        <?php

        include __DIR__ . '/include/hero.php';

        ?>


        <!-- =====================================
             LOGIN FORM / CTA SECTION
             
             Loads:
             include/cta.php
        ====================================== -->

        <?php

        include __DIR__ . '/include/cta.php';

        ?>


        <!-- =====================================
             FOOTER SECTION
             
             Loads:
             include/footer.php
        ====================================== -->

        <?php

        include __DIR__ . '/include/footer.php';

        ?>


    </main>


</body>

</html>