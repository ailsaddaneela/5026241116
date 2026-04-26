<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Select Plan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
        }

        .section {
            padding: 110px 0;
        }

        .title {
            font-size: 40px;
            font-weight: 800;
            letter-spacing: 1px;
            margin-bottom: 12px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 80px;
        }

        .plan-box {
            background: white;
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            border: 1px solid #eee;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .plan-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .highlight {
            border: 2px solid #20c997;
            padding-bottom: 70px;
            position: relative;
            z-index: 2;
        }

        .plan-name {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .price {
            font-size: 46px;
            font-weight: 700;
        }

        .price span {
            font-size: 16px;
            color: #777;
            font-weight: 400;
        }

        .feature {
            margin: 14px 0;
            color: #555;
        }
    </style>

</head>

<body>

    <div class="section">
        <div class="container">

            <h2 class="text-center title">SELECT A PLAN</h2>

            <p class="text-center subtitle">
                Choose the plan that fits your needs!
            </p>

            <div class="row text-center">

                <!-- BASIC -->
                <div class="col-md-4">
                    <div class="plan-box">

                        <p class="plan-name">Basic</p>

                        <p class="price">$10 <span>/month</span></p>

                        <p class="feature">3 Website Projects</p>
                        <p class="feature">5 GB Cloud Storage</p>
                        <p class="feature">Email Support</p>
                        <p class="feature">Basic Templates</p>

                        <button class="btn btn-outline-success mt-4">Choose Plan</button>

                    </div>
                </div>

                <!-- STANDARD -->
                <div class="col-md-4">
                    <div class="plan-box highlight">

                        <p class="plan-name">Standard</p>

                        <p class="price">$25 <span>/month</span></p>

                        <p class="feature">15 Website Projects</p>
                        <p class="feature">50 GB Cloud Storage</p>
                        <p class="feature">Priority Email Support</p>
                        <p class="feature">Advanced Templates</p>

                        <button class="btn btn-success mt-4">Choose Plan</button>

                    </div>
                </div>

                <!-- PREMIUM -->
                <div class="col-md-4">
                    <div class="plan-box">

                        <p class="plan-name">Premium</p>

                        <p class="price">$50 <span>/month</span></p>

                        <p class="feature">Unlimited Projects</p>
                        <p class="feature">200 GB Cloud Storage</p>
                        <p class="feature">24/7 Customer Support</p>
                        <p class="feature">Premium Templates</p>

                        <button class="btn btn-outline-dark mt-4">Choose Plan</button>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
