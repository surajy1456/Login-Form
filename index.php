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
            background-image: url('BG.jpg'); 
            background-size: cover;
        }

        .container {

            display: flex;
            /* justify-content: center; */
            align-items: center;
            /* border: 2px solid black; */
            height: 500px;
            width:60%;
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
            top: 22%;
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
            background-color: rgba(240, 240, 240, 0.5)
;
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
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column; /* Stack elements vertically on smaller screens */
                height: auto; /* Remove fixed height */
                padding: 20px; /* Add padding for better spacing */
                width: 80%; /* Adjust container width */
            }

            img {
                height: auto;
                width: 100%;
                max-width: 300px; /* Limit maximum width of the image */
            }

            .login-form {
                top: 0; /* Adjust position to stack it below the logo */
                margin-top: 20px; /* Add margin for spacing */
                width: 100%; /* Make form full width */
            }

            .login-form form {
                padding: 15px; /* Reduce form padding */
            }

            .form-control,
            .submitBtn,
            .inputBox {
                width: 100%; /* Make form inputs full width */
            }
        }
    </style>
</head>

<body >
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
                        <input type="text" class="form-control" placeholder="Your Email" value="" />
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" value="" />
                    </div>
                    <div class="captchaBox">
                        <div style="display: flex; gap: px;">
                            <canvas id="canvas" width="200" height="40"></canvas>
                            <button class="reloadBtn">Reload</button>
                        </div>
                        <input type="text" name="" class="inputBox" placeholder="Enter a Captcha code"><br>
                        <!-- <button class="submitBtn">Submit</button> -->
                    </div>
                    <div class="form-group">
                        <input type="submit" class="submitBtn" id="verify-captcha" value="Login" />
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