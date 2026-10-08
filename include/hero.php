<!-- =========================================
     MOFINOW RESPONSIVE HERO SECTION
========================================= -->

<section class="login-hero">

    <!-- Blue Header + Wave -->
    <div class="hero-design">

        <svg
            class="hero-wave"
            viewBox="0 0 344 162"
            preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg"
        >

            <!-- Blue Background -->
            <rect
                x="0"
                y="0"
                width="344"
                height="162"
                fill="url(#blueGradient)"
            />

            <!-- Purple Wave -->
            <path
                d="
                    M0,132
                    C28,108 53,97 82,99
                    C113,100 137,116 165,132
                    C194,148 222,156 251,157
                    C289,158 319,139 344,108
                    L344,162
                    L0,162
                    Z
                "
                fill="#7135EF"
            />

            <!-- White Wave -->
            <path
                d="
                    M0,132
                    C28,108 53,97 82,99
                    C113,100 137,116 165,132
                    C194,148 222,156 251,157
                    C289,158 319,139 344,108
                    L344,162
                    L0,162
                    Z
                "
                fill="#FFFFFF"
            />

            <!-- Blue Gradient -->
            <defs>

                <linearGradient
                    id="blueGradient"
                    x1="0%"
                    y1="0%"
                    x2="100%"
                    y2="100%"
                >

                    <stop
                        offset="0%"
                        stop-color="#5268F5"
                    />

                    <stop
                        offset="100%"
                        stop-color="#328BF3"
                    />

                </linearGradient>

            </defs>

        </svg>


        <!-- =================================
             MOFINOW BRAND
        ================================== -->

        <div class="hero-brand">

            

            <div class="brand-name">
                MOFINOW
            </div>

        </div>

    </div>


    <!-- =================================
         WELCOME TEXT
    ================================== -->

    <div class="welcome-section">

        <h1>Welcome back!</h1>

    </div>

</section>


<style>

    /* =========================================
       RESET
    ========================================= */

    .login-hero,
    .login-hero * {
        box-sizing: border-box;
    }


    /* =========================================
       MAIN HERO
    ========================================= */

    .login-hero {

        width: 100%;

        min-height: 0;

        margin: 0;
        padding: 0;

        background: #ffffff;

        overflow: hidden;
    }


    /* =========================================
       BLUE HERO AREA
       
       Aspect ratio is based on the original
       344px × 162px design.
    ========================================= */

    .hero-design {

        position: relative;

        width: 100%;

        /*
         * 162 / 344 = 47.09%
         *
         * This keeps the exact proportion of
         * the original UI regardless of screen
         * width.
         */
        aspect-ratio: 344 / 162;

        overflow: hidden;
    }


    /* =========================================
       SVG WAVE
    ========================================= */

    .hero-wave {

        position: absolute;

        top: 0;
        left: 0;

        display: block;

        width: 100%;
        height: 100%;
    }


    /* =========================================
       MOFINOW BRAND
    ========================================= */

    .hero-brand {

        position: absolute;

        /*
         * Position is proportional to the
         * original design.
         */
        top: 23.5%;

        left: 50%;

        transform: translateX(-50%);

        width: max-content;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        z-index: 10;
    }


    /* =========================================
       LOGO
    ========================================= */

    .hero-brand img {

        display: block;

        /*
         * Logo scales with screen width.
         */
        width: clamp(35px, 14vw, 48px);

        height: auto;

        aspect-ratio: 1 / 1;

        object-fit: contain;
    }


    /* =========================================
       MOFINOW TEXT
    ========================================= */

    .brand-name {

        margin-top: 0;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        /*
         * Responsive but limited so it doesn't
         * become too large on desktop.
         */
        font-size: clamp(
            14px,
            5.2vw,
            18px
        );

        font-weight: 500;

        line-height: 1.2;

        letter-spacing: 0.2px;

        color: #ffffff;

        text-align: center;

        white-space: nowrap;
    }


    /* =========================================
       WELCOME SECTION
    ========================================= */

    .welcome-section {

        width: 100%;

        min-height: 45px;

        padding:

            clamp(4px, 1.5vw, 10px)

            20px

            20px;

        display: flex;

        justify-content: center;

        align-items: flex-start;

        background: #ffffff;
    }


    /* =========================================
       WELCOME TEXT
    ========================================= */

    .welcome-section h1 {

        margin: 0;

        padding: 0;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: clamp(
            18px,
            6.4vw,
            22px
        );

        font-weight: 400;

        line-height: 1.3;

        color: #222222;

        text-align: center;
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (min-width: 600px) {

        .hero-brand {

            top: 23.5%;
        }

        .hero-brand img {

            width: 48px;
        }

        .brand-name {

            font-size: 18px;
        }

        .welcome-section h1 {

            font-size: 22px;
        }
    }


    /* =========================================
       LARGE DESKTOP
    ========================================= */

    @media (min-width: 1200px) {

        /*
         * The banner still fills the screen,
         * but the content remains proportional.
         */

        .brand-name {

            font-size: 20px;
        }

        .welcome-section h1 {

            font-size: 24px;
        }
    }

</style>