<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Database connection settings
$servername = "localhost";
$username = "deaconsp_user";
$password = "deaconspublishers";
$database = "deaconsp_deacons_publishers";

// Connect to the database
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = mysqli_real_escape_string($connection, $_POST["fullName"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
    $experience = mysqli_real_escape_string($connection, $_POST["experience"]);
    $location = mysqli_real_escape_string($connection, $_POST["location"]);

    // Define upload directories
    $uploadDir = "../uploads/";
    $cvDir = $uploadDir . "../uploads/marketing/";
    $coverLetterDir = $uploadDir . "../uploads/marketing/";

    // Create directories if they don't exist
    if (!is_dir($resumeDir)) {
        mkdir($resumeDir, 0777, true);
    }
    if (!is_dir($coverLetterDir)) {
        mkdir($coverLetterDir, 0777, true);
    }

    // Function to handle file upload
    function handleFileUpload($fileKey, $filePrefix, $uploadDir)
    {
        $fileName = $filePrefix . time() . "_" . basename($_FILES[$fileKey]["name"]);
        $filePath = $uploadDir . $fileName;
        if (!move_uploaded_file($_FILES[$fileKey]["tmp_name"], $filePath)) {
            echo "Error uploading " . $fileKey . ".";
            exit;
        }
        return $fileName;
    }

    // Handle Resume Upload
    $resumeFileName = handleFileUpload("resume", "resume_", $resumeDir);
    echo "Resume uploaded successfully: " . $resumeFileName;

    // Handle Cover Letter Upload
    $coverLetterFileName = handleFileUpload("coverLetter", "coverletter_", $coverLetterDir);
    echo "Cover letter uploaded successfully: " . $coverLetterFileName;


    // Insert data into database
    $sql = "INSERT INTO mobileAppApplications (fullName, email, phone, experience, location, resume, coverLetter) 
            VALUES ('$fullName', '$email', '$phone', '$experience', '$location', '$resumePath', '$coverLetterPath')";

    if (mysqli_query($connection, $sql)) {
        $adminEmail = "deaconspublishers@gmail.com";
        $adminPassword = "cjanqzfvgfindzms"; // Use an App Password

        $subjectAdmin = "New Mobile App Application Submitted";
        $messageAdmin = "
        <!DOCTYPE html>
                        <html>
                        <head>
                            <meta charset='UTF-8' />
                            <meta name='viewport' content='width=device-width, initial-scale=1' />
                            <title>New Application Submitted</title>
                            <link
                            rel='stylesheet'
                            href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'
                            />
                            <style>
                            .container {
                                max-width: 600px;
                                margin: 20px auto;
                                background: #faf9f6;
                                padding: 20px;
                                border-radius: 8px;
                            }
                            .logo {
                                text-align: center;
                            }
                            .logo img {
                                width: 200px;
                                display: block;
                                margin: auto;
                            }
                            .title {
                                text-align: center;
                                padding: 10px 0;
                            }
                            .title h1 {
                                font-size: 22px;
                                font-weight: 700;
                                color: #333;
                            }
                            .subtitle {
                                text-align: center;
                                padding: 0 20px;
                                color: #555;
                                font-size: 16px;
                                line-height: 1.5;
                            }
                            .user-info {
                                background: #ffffff;
                                padding: 20px;
                                border-radius: 8px;
                                list-style: none;
                                text-align: left;
                                width: 80%;
                                margin: auto;
                                box-shadow: 5px 7px 5px #f0f0f0;
                            }
                            .user-info li {
                                margin: 0 15px 15px;
                            }
                            .cta {
                                text-align: center;
                                padding: 28px 0;
                            }
                            .cta a {
                                background: #cc6600;
                                color: #fff;
                                text-decoration: none;
                                padding: 12px 24px;
                                border-radius: 6px;
                                font-size: 16px;
                            }
                            .social-icons {
                                text-align: center;
                                padding: 20px 0;
                            }
                            .social-icons a {
                                border-radius: 50%;
                                padding: 10px;
                                background-color: #030101;
                                text-decoration: none;
                                color: #fff;
                                font-size: 20px;
                                display: inline-block;
                                width: 20px;
                                height: 20px;
                                margin: 0 10px;
                                text-align: center;
                            }
                            .social-icons a:hover {
                                color: #ff6600;
                            }
                            .footer {
                                text-align: center;
                                padding: 10px 20px;
                                font-size: 14px;
                                color: #777;
                            }
                            </style>
                        </head>
                        <body>
                            <div class='container'>
                            <!-- Logo -->
                            <div class='logo'>
                                <img
                                src='https://media-hosting.imagekit.io//082d65c80b0d4ac0/DEACONS%20LONG%20LOGO.png?Expires=1834581798&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=fjEV0reThxDTQQLsZg~Bia3A~OuXWrOPHGlrLaZXbtv-P-uPlYxMvRWX26rcZsSG0GngGZrHM6rtjz9yIPio3fv35YfLd~Jj~M2mxiQCRiTt7Dof5PFMBpIvvbRGSPII0H-0NL17A-q3cPWY30CxKneH-TxV53xQCcsQtBkBt-zeARTNzDz2OU-SlXEBvPfa~Hs~X1Xqq2xDkdIV3EcCDPTvB~-PGAyeERZya6sRqvp7CGwHxEEPVjoI3PqHkOXIee0yFlSRlDvcm9XTQVZ6YlmrVEfrdm59UTWe~GikOxiqoKrXCfMJ5KMUgBnTy-njZ-Za9vqHjDD3r0PUQYdeVw__'
                                alt='Logo'
                                />
                            </div>

                            <!-- Title -->
                            <div class='title'>
                                <h1>New Application Submitted</h1>
                            </div>

                            <!-- Subtitle -->
                            <div class='subtitle'>
                                <p>A new application has been submitted.</p>
                            </div>

                            <!-- User Information -->
                             <ul class='user-info'>
                                    <li><strong>Name:</strong> $fullName </li>
                                    <li><strong>Email Address:</strong> $email </li>
                                    <li><strong>Phone NUmber:</strong> $phone</li>
                                    <li><strong>Years of Experience:</strong> $experience </li>
                                    <li><strong>CV:</strong> <a href='http://localhost/deaconspublishers/backends/$resumeFileName'>Download CV</a></li>
                                    <li><strong>Cover Letter:</strong> <a href='http://localhost/deaconspublishers/uploads/marketing/$coverLetterFileName'>Download Cover Letter</a></li>
                                    <li><strong>Preferred Work Location:</strong>  $location</li>
                                </ul>

                            <!-- Social Icons -->
                            <div class='social-icons'>
                                <a href='https://www.facebook.com/Deaconspublishers/'
                                ><img
                                src='https://media-hosting.imagekit.io//03c17b5e969d4f7a/facebook-circle-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=VUEXWJ6LUsCA-~tM5GpE766epiXTJCCNkzIqVgLv3Bh~b5GNz1JKxjRJsR4ggvmMmdM1MPXGH91scopgd6Tac3oRhYWHQzQrjaMZNaNPQ9VeEgiUWhhSTrn~FtWvLmFAfd8ePzo5-ExG18EaSXneJqQlxz55gwC~J-0LsHbEojPii3yc47uqfUnVyVYg8cd-S4VpcW4T3zUg~7CHJVQBG~6rNQdQCeE5OW600k~qfVBJ2HCU9771UyMRepjB6MIigWJnZLypCPcL5g572gRk2GzydQFhjm1rvkJ-KJjFlln0cfbWwhdx-NXZSm7QguHX9Sdz~QRBkxgt6xT3IB32HA__'
                                alt='facbook logo'
                                /></a>
                                <a href='https://x.com/DeaconsPub/'><img
                                src='https://media-hosting.imagekit.io//fa02d3f38ddb48cb/twitter-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=DK41GXJPfmHrFVqVotHrwCaKOflVedp1jaV1Pt3FK3lRzb7q0W1dDBMNx377NofayVElZYHYbiZCphrFj3wlKLsj26~ONxOVJRzkbaQ1Zm39AQX5ujX5ST83W51tUCN63UwKG8edgK0QbZzo9DEFKFwRu6xw12ilfZgeXFbjGyxdbKdjlyuzRSnNCxFRWg207G6QxBECdjuiVtVMf70K6z16cVySXVeSVKuqBrEyqZ9z1uxT8HNBboP5Sr~2titZkWeYtodgMgXmJIBsrCDxwXYNzfcprRjM~9oOQobnXzqcfZ37VrpDNRwyOLMIp4eL3YLhDFpare6IU3gZHh6hrQ__'
                                alt='twitter Logo'
                                /></a>
                                <a href='https://www.tiktok.com/@deacons_publishers'
                                ><img
                                src='https://media-hosting.imagekit.io//9907d3a857b14450/tiktok-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=ziMUqyeQtW8mv8WlLITQX0KIjjIfdZChFLB1yqcQEQzrxjxtC0-KNe14gvTlY1b-v4GX4XYfoPn6q9CeFEymQlQvzDlzR3-3L5QApnI1iyPR01PT4RA685pN0wPf4hZphQ12Rx2RLOGerwG2W-fVgP9j11tR4tyknTxJ6kexdsANwhI7ekW9YuGmu3D6SP92mNHeXIZ5YHxSpCzohQpwi~wzjk2owIR02Ymy965TXDFsEa5mtDHzpDARyEKFzWIj-4vXD-ULQnC52cArzZNM4w4xVuwUZsXwNwG72hfEUP1ayEDIXsexGEpKzsTDmTYaxQBULet86q2QdzZ9vFkqaQ__'
                                alt='tiktok Logo'
                                /></a>
                                <a href='https://www.instagram.com/deacons_publishers/'
                                ><img
                                src='https://media-hosting.imagekit.io//2c811abdfc4a4a42/instagram-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=fxUF7Wez2hEJbO2miSilFppdz387lp-E3uf9tsfsr8X7vCDGpXqT9TLQd8G9-FwbiQ90JT28dY4gupcBXjA-sl6c0OR~00yP-FORDYK8H710ZvTMCSBnjMaNXmfpXSIvztyGNWg24vLg3w0hFp-3Z2b-6Lze-jqJuB984UDHoZcQpydvLPOprxWkoGo5SLkEGVCJAuV9bGalCmqHc2ll0fblE3YqxFVcJ9cptlhktCcWAIhjopABqPOw6OyfSeL4elhBUv2pNEMtWZqYiQ0R9MYdovpGdwn6qAxz41xr6ryH17osZ5~evLighD6yfcFRVbqCU0Kx9acLMvzXY9QQyQ__'
                                alt='instagram Logo'
                                /></a>
                                <a href='https://www.youtube.com/@deaconspublishers/'
                                ><img
                                src='https://media-hosting.imagekit.io//60e6bb8bb4d04b44/youtube-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=HkHX3lDYjmAhbrzCeRB-WJI8JToXb0zhoRgm0Z6YjWFs-7aBwRcNkpFSsy-Uvc3DA9jaHpoywRHM4Dh7dg6tsDwmm776OGWg2Iw2ligCCv8atAQDVJeWdWLU4QMOkyaTihzZatzfQTXLCGAeWrDcLK1B0juTfB8cY~Go1vtuNqlFMxaX19I6lexQKLHhlNFGWD~HcCPlqlT0-jXIwYlLuu--Nzg3dvxAT1KH3O0EidKXlRyTJBRTwoUDV4ozCH0hN3GDik5YmS1qk~VfNntGt0-CDtdqZBSwozMYwEk8tRoVd1oCuwuaV9dp3JTD0nu5gYCsBdgtF3YVS3YEACMfeA__'
                                alt='youtube Logo'
                                /></a>
                            </div>

                            <!-- Footer -->
                            <div class='footer'>
                                <p>
                                Grow your business with us. Strategic Planning: Our experienced team
                                will work closely with you to develop a tailored growth strategy that
                                aligns with your goals.
                                </p>
                            </div>
                            </div>
                        </body>
                        </html>
                        ";

        $subjectUser = "Application Received - Deacons Publishers";
        $messageUser = "
        <!DOCTYPE html>
                        <html>
                        <head>
                            <meta charset='UTF-8' />
                            <meta name='viewport' content='width=device-width, initial-scale=1' />
                            <title>Email Template</title>
                                <link
                                    href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'
                                    rel='stylesheet'
                                    integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'
                                    crossorigin='anonymous'
                                    />
                            <style>
                            
                            .container {
                                max-width: 600px;
                                margin: 20px auto;
                                background: #faf9f6;
                                padding: 20px;
                                border-radius: 8px;
                            }
                            .logo {
                                text-align: center;
                            }
                            .logo img {
                                width: 200px;
                                display: block;
                                margin: auto;
                            }
                            .title {
                                text-align: center;
                                padding: 10px 0;
                            }
                            .title h1 {
                                font-size: 22px;
                                font-weight: 700;
                                color: #333;
                            }
                            .subtitle {
                                text-align: center;
                                padding: 0 20px;
                                color: #555;
                                font-size: 16px;
                                line-height: 1.5;
                            }
                            .user-info {
                                background: #ffffff;
                                padding: 20px;
                                border-radius: 8px;
                                list-style: none;
                                text-align: left;
                                width: 80%;
                                margin: auto;
                                box-shadow: 5px 7px 5px #f0f0f0;
                            }
                            .user-info li {
                                margin: 0 15px 15px;
                            }
                            .cta {
                                text-align: center;
                                padding: 28px 0;
                            }
                            .cta a {
                                background: #cc6600;
                                color: #fff;
                                text-decoration: none;
                                padding: 12px 24px;
                                border-radius: 6px;
                                font-size: 16px;
                            }
                            .social-icons {
                                text-align: center;
                                padding: 20px 0;
                            }
                            .social-icons a {
                                border-radius: 50%;
                                padding: 10px;
                                background-color: #030101;
                                text-decoration: none;
                                color: #fff;
                                font-size: 20px;
                                display: inline-block;
                                width: 20px;
                                height: 20px;
                                margin: 0 10px;
                                text-align: center;
                            }
                            .social-icons a:hover {
                                color: #ff6600;
                            }
                            .footer {
                                text-align: center;
                                padding: 10px 20px;
                                font-size: 14px;
                                color: #777;
                            }
                            </style>
                        </head>
                        <body>
                            <div class='container'>
                            <!-- Logo -->
                            <div class='logo'>
                                <img
                                src='https://media-hosting.imagekit.io//082d65c80b0d4ac0/DEACONS%20LONG%20LOGO.png?Expires=1834581798&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=fjEV0reThxDTQQLsZg~Bia3A~OuXWrOPHGlrLaZXbtv-P-uPlYxMvRWX26rcZsSG0GngGZrHM6rtjz9yIPio3fv35YfLd~Jj~M2mxiQCRiTt7Dof5PFMBpIvvbRGSPII0H-0NL17A-q3cPWY30CxKneH-TxV53xQCcsQtBkBt-zeARTNzDz2OU-SlXEBvPfa~Hs~X1Xqq2xDkdIV3EcCDPTvB~-PGAyeERZya6sRqvp7CGwHxEEPVjoI3PqHkOXIee0yFlSRlDvcm9XTQVZ6YlmrVEfrdm59UTWe~GikOxiqoKrXCfMJ5KMUgBnTy-njZ-Za9vqHjDD3r0PUQYdeVw__'
                                alt='Logo'
                                />
                            </div>

                            <!-- Title -->
                            <div class='title'>
                                <h1>Your Journey Begins Here!</h1>
                            </div>

                            <!-- Subtitle -->
                            <div class='subtitle'>
                                <p>
                                Dear $fullName,<br /><br />
                                Thank you for submitting your application. We truly appreciate your
                                interest in joining our team. We are excited to review your
                                credentials and will be in touch with you shortly. In the meantime, if
                                you have any questions, please feel free to reach out to us.<br /><br />
                                Best regards,<br />
                                Deacons Publishers
                                </p>
                            </div>

                            <!-- Social Icons -->
                             <div class='social-icons'>
                                    <a href='https://www.facebook.com/Deaconspublishers/'
                                    ><img
                                    src='https://media-hosting.imagekit.io//03c17b5e969d4f7a/facebook-circle-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=VUEXWJ6LUsCA-~tM5GpE766epiXTJCCNkzIqVgLv3Bh~b5GNz1JKxjRJsR4ggvmMmdM1MPXGH91scopgd6Tac3oRhYWHQzQrjaMZNaNPQ9VeEgiUWhhSTrn~FtWvLmFAfd8ePzo5-ExG18EaSXneJqQlxz55gwC~J-0LsHbEojPii3yc47uqfUnVyVYg8cd-S4VpcW4T3zUg~7CHJVQBG~6rNQdQCeE5OW600k~qfVBJ2HCU9771UyMRepjB6MIigWJnZLypCPcL5g572gRk2GzydQFhjm1rvkJ-KJjFlln0cfbWwhdx-NXZSm7QguHX9Sdz~QRBkxgt6xT3IB32HA__'
                                    alt='facbook logo'
                                    /></a>
                                    <a href='https://x.com/DeaconsPub/'><img
                                    src='https://media-hosting.imagekit.io//fa02d3f38ddb48cb/twitter-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=DK41GXJPfmHrFVqVotHrwCaKOflVedp1jaV1Pt3FK3lRzb7q0W1dDBMNx377NofayVElZYHYbiZCphrFj3wlKLsj26~ONxOVJRzkbaQ1Zm39AQX5ujX5ST83W51tUCN63UwKG8edgK0QbZzo9DEFKFwRu6xw12ilfZgeXFbjGyxdbKdjlyuzRSnNCxFRWg207G6QxBECdjuiVtVMf70K6z16cVySXVeSVKuqBrEyqZ9z1uxT8HNBboP5Sr~2titZkWeYtodgMgXmJIBsrCDxwXYNzfcprRjM~9oOQobnXzqcfZ37VrpDNRwyOLMIp4eL3YLhDFpare6IU3gZHh6hrQ__'
                                    alt='twitter Logo'
                                    /></a>
                                    <a href='https://www.tiktok.com/@deacons_publishers'
                                    ><img
                                    src='https://media-hosting.imagekit.io//9907d3a857b14450/tiktok-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=ziMUqyeQtW8mv8WlLITQX0KIjjIfdZChFLB1yqcQEQzrxjxtC0-KNe14gvTlY1b-v4GX4XYfoPn6q9CeFEymQlQvzDlzR3-3L5QApnI1iyPR01PT4RA685pN0wPf4hZphQ12Rx2RLOGerwG2W-fVgP9j11tR4tyknTxJ6kexdsANwhI7ekW9YuGmu3D6SP92mNHeXIZ5YHxSpCzohQpwi~wzjk2owIR02Ymy965TXDFsEa5mtDHzpDARyEKFzWIj-4vXD-ULQnC52cArzZNM4w4xVuwUZsXwNwG72hfEUP1ayEDIXsexGEpKzsTDmTYaxQBULet86q2QdzZ9vFkqaQ__'
                                    alt='tiktok Logo'
                                    /></a>
                                    <a href='https://www.instagram.com/deacons_publishers/'
                                    ><img
                                    src='https://media-hosting.imagekit.io//2c811abdfc4a4a42/instagram-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=fxUF7Wez2hEJbO2miSilFppdz387lp-E3uf9tsfsr8X7vCDGpXqT9TLQd8G9-FwbiQ90JT28dY4gupcBXjA-sl6c0OR~00yP-FORDYK8H710ZvTMCSBnjMaNXmfpXSIvztyGNWg24vLg3w0hFp-3Z2b-6Lze-jqJuB984UDHoZcQpydvLPOprxWkoGo5SLkEGVCJAuV9bGalCmqHc2ll0fblE3YqxFVcJ9cptlhktCcWAIhjopABqPOw6OyfSeL4elhBUv2pNEMtWZqYiQ0R9MYdovpGdwn6qAxz41xr6ryH17osZ5~evLighD6yfcFRVbqCU0Kx9acLMvzXY9QQyQ__'
                                    alt='instagram Logo'
                                    /></a>
                                    <a href='https://www.youtube.com/@deaconspublishers/'
                                    ><img
                                    src='https://media-hosting.imagekit.io//60e6bb8bb4d04b44/youtube-fill.png?Expires=1835613779&Key-Pair-Id=K2ZIVPTIP2VGHC&Signature=HkHX3lDYjmAhbrzCeRB-WJI8JToXb0zhoRgm0Z6YjWFs-7aBwRcNkpFSsy-Uvc3DA9jaHpoywRHM4Dh7dg6tsDwmm776OGWg2Iw2ligCCv8atAQDVJeWdWLU4QMOkyaTihzZatzfQTXLCGAeWrDcLK1B0juTfB8cY~Go1vtuNqlFMxaX19I6lexQKLHhlNFGWD~HcCPlqlT0-jXIwYlLuu--Nzg3dvxAT1KH3O0EidKXlRyTJBRTwoUDV4ozCH0hN3GDik5YmS1qk~VfNntGt0-CDtdqZBSwozMYwEk8tRoVd1oCuwuaV9dp3JTD0nu5gYCsBdgtF3YVS3YEACMfeA__'
                                    alt='youtube Logo'
                                    /></a>
                                </div>
                            <!-- Footer -->
                            <div class='footer'>
                                <p>
                                Grow your business with us. Strategic Planning: Our experienced team
                                will work closely with you to develop a tailored growth strategy that
                                aligns with your goals.
                                </p>
                            </div>
                            </div>
                        </body>
                        </html>
                        ";

        // Send Emails using PHPMailer

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $adminEmail;
            $mail->Password = $adminPassword;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Email to Admin
            $mail->setFrom($adminEmail, 'Deacons Publishers');
            $mail->addAddress($adminEmail);
            $mail->isHTML(true);
            $mail->Subject = $subjectAdmin;
            $mail->Body = $messageAdmin;
            $mail->send();

            // Email to Applicant
            $mail->clearAddresses();
            $mail->addAddress($email);
            $mail->Subject = $subjectUser;
            $mail->Body = $messageUser;
            $mail->send();

            echo "Application submitted successfully. Check your email for confirmation.";
        } catch (Exception $e) {
            echo "Error sending email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Database Error: " . mysqli_error($connection);
    }
} else {
    echo "Error: Invalid request.";
}

mysqli_close($connection);
