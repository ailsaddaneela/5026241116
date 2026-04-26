<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: "Inter", sans-serif;
        }

        body {
            background: #dcdcdc;
            display: flex;
            justify-content: center;
            align-items: stretch;
        }

        .page-wrapper {
            width: 100%;
            max-width: 420px;
            min-height: 100vh;
            display: flex;
        }

        .linktree-card {
            width: 100%;
            min-height: 100vh;
            background: #fff;
            border-radius: 30px;
            padding: 20px 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);

            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-section svg {
            width: 20px;
            height: 20px;
            stroke: #111;
            stroke-width: 1.8;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
        }

        .profile-section {
            text-align: center;
            margin-top: 14px;
        }

        .profile-img {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            object-fit: cover;
        }

        .username {
            margin-top: 14px;
            font-size: 16.5px;
            font-weight: 600;
        }

        .badge {
            display: inline-block;
            width: 15px;
            height: 15px;
            background: #1da1f2;
            border-radius: 50%;
            margin-left: 6px;
            position: relative;
            top: 2px;
        }

        .badge::after {
            content: "✔";
            color: #fff;
            font-size: 9px;
            position: absolute;
            left: 3px;
            top: 0;
        }

        .link-list {
            margin-top: 20px;
        }

        .link-item {
            position: relative;
            display: flex;
            align-items: center;
            height: 52px;
            border-radius: 999px;
            border: 1px solid #7e57c2;
            margin: 9px 0;
            text-decoration: none;
            color: #2b2b2b;
            font-size: 14px;
        }

        .link-item span {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .left-icon {
            padding-left: 16px;
        }

        .left-icon img {
            width: 26px;
            height: 26px;
            border-radius: 50%;
        }

        .menu-dot {
            margin-left: auto;
            padding-right: 16px;
            color: #9a9a9a;
            font-size: 18px;
        }

        .link-item:hover {
            background: #f4f0ff;
        }

        .bottom-section {
            text-align: center;
            margin-bottom: 10px;
        }

        .join-btn {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 999px;
            border: 1px solid #e5e5e5;
            background: #fff;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
        }

        .footer-text {
            margin-top: 10px;
            font-size: 10.5px;
            display: flex;
            justify-content: center;
            gap: 6px;
        }

        .footer-text span {
            color: #111;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <div class="linktree-card">

            <div>

                <div class="top-section">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 4v16M4 12h16M6 6l12 12M18 6L6 18" />
                    </svg>

                    <svg viewBox="0 0 24 24">
                        <path d="M12 5v10" />
                        <path d="M8 9l4-4 4 4" />
                        <path d="M4 15v3h16v-3" />
                    </svg>
                </div>

                <!-- PROFILE -->
                <div class="profile-section">
                    <img src="https://ugc.production.linktr.ee/b94856b9-d220-460d-af6d-0ee24b7a8670_Chatime-Logo-Instagram-Baru.jpeg?io=true&size=avatar-v3_0"
                        class="profile-img">

                    <div class="username">
                        @chatimeindo <span class="badge"></span>
                    </div>
                </div>

                <div class="link-list">

                    <a class="link-item">
                        <div class="left-icon">
                            <img
                                src="https://ugc.production.linktr.ee/d862cea8-3d8b-4864-8337-1679cdda4487_296828327-591902022501710-5414773163300580037-n.jpeg?io=true&size=thumbnail-stack_v1_0">
                        </div>
                        <span>Customer Care F&B ID</span>
                        <div class="menu-dot">⋮</div>
                    </a>

                    <a class="link-item"><span>Download F&B ID App</span>
                        <div class="menu-dot">⋮</div>
                    </a>
                    <a class="link-item"><span>WhatsApp Big Order</span>
                        <div class="menu-dot">⋮</div>
                    </a>
                    <a class="link-item"><span>Shopee Food</span>
                        <div class="menu-dot">⋮</div>
                    </a>
                    <a class="link-item"><span>Grab Food</span>
                        <div class="menu-dot">⋮</div>
                    </a>
                    <a class="link-item"><span>Go Food</span>
                        <div class="menu-dot">⋮</div>
                    </a>

                </div>

            </div>

            <div class="bottom-section">
                <div class="join-btn">Join chatimeindo on Linktree</div>

                <div class="footer-text">
                    <span>Cookie Preferences</span>
                    <span>•</span>
                    <span>Report</span>
                    <span>•</span>
                    <span>Privacy</span>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
