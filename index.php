<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('BG.png');
            background-size: cover;
            /* This makes the background image cover the entire body */
            background-position: center;
            /* This centers the background image */
            background-repeat: no-repeat;
            /* This prevents the background image from repeating */
            height: 100vh;
        }

        .container {

            display: flex;
            /* justify-content: center; */
            align-items: center;
            /* border: 2px solid black; */
            height: 500px;
            width: 60%;
        }

        img {
            height: 400px;
        }

        .logo {
            /* padding: 20px; */
            display: flex;
        }

        .login-form {
            position: absolute;
            top: 22%;
            left: 12%;
            /* transform: translate(50%, -50%); */
            /* border: 1px solid black; */
        }

        .login-form {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            margin-bottom: 20px;
        }

        .login-form form {
            background-color: rgba(240, 240, 240, 0.5);
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

        .submitBtn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            margin-top: 10px;
        }

        .submitBtn:hover {
            background-color: #0056b3;
            /* Change background color on hover */
        }


        .captchaBox {
            /* border: 1px solid rgb(55, 55, 121);
            border-radius: 5px; */
            align-items: center;
            text-align: center;
            justify-content: center;
            margin-right: 2px;
        }

        /* .submitBtn {
            margin-top: 10px;
            padding: 5px;
            background-color: rgba(130, 82, 138, 100);
            border-radius: 5px;
            color: #fff;
        } */

        #canvas {
            border: 1px solid rgb(55, 55, 121);
            border-radius: 5px;
            background-color: #ffffff;
        }

        .inputBox {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 10px;
        }

        /* body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;  
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        } */

        /* Media queries for responsiveness */

        .logo-img {
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
        }

        /* CSS */
        .button-24 {
            margin-left: 20px;
            height: 40px;
            width: 100px;
            background: #FF4742;
            border: 1px solid #FF4742;
            border-radius: 2px;
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: nunito, roboto, proxima-nova, "proxima nova", sans-serif;

            outline: 0;
            text-align: center;
            text-rendering: geometricprecision;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: middle;
        }

        .button-24:hover,
        .button-24:active {
            background-color: initial;
            background-position: 0 0;
            color: #FF4742;
        }

        .button-24:active {
            opacity: .5;
        }


        /* CSS */
        .button-68 {
            appearance: none;
            backface-visibility: hidden;
            background-color: #27ae60;
            border-radius: 8px;
            border-style: none;
            box-shadow: rgba(39, 174, 96, .15) 0 4px 9px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Inter, -apple-system, system-ui, "Segoe UI", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: normal;
            line-height: 1.5;
            outline: none;
            overflow: hidden;
            padding: 13px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transform: translate3d(0, 0, 0);
            transition: all .3s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }

        .button-68:hover {
            background-color: #1e8449;
            opacity: 1;
            transform: translateY(0);
            transition-duration: .35s;
        }

        .button-68:active {
            transform: translateY(2px);
            transition-duration: .35s;
        }

        .button-68:hover {
            box-shadow: rgba(39, 174, 96, .2) 0 6px 12px;
        }



        input[type=text] {
            appearance: none;
            border: none;
            outline: none;
            border-bottom: 0.2em solid #2196F3;
            background: rgba(33, 150, 243, 0.2);
            border-radius: 0.2em 0.2em 0 0;
            padding: 0.4em;
            color: black;
            font-size: larger;
        }

        input[type=password] {
            appearance: none;
            border: none;
            outline: none;
            border-bottom: 0.2em solid #2196F3;
            background: rgba(33, 150, 243, 0.2);
            border-radius: 0.2em 0.2em 0 0;
            padding: 0.4em;
            color: black;
            font-size: larger;
        }

        ::placeholder {
            font-size: 20px;
            /* Change the font size */
            font-style: italic;
            /* Change the font style */
            color: darkblue;
            /* Change the color of the placeholder text */
        }

        #labelss {
            font-size: 20px;
            color: black;
            transition: all 0.3s ease-in-out;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row  logo">
            <div class=" logo-img">
                <img src="logo.png" alt="">
            </div>
            <div class=" login-form" style="width:502px ; height: 490px;">


                <form action="" style="height: 100%;">
                    <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 50px;">Sign Up</h1>
                    <div class="form-group">
                        <label id="labelss" for="maillabel">
                            <h3>Username</h3>
                        </label>
                        <input type="text" id="maillabel" class="form-control" placeholder="Your Email" value="" />
                    </div>
                    <div class="form-group">
                        <label id="labelss" for="">
                            <h3>Password</h3>
                        </label>
                        <input type="password" class="form-control" placeholder="Your Password" value="" />
                    </div>
                    <div class="captchaBox">
                        <div style="display: flex; gap: px;">
                            <canvas style="background-color: lightblue;" id="canvas" width="200" height="40"></canvas>

                            <button class="reloadBtn button-24" role="button"><img style="width: 30px; height: 30px; " src="./reload.png" alt=""></button>

                        </div>
                        <input type="text" name="" class="inputBox" placeholder="Enter a Captcha code"><br>
                        <!-- <button class="submitBtn">Submit</button> -->
                    </div>
                    <div class="form-group">

                        <input type="submit" class="submitBtn button-68" id="verify-captcha" value="Login" />
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        const canvas = document.getElementById("canvas");
        const reloadBtn = document.querySelector(".reloadBtn");
        const inputBox = document.querySelector(".inputBox");
        const submitBtn = document.querySelector(".submitBtn");
        let text = "";

        const textGenerator = () => {
            let generatedText = "";

            for (let i = 0; i < 5; i++) {
                // 48-57 numbers ASCII range
                generatedText += String.fromCharCode(randomNumber(48, 57));
            }
            return generatedText;
        };

        const randomNumber = (min, max) =>
            Math.floor(Math.random() * (max - min + 1) + min);

        function triggerFunction() {
            // clear Input
            inputBox.value = "";
            text = textGenerator();
            // Shuffle the characters for better randomness
            text = [...text].sort(() => Math.random() - 0.5).join("");
            drawStringOnCanvas(text);
        }

        function drawStringOnCanvas(string) {
            let ctx = canvas.getContext("2d");
            // Clear canvas
            ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
            // Set font and color
            ctx.font = "20px Arial";
            ctx.fillStyle = "black";
            // Calculate spacing for each character
            const letterSpace = canvas.width / string.length;

            for (let i = 0; i < string.length; i++) {
                ctx.fillText(string[i], i * letterSpace + 10, randomNumber(25, 40), 100);
            }
        }

        // Call triggerFunction for reload button
        reloadBtn.addEventListener("click", triggerFunction);
        // Call triggerFunction when page loads
        window.onload = () => triggerFunction();

        submitBtn.addEventListener("click", () => {
            if (inputBox.value === text) {
                alert("Success");
                triggerFunction();
            } else {
                alert("Incorrect");
                triggerFunction();
            }
        });
    </script>
</body>

</html>