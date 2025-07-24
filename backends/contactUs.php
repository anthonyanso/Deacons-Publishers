<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "deacons_publishers";
    private $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function isEmailValid($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function insertData($name, $email, $message)
    {
        $stmt = $this->conn->prepare("INSERT INTO contact_us (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        $stmt->execute();
        $stmt->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header('Content-Type: application/json'); // Set the content type to JSON

    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $message = $_POST['message'] ?? null;

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email address']);
        exit;
    }

    if (!empty($name) && !empty($email) && !empty($message)) {
        $db = new Database();

        if ($db->isEmailValid($email)) {
            $db->insertData($name, $email, $message);

            // Send email to admin
            $adminEmail = "deaconspublishers@gmail.com";
            $adminPassword = "cjanqzfvgfindzms";

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = $adminEmail;
                $mail->Password   = $adminPassword;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                // Construct the email body using the provided template
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
                                    <h1>$name contacted Us!</h1>
                                </div>

                                <!-- Subtitle -->
                                <div class='subtitle'>
                                    <p>A message sent, no fuss, direct to us.</p>
                                </div>

                                <!-- User Information -->
                                <ul class='user-info'>
                                    <li><strong>Name:</strong> $name </li>
                                    <li><strong>Email Address:</strong> $email </li>
                                    <li><strong>Message:</strong> $message</li>
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

                $mail->setFrom($adminEmail, 'Deacons Publishers');
                $mail->addAddress($adminEmail);
                $mail->isHTML(true);
                $mail->Subject = "New Contact Us Message";
                $mail->Body    = $messageAdmin;
                $mail->send();

                echo json_encode(['success' => true, 'message' => 'Data inserted successfully and email sent to admin']);
            } catch (Exception $e) {
                echo json_encode(['success' => false, 'message' => 'Error sending email: ' . $mail->ErrorInfo]);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid email address']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Please fill in all fields']);
    }
}
