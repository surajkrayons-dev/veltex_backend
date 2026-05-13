<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Enquiry</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #f4f7fb;
            font-family: Arial, Helvetica, sans-serif;
            color: #1e293b;
        }

        .wrapper {
            width: 100%;
            padding: 40px 15px;
            box-sizing: border-box;
        }

        .card {
            max-width: 650px;
            margin: auto;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .header {
            background: linear-gradient(135deg, #0247c7, #60db60);
            padding: 35px 30px;
            text-align: center;
            
            color: #fff;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
            font-weight: 700;
        }

        .header p {
            margin-top: 10px;
            opacity: 0.9;
            font-size: 15px;
        }

        .content {
            padding: 35px 30px;
        }

        .field {
            margin-bottom: 22px;
        }

        .label {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 8px;
            display: block;
            letter-spacing: 0.5px;
        }

        .value {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 14px 16px;
            border-radius: 10px;
            font-size: 15px;
            line-height: 24px;
            color: #0f172a;
            word-break: break-word;
        }

        .message-box {
            background: #f8fafc;
            border: 1px solid #dbeafe;
            border-left: 5px solid #0d6efd;
            padding: 18px;
            border-radius: 12px;
            line-height: 28px;
            font-size: 15px;
            color: #1e293b;
            white-space: pre-line;
        }

        .footer {
            padding: 22px;
            text-align: center;
            background: #f8fafc;
            color: #64748b;
            font-size: 13px;
            border-top: 1px solid #e2e8f0;
        }

        .badge {
            display: inline-block;
            padding: 8px 14px;
            background: #e0f2fe;
            color: #0369a1;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <div class="card">

            <div class="header">
                <h1>New Contact Enquiry</h1>

                <p>
                    A new enquiry has been submitted from your website.
                </p>
            </div>

            <div class="content">

                <div class="field">
                    <span class="label">Full Name</span>

                    <div class="value">
                        {{ $enquiry->name }}
                    </div>
                </div>

                <div class="field">
                    <span class="label">Email Address</span>

                    <div class="value">
                        {{ $enquiry->email }}
                    </div>
                </div>

                <div class="field">
                    <span class="label">Selected Service</span>

                    <div class="value">
                        <span class="badge">
                            {{ $enquiry->service ?? 'Not Selected' }}
                        </span>
                    </div>
                </div>

                <div class="field">
                    <span class="label">Message</span>

                    <div class="message-box">
                        {{ $enquiry->message }}
                    </div>
                </div>

            </div>

            <div class="footer">
                © {{ date('Y') }} {{ config('app.name') }}
                <br>
                Contact Enquiry Notification
            </div>

        </div>

    </div>

</body>

</html>
