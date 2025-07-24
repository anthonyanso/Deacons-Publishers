<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Digital Marketer Career || Deacons Publishers</title>
    <link href="./assets/css/careerRole.css" rel="stylesheet" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="./assets/img/logo/ROUNDED DEACONS LOGO.png" type="image/x-icon" />
    <!-- icons -->
    <link
        href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css"
        rel="stylesheet" />
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="./assets/vendor/aos/aos.css" />
    <script src="./assets/vendor/aos/aos.js"></script>
    <!-- sweet alert and ajax -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

<body>
    <?php
    // Include the header
    require("./include/header1.php");
    ?>
    <div class="container" id="home">

        <div class="left-side">
            <section class="role_description">
                <div class="title" data-aos="fade-up" data-aos-delay="100">
                    <h2>Marketing Department</h2>
                    <h5>Digital Marketer</h5>
                </div>
                <div class="text">
                    <p data-aos="fade-up" data-aos-delay="100">
                        We are seeking a skilled Product Marketing professional to drive user acquisition through innovative social media campaigns and digital media strategies. The ideal candidate will have strong creative writing abilities to craft compelling messaging and engage our target audience effectively. If you have a proven track record in marketing and a passion for driving growth, we want to hear from you!
                    </p>
                    <div class="icons">
                        <div class="icon1">
                            <div class="icon">
                                <i class="ri-time-line"></i>
                            </div>
                            <p>Flexible work arrangements</p>
                        </div>
                        <div class="icon1">
                            <div class="icon">
                                <i class="ri-team-line"></i>
                            </div>
                            <p>dynamic work environment</p>
                        </div>
                        <div class="icon1">
                            <div class="icon">
                                <i class="ri-book-open-line"></i>
                            </div>
                            <p>learning Reasources</p>
                        </div>
                    </div>
                </div>
                <div class="Responsibilities">
                    <h2>Responsibilities</h2>
                    <ul data-aos="fade-up" data-aos-delay="100">
                        <li>Develop and execute digital marketing strategies, including SEO, email marketing, and online advertising</li>
                        <li>Manage social media platforms, create content calendars, and engage with online communities</li>
                        <li>Analyze website traffic and social media performance, adjusting strategies for optimal results</li>
                        <li>Collaborate with content creators to produce digital content (blogs, videos, etc.) that aligns with brand messaging</li>
                        <li>Manage Google Ads, Facebook Ads, and other digital ad platforms to increase conversions</li>
                        <li>Stay up-to-date with the latest digital marketing trends and technologies</li>
                    </ul>
                </div>
                <div class="Requirements">
                    <h2>Requirements</h2>
                    <ul data-aos="fade-up" data-aos-delay="100">
                        <li>Bachelor’s degree in Digital Marketing, Marketing, or a related field</li>
                        <li>Proven experience in digital marketing or a similar role</li>
                        <li>Strong understanding of SEO, SEM, email marketing, and social media strategies</li>
                        <li>Experience with Google Analytics, Google Ads, and other digital marketing tools</li>
                        <li>Creative mindset with excellent communication and analytical skills</li>
                        <li>Ability to work in a fast-paced environment and meet deadlines</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="right-side">
            <div class="form-container">
                <form id="digitalMarketingApplicationForm" method="post" enctype="multipart/form-data">
                    <!-- Step 1: Full Name -->
                    <div class="form-step active">
                        <h2 data-aos="fade-up" data-aos-delay="100">Full Name</h2>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>

                    <!-- Step 2: Email Address -->
                    <div class="form-step">
                        <h2>Email Address</h2>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>

                    <!-- Step 3: Phone Number -->
                    <div class="form-step">
                        <h2>Phone Number</h2>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Step 4: Current Address -->
                    <div class="form-step">
                        <h2>Current Address</h2>
                        <textarea id="currentAddress" name="currentAddress" rows="3" placeholder="Enter your current address" required></textarea>
                    </div>

                    <!-- Step 5: Position Applied For -->
                    <div class="form-step">
                        <h2>Position Applied For</h2>
                        <input type="text" id="position" name="position" placeholder="Enter the position you're applying for" required>
                    </div>

                    <!-- Step 6: Preferred Work Location -->
                    <div class="form-step">
                        <h2>Preferred Work Location</h2>
                        <select id="workLocation" name="workLocation" required>
                            <option value="">Select your preferred work location</option>
                            <option value="Remote">Remote</option>
                            <option value="On-Site">On-Site</option>
                        </select>
                    </div>

                    <!-- Step 7: Availability to Start -->
                    <div class="form-step">
                        <h2>Availability to Start</h2>
                        <input type="date" id="startDate" name="startDate" required>
                    </div>

                    <!-- Step 8: Highest Level of Education -->
                    <div class="form-step">
                        <h2>Highest Level of Education</h2>
                        <input type="text" id="education" name="education" placeholder="Enter your highest level of education" required>
                    </div>

                    <!-- Step 9: Years of Experience in Digital Marketing -->
                    <div class="form-step">
                        <h2>Years of Experience in Digital Marketing</h2>
                        <input type="number" id="experience" name="experience" placeholder="Enter the number of years" required>
                    </div>

                    <!-- Step 10: Key Skills -->
                    <div class="form-step">
                        <h2>Key Skills</h2>
                        <textarea id="skills" name="skills" rows="4" placeholder="Enter your key skills (e.g., SEO, PPC, social media management)" required></textarea>
                    </div>

                    <!-- Step 11: Upload CV -->
                    <div class="form-step">
                        <h2>Upload CV/Resume</h2>
                        <input type="file" id="cv" name="cv" required>
                    </div>

                    <!-- Step 12: Upload Cover Letter -->
                    <div class="form-step">
                        <h2>Upload Cover Letter</h2>
                        <input type="file" id="coverLetter" name="coverLetter" required>
                    </div>

                    <!-- Step 13: Why do you want to work with Deacons Publishers? -->
                    <div class="form-step">
                        <h2>Why do you want to work with Deacons Publishers?</h2>
                        <textarea id="whyWork" name="whyWork" rows="4" placeholder="Briefly describe why you want to work with Deacons Publishers" required></textarea>
                    </div>

                    <!-- Step 14: Most Impactful Digital Marketing Campaign -->
                    <div class="form-step">
                        <h2>What is your most impactful digital marketing campaign?</h2>
                        <textarea id="impactfulCampaign" name="impactfulCampaign" rows="4" placeholder="Share an example or provide links" required></textarea>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="form-buttons">
                        <button type="button" id="prevButton">Previous</button>
                        <button type="button" id="nextButton">Next</button>
                        <button type="submit" id="submitButton" style="display: none;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    // Include the header
    require("./include/footer.php");
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#digitalMarketingApplicationForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this); // Use FormData to handle file uploads

            $.ajax({
                type: 'POST',
                url: './backends/digitalMarketing.php',
                data: formData,
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting contentType
                success: function(response) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 8000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
                        }
                    });

                    if (response.trim().startsWith("Error")) {
                        Toast.fire({
                            icon: "error",
                            title: response.trim()
                        });
                    } else {
                        Toast.fire({
                            icon: "success",
                            title: "You have successfully submitted your application!"
                        });

                        // Redirect after success
                        setTimeout(function() {
                            window.location.href = 'digitalMarketing.php';
                        }, 3000);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: ", error);
                    Swal.fire({
                        icon: "error",
                        title: "Submission failed!",
                        text: "Please try again later."
                    });
                }
            });
        });
    </script>
    <script>
        // AOS
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });

        // Select form steps and buttons
        const formSteps = document.querySelectorAll(".form-step");
        const nextButton = document.querySelector("#nextButton");
        const prevButton = document.querySelector("#prevButton");
        const submitButton = document.querySelector("#submitButton");

        let currentStep = 0; // Keeps track of the current step

        // Function to update form steps visibility
        function updateFormSteps() {
            formSteps.forEach((step, index) => {
                step.style.display = index === currentStep ? "block" : "none";
            });

            prevButton.style.display = currentStep > 0 ? "block" : "none";
            nextButton.style.display = currentStep < formSteps.length - 1 ? "block" : "none";
            submitButton.style.display = currentStep === formSteps.length - 1 ? "block" : "none";
        }

        nextButton.addEventListener("click", () => {
            if (currentStep < formSteps.length - 1) {
                currentStep++;
                updateFormSteps();
            }
        });

        prevButton.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                updateFormSteps();
            }
        });

        updateFormSteps(); // Ensure correct initial state
    </script>
</body>

</html>