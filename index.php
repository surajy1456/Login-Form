<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {

            display: flex;
            /* justify-content: center; */
            align-items: center;
            border: 2px solid black;
            height: 500px;
            width: 70%;
        }

        img {
            height: 500px;
            width: 500px;
        }

        .logo {
            /* padding: 20px; */
            display: flex;
        }

        .login-form {
            position: absolute;
            top: 27%;
            left: 50%;
            /* transform: translate(50%, -50%); */
            /* border: 1px solid black; */
        }

        .login-form {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }

        .login-form form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;

        }

        .login-form h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #007bff;
            /* Change border color on focus */
            outline: none;
            /* Remove outline */
        }

        .btnSubmit {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btnSubmit:hover {
            background-color: #0056b3;
            /* Change background color on hover */
        }

        #captcha-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #captcha-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .captcha {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #captcha-image {
            max-width: 200px;
            height: auto;
            margin-bottom: 10px;
        }

        #refresh-captcha {
            padding: 8px 16px;
            font-size: 14px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #refresh-captcha:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row  logo">
            <div class=" logo-img">
                <img src="logo.png" alt="">
            </div>
            <div class=" login-form" style="width:502px ; height: 450px;">


                <form action="" style="height: 100%;">
                    <h1>Sign Up</h1>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password *" value="" />
                    </div>
                    <div class="captcha-container">
                        <input type="text" id="captcha-input" placeholder="Enter CAPTCHA Code">
                        <p id="captcha-message"></p>
                        <div class="captcha">
                            <img src="captcha_image.jpg" alt="CAPTCHA Image" id="captcha-image">
                            <button type="button" id="refresh-captcha">Refresh</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" id="verify-captcha" value="Login" />
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const refreshButton = document.getElementById("refresh-captcha");
            const verifyButton = document.getElementById("verify-captcha");
            const captchaInput = document.getElementById("captcha-input");
            const captchaMessage = document.getElementById("captcha-message");

            refreshButton.addEventListener("click", function() {
                // Replace the source of the image with a new CAPTCHA image
                document.getElementById("captcha-image").src = "new_captcha_image.jpg";
            });

            verifyButton.addEventListener("click", function() {
                const userInput = captchaInput.value.trim();
                const captchaCode = "1234"; // Replace with the actual CAPTCHA code

                if (userInput === captchaCode) {
                    captchaMessage.textContent = "CAPTCHA code is correct!";
                    captchaMessage.style.color = "green";
                } else {
                    captchaMessage.textContent = "CAPTCHA code is incorrect. Please try again.";
                    captchaMessage.style.color = "red";
                }
            });
        });
    </script>
</body>

</html>