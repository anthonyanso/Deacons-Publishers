<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile App Developer Career || Deacons Publishers</title>
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
                    <h2>Developer</h2>
                    <h5>Mobile App Developer</h5>
                </div>
                <div class="text">
                    <p data-aos="fade-up" data-aos-delay="100">
                        We are seeking for a talented and innovative Mobile App Developer to join our team. This role is critical in developing user-friendly, efficient, and scalable mobile applications that enhance our educational offerings and customer experience. You will be responsible for creating high-quality applications, ensuring seamless functionality, and contributing to the company's technological growth.
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
                        <li>Design, develop, and maintain mobile applications for Android and iOS platforms</li>
                        <li>Collaborate with the product and design teams to implement app features</li>
                        <li>Write clean, scalable code and ensure the mobile apps are optimized for performance</li>
                        <li>Test and debug mobile apps to ensure smooth functionality</li>
                        <li>Stay updated on the latest trends and technologies in mobile app development</li>
                    </ul>
                </div>
                <div class="Requirements">
                    <h2>Requirements</h2>
                    <ul data-aos="fade-up" data-aos-delay="100">
                        <li>Proven experience as a mobile app developer with a portfolio of mobile apps</li>
                        <li>Proficiency in programming languages such as Java, Swift, Kotlin or React-Native</li>
                        <li>Experience with mobile development frameworks and tools (e.g., Flutter, React Native)</li>
                        <li>Familiarity with RESTful APIs and third-party libraries</li>
                        <li>Strong problem-solving skills and the ability to work independently</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="right-side">
            <div class="form-container">
                <form id="mobileAppApplicationForm" method="post" enctype="multipart/form-data">
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

                    <!-- Step 4: Years of Experience -->
                    <div class="form-step">
                        <h2>Years of Experience</h2>
                        <select id="experience" name="experience" required>
                            <option value="">Select your years of experience</option>
                            <option value="0-1">0-1 Year</option>
                            <option value="2-3">2-3 Years</option>
                            <option value="4-5">4-5 Years</option>
                            <option value="5+">5+ Years</option>
                        </select>
                    </div>

                    <!-- Step 5: Upload Resume -->
                    <div class="form-step">
                        <h2>Upload Your Resume</h2>
                        <input type="file" id="resume" name="resume" accept=".pdf, .doc, .docx" required>
                    </div>

                    <!-- Step 6: Upload Cover Letter -->
                    <div class="form-step">
                        <h2>Upload Cover Letter</h2>
                        <input type="file" id="coverLetter" name="coverLetter" accept=".pdf, .doc, .docx" required>
                    </div>

                    <!-- Step 7: Location -->
                    <div class="form-step">
                        <h2>Location</h2>
                        <select id="location" name="location" required>
                            <option value="">Select location</option>
                            <option value="Remote">Remote</option>
                            <option value="On-Site">On-Site</option>
                        </select>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="form-buttons">
                        <button type="button" id="prevButton" enabled>Previous</button>
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
        $('#mobileAppApplicationForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this); // Use FormData to handle file uploads

            $.ajax({
                type: 'POST',
                url: './backends/mobileApp.php',
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
                            window.location.href = 'mobileApp.php';
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
            // Hide all steps and only show the active one
            formSteps.forEach((step, index) => {
                step.style.display = index === currentStep ? "block" : "none";
            });

            // Update button visibility
            prevButton.style.display = currentStep > 0 ? "block" : "none"; // Show prev if not on first step
            nextButton.style.display = currentStep < formSteps.length - 1 ? "block" : "none"; // Show next if not on last step
            submitButton.style.display = currentStep === formSteps.length - 1 ? "block" : "none"; // Show submit on last step
        }

        // Event listener for Next button
        nextButton.addEventListener("click", () => {
            if (currentStep < formSteps.length - 1) {
                currentStep++;
                updateFormSteps(); // Update the step view
            }
        });

        // Event listener for Previous button
        prevButton.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                updateFormSteps(); // Update the step view
            }
        });

        // Initialize the form steps on page load
        updateFormSteps();
    </script>
</body>

</html>