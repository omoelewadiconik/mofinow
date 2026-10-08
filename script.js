/* =========================================
   MOFINOW LOGIN PAGE SCRIPT
========================================= */

document.addEventListener("DOMContentLoaded", function () {

    /* =========================================
       PASSWORD VISIBILITY
    ========================================= */

    const passwordInput = document.getElementById("password");
    const passwordToggle = document.querySelector(".password-toggle");

    if (passwordInput && passwordToggle) {

        passwordToggle.addEventListener("click", function () {

            if (passwordInput.type === "password") {

                passwordInput.type = "text";

                passwordToggle.setAttribute(
                    "aria-label",
                    "Hide password"
                );

            } else {

                passwordInput.type = "password";

                passwordToggle.setAttribute(
                    "aria-label",
                    "Show password"
                );
            }

        });
    }


    /* =========================================
       RESPONSIVE VIEWPORT
    ========================================= */

    function updateViewport() {

        const width = window.innerWidth;
        const height = window.innerHeight;

        document.documentElement.style.setProperty(
            "--viewport-width",
            width + "px"
        );

        document.documentElement.style.setProperty(
            "--viewport-height",
            height + "px"
        );
    }


    updateViewport();


    /* =========================================
       HANDLE SCREEN RESIZE
    ========================================= */

    let resizeTimer;

    window.addEventListener("resize", function () {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(function () {

            updateViewport();

        }, 100);

    });


    /* =========================================
       MOBILE KEYBOARD / VIEWPORT HANDLING
    ========================================= */

    if (window.visualViewport) {

        window.visualViewport.addEventListener(
            "resize",
            function () {

                document.documentElement.style.setProperty(
                    "--visible-height",
                    window.visualViewport.height + "px"
                );

            }
        );
    }


    /* =========================================
       PREVENT HORIZONTAL OVERFLOW
    ========================================= */

    function checkScreenWidth() {

        const bodyWidth =
            document.body.scrollWidth;

        const screenWidth =
            window.innerWidth;

        if (bodyWidth > screenWidth) {

            document.documentElement.style.overflowX =
                "hidden";

            document.body.style.overflowX =
                "hidden";
        }
    }


    checkScreenWidth();

    window.addEventListener(
        "resize",
        checkScreenWidth
    );


    /* =========================================
       TOUCH DEVICE DETECTION
    ========================================= */

    if (
        "ontouchstart" in window ||
        navigator.maxTouchPoints > 0
    ) {

        document.body.classList.add(
            "touch-device"
        );

    } else {

        document.body.classList.add(
            "desktop-device"
        );
    }


    /* =========================================
       RESPONSIVE CLASS
    ========================================= */

    function updateDeviceSize() {

        const width = window.innerWidth;

        document.body.classList.remove(
            "mobile-device",
            "tablet-device",
            "desktop-device"
        );


        if (width <= 480) {

            document.body.classList.add(
                "mobile-device"
            );

        } else if (width <= 1024) {

            document.body.classList.add(
                "tablet-device"
            );

        } else {

            document.body.classList.add(
                "desktop-device"
            );
        }
    }


    updateDeviceSize();


    window.addEventListener(
        "resize",
        updateDeviceSize
    );

});