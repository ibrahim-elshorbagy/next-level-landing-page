<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
            padding: 30px 20px;
            text-align: center;
        }
        .logo {
            max-width: 200px;
            height: auto;
        }
        .content {
            padding: 40px 30px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            color: #000;
            margin-bottom: 20px;
            text-align: center;
        }
        .info-section {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .info-label {
            font-weight: bold;
            color: #FFD700;
            margin-bottom: 5px;
        }
        .info-value {
            color: #333;
            margin-bottom: 15px;
        }
        .message-section {
            background-color: #fff;
            border: 1px solid #FFD700;
            border-radius: 8px;
            padding: 20px;
        }
        .message-label {
            font-weight: bold;
            color: #FFD700;
            margin-bottom: 10px;
        }
        .message-content {
            color: #333;
            line-height: 1.6;
        }
        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        .footer a {
            color: #FFD700;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="{{ url('assets/logo.webp') }}" alt="NEXT LEVEL" class="logo">
        </div>

        <!-- Content -->
        <div class="content">
            <h1 class="title">New Contact Form Submission</h1>

            <div class="info-section">
                <div class="info-label">Name:</div>
                <div class="info-value">{{ $name }}</div>

                <div class="info-label">Email:</div>
                <div class="info-value">{{ $email }}</div>

                @if($company)
                <div class="info-label">Company:</div>
                <div class="info-value">{{ $company }}</div>
                @endif
            </div>

            <div class="message-section">
                <div class="message-label">Message:</div>
                <div class="message-content">{!! nl2br(e($contactMessage)) !!}</div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>This message was sent from the NEXT LEVEL website contact form.</p>
            <p><a href="{{ url('/') }}">Visit our website</a></p>
        </div>
    </div>
</body>
</html>
