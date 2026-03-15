<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choice Page</title>
    <style>
        /* Global Styling */
        body {
            font-family: Poppins, sans-serif;
                background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('9950253.jpg');
                background-position: center;
                background-size: cover;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
        }

        /* Container Styling */
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* Heading Styling */
        h1 {
            font-size: 25px;
                text-align: center;
                font-weight: bold;
                font-family: Poppins, sans-serif;
                color: blue;
                position: relative;
        }

        /* Button Container Styling */
        .button-container {
            display: flex;
            justify-content: space-around;
            gap: 20px; /* Add some space between buttons */
        }

        /* Button Styling */
        .choice-btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 20px 40px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .choice-btn .emoji {
            font-size: 30px;
            margin-right: 10px;
        }

        /* Hover Effect */
        .choice-btn:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        /* Focus Effect */
        .choice-btn:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(52, 152, 219, 0.5);
        }

        /* Media Query for Responsive Design */
        @media (max-width: 600px) {
            .button-container {
                flex-direction: column;
            }

            .choice-btn {
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Role</h1>
        <div class="button-container">
            <button class="choice-btn" id="ownerBtn">
                <span class="emoji">👨‍💼</span> Owner
            </button>
            <button class="choice-btn" id="customerBtn">
                <span class="emoji">🛒</span> Customer
            </button>
        </div>
    </div>

    <script>
        document.getElementById('ownerBtn').addEventListener('click', function() {
            alert("You selected Owner!");
            window.location.href = "OwnerRegistration.php"; // Redirect to owner page
        });

        document.getElementById('customerBtn').addEventListener('click', function() {
            alert("You selected Customer!");
            window.location.href = "CustomerRegistration.php"; // Redirect to customer page
        });
    </script>
</body>
</html>
