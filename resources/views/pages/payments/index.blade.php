<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #00c6ff, #0072ff);
        }

        .payment-container {
            width: 100%;
            max-width: 500px;
            padding: 25px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            backdrop-filter: blur(10px);
        }

        h1 {
            margin-bottom: 10px;
            font-size: 28px;
            color: #2d3748;
        }

        h2 {
            margin-bottom: 30px;
            font-size: 22px;
            color: #4a5568;
        }

        .success-message {
            font-size: 26px;
            color: #38a169;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-weight: bold;
            font-size: 16px;
            color: #2d3748;
            text-align: left;
        }

        input[type="text"],
        input[type="number"] {
            padding: 12px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            padding: 14px;
            background: linear-gradient(to right, #007bff, #0056b3);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: linear-gradient(to right, #0056b3, #003a75);
        }

        .footer-text {
            margin-top: 20px;
            font-size: 14px;
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        @if(session('success_message'))
            <h1 class="success-message">{{ session('success_message') }}</h1>
            <p>Thank you for your booking!</p>
        @else
            <h1>Payment Confirmation</h1>
            <h2>Make a Payment</h2>

            <form action="{{ route('custom.payment.process') }}" method="POST">
                @csrf
                <label for="card_number">Card Number:</label>
                <input type="text" name="card_number" id="card_number" placeholder="1234 5678 9012 3456" required>

                <label for="expiry_month">Expiry Month:</label>
                <input type="number" name="expiry_month" id="expiry_month" min="1" max="12" placeholder="MM" required>

                <label for="expiry_year">Expiry Year:</label>
                <input type="number" name="expiry_year" id="expiry_year" min="2023" placeholder="YYYY" required>

                <label for="cvc">CVC:</label>
                <input type="text" name="cvc" id="cvc" placeholder="123" required>

                <label for="amount">Amount:</label>
                <input type="number" name="amount" id="amount" placeholder="Amount" required>

                <button type="submit">Pay Now</button>
            </form>
            <p class="footer-text">All payments are securely processed.</p>
        @endif
    </div>
</body>
</html>
