<!-- =========================================
     MOFINOW FOOTER
========================================= -->

<footer class="login-footer">

    <!-- New User / Sign Up -->
    <div class="signup-section">

        <span class="new-user">
            New User?
        </span>

        <a
            href="#"
            class="signup-link"
        >
            Sign Up
        </a>

    </div>


    <!-- Blue Divider -->
    <div class="footer-divider"></div>


    <!-- Social Media Icons -->
    <div class="social-links">

        <!-- First Social Icon -->
        <a
            href="#"
            class="social-icon"
            aria-label="Social media"
        >
            <span>◯</span>
        </a>


        <!-- LinkedIn -->
        <a
            href="#"
            class="social-icon"
            aria-label="LinkedIn"
        >
            <span class="linkedin-icon">
                in
            </span>
        </a>


        <!-- Facebook -->
        <a
            href="#"
            class="social-icon"
            aria-label="Facebook"
        >
            <span class="facebook-icon">
                f
            </span>
        </a>


        <!-- Google -->
        <a
            href="#"
            class="social-icon"
            aria-label="Google"
        >
            <span class="google-icon">
                G
            </span>
        </a>

    </div>

</footer>


<style>

    /* =========================================
       FOOTER
    ========================================= */

    .login-footer {

        width: 100%;

        padding: 0 20px 20px;

        background: #ffffff;

        display: flex;

        flex-direction: column;

        align-items: center;

        justify-content: center;

        text-align: center;
    }


    /* =========================================
       SIGN UP SECTION
    ========================================= */

    .signup-section {

        display: flex;

        align-items: center;

        justify-content: center;

        gap: 5px;

        line-height: 20px;
    }


    .new-user {

        color: #777777;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: 14px;

        font-weight: 400;
    }


    .signup-link {

        color: #4c67e8;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: 15px;

        font-weight: 500;

        text-decoration: none;
    }


    .signup-link:hover {

        text-decoration: underline;
    }


    /* =========================================
       BLUE DIVIDER
    ========================================= */

    .footer-divider {

        width: 175px;

        height: 2px;

        margin-top: 1px;

        margin-bottom: 5px;

        background: #5268f5;

        border-radius: 2px;
    }


    /* =========================================
       SOCIAL LINKS
    ========================================= */

    .social-links {

        display: flex;

        align-items: center;

        justify-content: center;

        gap: 18px;

        margin-top: 0;
    }


    /* =========================================
       SOCIAL ICON CIRCLE
    ========================================= */

    .social-icon {

        width: 27px;

        height: 27px;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        text-decoration: none;

        background: #ffffff;

        border: 2px solid #777777;

        color: #777777;

        transition:
            transform 0.2s ease,
            background 0.2s ease;
    }


    .social-icon:hover {

        transform: translateY(-2px);

        background: #f2f2f2;
    }


    /* =========================================
       FIRST ICON
    ========================================= */

    .social-icon > span:first-child {

        font-size: 20px;

        line-height: 1;
    }


    /* =========================================
       LINKEDIN
    ========================================= */

    .linkedin-icon {

        width: 100%;

        height: 100%;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #ffffff;

        color: #2877a9;

        font-family: Arial, sans-serif;

        font-size: 15px;

        font-weight: 700;
    }


    /* =========================================
       FACEBOOK
    ========================================= */

    .facebook-icon {

        width: 100%;

        height: 100%;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #ffffff;

        color: #2877c7;

        font-family: Arial, sans-serif;

        font-size: 21px;

        font-weight: 700;
    }


    /* =========================================
       GOOGLE
    ========================================= */

    .google-icon {

        width: 100%;

        height: 100%;

        border-radius: 50%;

        display: flex;

        align-items: center;

        justify-content: center;

        background: #ffffff;

        color: #4285f4;

        font-family: Arial, sans-serif;

        font-size: 17px;

        font-weight: 600;
    }


    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 360px) {

        .login-footer {

            padding-left: 15px;
            padding-right: 15px;
        }

        .signup-section {

            gap: 4px;
        }

        .new-user {

            font-size: 13px;
        }

        .signup-link {

            font-size: 14px;
        }

        .footer-divider {

            width: 160px;
        }

        .social-links {

            gap: 16px;
        }

        .social-icon {

            width: 26px;
            height: 26px;
        }
    }

</style>