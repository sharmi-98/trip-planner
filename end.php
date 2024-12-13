<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Course</title>
    <style>
        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff7e5f, #feb47b); /* Gradient background */
            color: #fff;
            text-align: center;
            padding-top: 100px; /* Spacing for the text */
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Unique Text Styling */
        .unique-text {
            font-size: 50px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 6px;
            font-weight: bold;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3), 0 0 25px rgba(255, 255, 255, 0.6); /* Text shadow for depth */
            animation: uniqueEffect 3s ease-in-out infinite alternate, glowEffect 2s ease-in-out infinite alternate;
        }

        /* Keyframes for unique vertical movement */
        @keyframes uniqueEffect {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        /* Keyframes for glowing text effect */
        @keyframes glowEffect {
            0% {
                text-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 0 0 30px rgba(255, 255, 255, 0.7);
            }
            100% {
                text-shadow: 0 0 25px rgba(255, 255, 255, 1), 0 0 40px rgba(255, 255, 255, 0.8);
            }
        }

    </style>
</head>
<body>

    <div class="unique-text">Welcome,Enjot your travel.</div>

</body>
</html>
