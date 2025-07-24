<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teaching Career || Deacons Publishers</title>
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
                    <h2>Educational Department</h2>
                    <h5>Experienced Teacher (All Subjects: Basic & Senior Secondary Level)</h5>
                </div>
                <div class="text">
                    <p data-aos="fade-up" data-aos-delay="100">
                        Deacons Publishers seeks experienced and highly skilled teachers for both basic and senior secondary educational levels. Teachers will be responsible for preparing students for academic success by delivering engaging lessons that align with Deacons Publishers' educational resources, including the Prep50 curriculum. The ideal candidates will demonstrate an ability to inspire and motivate students, ensuring they excel in both theory and practical learning.
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
                        <li>Develop and deliver lesson plans that align with curriculum guidelines and educational standards</li>
                        <li>Use innovative teaching techniques to engage students and foster a positive learning environment</li>
                        <li>Monitor and assess student progress, providing timely feedback and support</li>
                        <li>Maintain classroom discipline and encourage positive behavior</li>
                        <li>Collaborate with other teachers and staff to ensure a holistic approach to student development</li>
                        <li>Participate in professional development opportunities to enhance teaching skills</li>
                    </ul>
                </div>
                <div class="Requirements">
                    <h2>Requirements</h2>
                    <ul data-aos="fade-up" data-aos-delay="100">
                        <li>Bachelor’s degree in Education or related field</li>
                        <li>Proven experience as a teacher in basic or senior secondary education</li>
                        <li>Strong knowledge of subjects taught and effective teaching methods</li>
                        <li>Excellent communication and interpersonal skills</li>
                        <li>Passionate about education and student development</li>
                        <li>Ability to work collaboratively in a team environment</li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="right-side">
            <div class="form-container">
                <form id="applicationForm" method="POST" enctype="multipart/form-data">
                    <!-- Step 1: Full Name -->
                    <div class="form-step active">
                        <h2>Full Name</h2>
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
                        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
                    </div>

                    <!-- Step 4: Subject(s) of Expertise -->
                    <div class="form-step">
                        <h2>Subject(s) of Expertise</h2>
                        <input type="text" id="subjects" name="subjects" placeholder="e.g., Mathematics, English, Chemistry" required>
                    </div>

                    <!-- Step 5: Preferred Teaching Level -->
                    <div class="form-step">
                        <h2>Preferred Teaching Level</h2>
                        <select name="teachingLevel" id="teachingLevel" required>
                            <option value="">Select your preferred teaching level</option>
                            <option value="Basic">Basic</option>
                            <option value="Senior Secondary">Senior Secondary</option>
                        </select>
                    </div>

                    <!-- Step 6: Years of Teaching Experience -->
                    <div class="form-step">
                        <h2>Years of Teaching Experience</h2>
                        <input type="number" id="teachingExperience" name="teachingExperience" placeholder="Enter the number of years" required>
                    </div>

                    <!-- Step 7: Upload CV/Resume -->
                    <div class="form-step">
                        <h2>Upload CV/Resume</h2>
                        <input type="file" id="cv" name="cv" required>
                    </div>

                    <!-- Step 8: Highest Level of Education -->
                    <div class="form-step">
                        <h2>Highest Level of Education Attained</h2>
                        <input type="text" id="educationLevel" name="educationLevel" placeholder="Enter your highest level of education" required>
                    </div>

                    <!-- Step 9: Availability to Start -->
                    <div class="form-step">
                        <h2>Availability to Start</h2>
                        <input type="date" id="startDate" name="startDate" required>
                    </div>

                    <!-- Step 10: Reason for Joining -->
                    <div class="form-step">
                        <h2>Why do you want to join Deacons Publishers?</h2>
                        <textarea name="joinReason" id="joinReason" rows="4" placeholder="Enter your answer" required></textarea>
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
        $('#applicationForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let formData = new FormData(this); // Use FormData to handle file uploads

            $.ajax({
                type: 'POST',
                url: './backends/teaching.php',
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
                            window.location.href = 'Teaching.php';
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