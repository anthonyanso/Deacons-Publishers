<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Editing Career || Deacons Publishers</title>
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
    <link
        href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
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
                    <h2>Creative Department</h2>
                    <h5>Video Editor</h5>
                </div>
                <div class="text">
                    <p data-aos="fade-up" data-aos-delay="100">
                        We are seeking a creative video editor to produce a short promotional video tailored for Facebook and Instagram. You will be provided with photos, video clips, and text, and your task will be to combine these elements into an engaging video that fits various formats for social media. The ideal candidate should have experience in social media video production and a strong eye for detail. If you are passionate about storytelling through video, we would love to see your work!
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
                        <li>Edit and assemble raw footage into polished, professional videos</li>
                        <li>Collaborate with the content team to ensure videos meet project goals and deadlines</li>
                        <li>Incorporate graphics, audio, and special effects to enhance video content</li>
                        <li>Ensure that all videos maintain a consistent style and tone that aligns with the brand</li>
                        <li>Optimize video content for various platforms (e.g., YouTube, social media, internal training)</li>
                    </ul>
                </div>
                <div class="Requirements">
                    <h2>Requirements</h2>
                    <ul data-aos="fade-up" data-aos-delay="100">
                        <li>Proven experience as a video editor, with a strong portfolio showcasing your work</li>
                        <li>Proficiency in video editing software such as Adobe Premiere Pro, Final Cut Pro, or similar tools</li>
                        <li>Knowledge of color grading, sound mixing, and special effects</li>
                        <li>Strong attention to detail and the ability to meet deadlines</li>
                        <li>Creative and able to work independently or in a team setting</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="right-side">
            <div class="form-container">
                <form id="videoEditorApplicationForm" method="post" enctype="multipart/form-data">
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
        $('#videoEditorApplicationForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this); // Use FormData to handle file uploads

            $.ajax({
                type: 'POST',
                url: './backends/videoEditor.php',
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
                            window.location.href = 'videoEditing.php';
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