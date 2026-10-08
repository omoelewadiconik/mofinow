<!-- =========================================
     MOFINOW LOGIN CTA / FORM SECTION
========================================= -->

<section class="login-cta">

    <form
        class="login-form"
        action="#"
        method="POST"
    >

        <!-- Username -->
        <div class="input-group">

            <input
                type="text"
                name="username"
                id="username"
                placeholder="Username"
                autocomplete="username"
                required
            >

        </div>


        <!-- Password -->
        <div class="input-group password-group">

            <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                autocomplete="current-password"
                required
            >

            <!-- Password Visibility -->
            <button
                type="button"
                class="password-toggle"
                onclick="togglePassword()"
                aria-label="Show password"
            >
                ●
            </button>

        </div>


        <!-- Remember + Forgot Password -->
        <div class="login-options">

            <label class="remember-option">

                <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                >

                <span class="custom-checkbox"></span>

                <span class="remember-text">
                    Remember me
                </span>

            </label>


            <a
                href="#"
                class="forgot-password"
            >
                Forget password?
            </a>

        </div>


        <!-- Login Button -->
        <button
            type="submit"
            class="login-button"
        >
            Login
        </button>

    </form>

</section>


<script>

    function togglePassword() {

        const passwordInput =
            document.getElementById("password");

        const toggleButton =
            document.querySelector(".password-toggle");

        if (passwordInput.type === "password") {

            passwordInput.type = "text";

            toggleButton.innerHTML = "●";

        } else {

            passwordInput.type = "password";

            toggleButton.innerHTML = "●";

        }
    }

</script>


<style>

    /* =========================================
       LOGIN CTA / FORM
    ========================================= */

    .login-cta {

        width: 100%;

        padding: 0 20px 30px;

        background: #ffffff;

        display: flex;

        justify-content: center;
    }


    /* =========================================
       FORM
    ========================================= */

    .login-form {

        width: 100%;

        max-width: 300px;

        display: flex;

        flex-direction: column;

        align-items: center;
    }


    /* =========================================
       INPUT GROUP
    ========================================= */

    .input-group {

        position: relative;

        width: 100%;

        margin-bottom: 9px;
    }


    /* =========================================
       INPUTS
    ========================================= */

    .input-group input {

        width: 100%;

        height: 39px;

        padding: 0 16px;

        border: none;

        outline: none;

        border-radius: 22px;

        background: #e5e5e7;

        color: #555555;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: 16px;

        font-weight: 400;

        letter-spacing: 0.3px;

        box-shadow: none;

        transition:
            background 0.2s ease,
            box-shadow 0.2s ease;
    }


    .input-group input::placeholder {

        color: #999999;

        opacity: 1;
    }


    .input-group input:focus {

        background: #dedee0;

        box-shadow:
            0 0 0 1px
            rgba(75, 82, 245, 0.15);
    }


    /* =========================================
       PASSWORD FIELD
    ========================================= */

    .password-group input {

        padding-right: 42px;
    }


    /* =========================================
       PASSWORD TOGGLE
    ========================================= */

    .password-toggle {

        position: absolute;

        top: 50%;
        right: 13px;

        transform: translateY(-50%);

        width: 20px;
        height: 20px;

        padding: 0;

        border: none;

        background: transparent;

        color: #222222;

        font-size: 10px;

        cursor: pointer;

        display: flex;

        align-items: center;
        justify-content: center;
    }


    /* =========================================
       LOGIN OPTIONS
    ========================================= */

    .login-options {

        width: 100%;

        margin-top: 6px;
        margin-bottom: 12px;

        display: flex;

        align-items: center;

        justify-content: space-between;
    }


    /* =========================================
       REMEMBER ME
    ========================================= */

    .remember-option {

        position: relative;

        display: flex;

        align-items: center;

        gap: 7px;

        cursor: pointer;

        white-space: nowrap;
    }


    /* Hide actual checkbox */
    .remember-option input {

        position: absolute;

        opacity: 0;

        width: 0;
        height: 0;
    }


    /* Custom checkbox */
    .custom-checkbox {

        width: 17px;
        height: 17px;

        border: 1px solid #333333;

        background: #19c5f1;

        display: inline-block;

        flex-shrink: 0;
    }


    .remember-option input:not(:checked)
        + .custom-checkbox {

        background: #19c5f1;
    }


    .remember-text {

        color: #333333;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: 14px;

        font-weight: 500;
    }


    /* =========================================
       FORGOT PASSWORD
    ========================================= */

    .forgot-password {

        color: #333333;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: 14px;

        font-weight: 500;

        text-decoration: none;

        white-space: nowrap;
    }


    .forgot-password:hover {

        text-decoration: underline;
    }


    /* =========================================
       LOGIN BUTTON
    ========================================= */

    .login-button {

        width: 216px;

        height: 48px;

        border-radius: 28px;

        border: 3px solid #4d4ff5;

        background: #ffffff;

        color: #7277ed;

        font-family:
            Arial,
            Helvetica,
            sans-serif;

        font-size: 22px;

        font-weight: 400;

        cursor: pointer;

        outline: none;

        transition:
            background 0.2s ease,
            color 0.2s ease,
            transform 0.15s ease;
    }


    .login-button:hover {

        background: #4d4ff5;

        color: #ffffff;
    }


    .login-button:active {

        transform: scale(0.98);
    }


    /* =========================================
       TABLET
    ========================================= */

    @media (min-width: 600px) {

        .login-form {

            max-width: 320px;
        }

        .input-group input {

            height: 42px;

            font-size: 17px;
        }

        .remember-text,
        .forgot-password {

            font-size: 15px;
        }

        .login-button {

            width: 220px;

            height: 49px;
        }
    }


    /* =========================================
       SMALL PHONES
    ========================================= */

    @media (max-width: 360px) {

        .login-cta {

            padding-left: 16px;
            padding-right: 16px;
        }

        .login-options {

            gap: 8px;
        }

        .remember-text,
        .forgot-password {

            font-size: 12px;
        }

        .login-button {

            width: 63%;

            min-width: 190px;

            height: 46px;

            font-size: 20px;
        }
    }

</style>