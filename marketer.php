<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marketer Career || Deacons Publishers</title>
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
                    <h5>Marketer</h5>
                </div>
                <div class="text">
                    <p data-aos="fade-up" data-aos-delay="100">
                        At Deacons Publishers, we are committed to revolutionizing education through innovative resources like PREP50, educational materials, and modern learning solutions. As a marketer, you will play a pivotal role in promoting our products and services, connecting us with educators, students, and institutions. Your creativity, strategic thinking, and customer-focused approach will help drive brand awareness, generate leads, and achieve our growth objectives.
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
                        <li>Develop and implement marketing campaigns across various platforms (digital, print, and social media)</li>
                        <li>Conduct market research to understand customer needs and competitor landscape</li>
                        <li>Manage and optimize advertising budgets to achieve marketing goals</li>
                        <li>Collaborate with the sales team to create strategies that drive conversions and revenue</li>
                        <li>Create content that aligns with the brand's values and engages the target audience</li>
                        <li>Track and report on the performance of marketing campaigns and adjust strategies accordingly</li>
                    </ul>
                </div>
                <div class="Requirements">
                    <h2>Requirements</h2>
                    <ul data-aos="fade-up" data-aos-delay="100">
                        <li>Bachelor's degree in Marketing, Communications, or a related field</li>
                        <li>Proven experience in marketing or brand management</li>
                        <li>Strong understanding of marketing principles and strategies</li>
                        <li>Proficiency in digital marketing tools, including social media platforms, email marketing, and Google Ads</li>
                        <li>Excellent written and verbal communication skills</li>
                        <li>Ability to work independently and as part of a team</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="right-side">
            <div class="form-container">
                <form id="marketingForm" method="POST" enctype="multipart/form-data">
                    <!-- Step 1: Full Name -->
                    <div class="form-step active">
                        <h2 data-aos="fade-up" data-aos-delay="100">Full Name</h2>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>

                    <!-- Step 2: Email -->
                    <div class="form-step">
                        <h2>Email Address</h2>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                    </div>

                    <!-- Step 3: Level -->
                    <div class="form-step">
                        <h2>How would you estimate your level for this position?</h2>
                        <select name="level" id="level" required>
                            <option value="">Select your level</option>
                            <option value="Intern">Intern</option>
                            <option value="Junior">Junior</option>
                            <option value="Middle">Middle</option>
                            <option value="Senior">Senior</option>
                            <option value="Lead">Lead</option>
                            <option value="Head">Head</option>
                            <option value="Chief">Chief</option>
                        </select>
                    </div>

                    <!-- Step 4: English Level -->
                    <div class="form-step">
                        <h2>Your English Level</h2>
                        <select name="englishLevel" id="englishLevel" required>
                            <option value="">Select your English level</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Elementary">Elementary</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Upper Intermediate">Upper Intermediate</option>
                            <option value="Advanced">Advanced</option>
                            <option value="Proficient">Proficient</option>
                        </select>
                    </div>

                    <!-- Step 5: Short Description -->
                    <div class="form-step">
                        <h2>Please include a short description about yourself</h2>
                        <textarea name="description" id="description" rows="4" placeholder="Enter a short description about yourself" required></textarea>
                    </div>

                    <!-- Step 6: Salary Expectation -->
                    <div class="form-step">
                        <h2>What’s your monthly salary expectation?</h2>
                        <input type="number" id="salary" name="salary" placeholder="Enter your expected salary" required>
                    </div>

                    <!-- Step 7: Start Date -->
                    <div class="form-step">
                        <h2>When can you start working for us?</h2>
                        <input type="date" id="startDate" name="startDate" required>
                    </div>

                    <!-- Step 8: Relocation or Remote Work -->
                    <div class="form-step">
                        <h2>Are you open to relocate or only interested in remote work?</h2>
                        <select name="relocation" id="relocation" required>
                            <option value="">Select one option</option>
                            <option value="Relocate">Open to relocation</option>
                            <option value="Remote">Interested only in remote work</option>
                        </select>
                    </div>

                    <!-- Step 9: Additional Information -->
                    <div class="form-step">
                        <h2>Any other information (optional)</h2>
                        <textarea name="additionalInfo" id="additionalInfo" rows="4" placeholder="Enter any additional information"></textarea>
                    </div>

                    <!-- Step 10: Job Offer Source -->
                    <div class="form-step">
                        <h2>Where did you find our offer?</h2>
                        <input type="text" id="offerSource" name="offerSource" placeholder="Enter where you found the job offer" required>
                    </div>

                    <!-- Step 11: Upload CV -->
                    <div class="form-step">
                        <h2>Please upload your CV</h2>
                        <input type="file" id="cv" name="cv" required>
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
        $('#marketingForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: './backends/marketer.php',
                data: formData,
                processData: false,
                contentType: false,
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
                            window.location.href = 'marketer.php';
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
            prevButton.style.display = currentStep > 0 ? "block" : "none";
            nextButton.style.display = currentStep < formSteps.length - 1 ? "block" : "none";
            submitButton.style.display = currentStep === formSteps.length - 1 ? "block" : "none";
        }

        // Event listener for Next button
        nextButton.addEventListener("click", () => {
            if (currentStep < formSteps.length - 1) {
                currentStep++;
                updateFormSteps();
            }
        });

        // Event listener for Previous button
        prevButton.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                updateFormSteps();
            }
        });

        // Initialize the form steps on page load
        updateFormSteps();
    </script>
</body>

</html>