<?php
session_start();
$stu_id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Join Orgs and Clubs</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Stylesheet -->

    <link rel="stylesheet" href="firstLogStyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


    <div class="container-rectangle">
        <div class="frame-bar">
            <p class="frame-bar-text"> WELCOME TO STICA ORGS & CLUBS</p>
        </div>
        <div class="desc-text-container">
            <p class="desc-text">Choose a club to join</p>
        </div>
        <div class="divider">
        </div>

        <form action="updtOrg.php" method="post">
            <section class="club-select-section">
                <div class="tile">
                    <input type="checkbox" name="ACE" id="ACE">
                    <label for="ACE">
                        <img class="clubs-img" src="./assets/Blog-post/ace.jpg">
                        <h6>A.C.E</h6>
                    </label>
                </div>

                <div class="tile">
                    <input type="checkbox" name="Coder" id="Coder">
                    <label for="Coder">
                        <img class="clubs-img" src="./assets/Blog-post/coders.jpg">
                        <h6>Coder's Club'</h6>
                    </label>
                </div>

                <div class="tile">
                    <input type="checkbox" name="Teatro" id="Teatro">
                    <label for="Teatro">
                        <img class="clubs-img" src="./assets/Blog-post/teatro.jpg">
                        <h6>Teatro Versatil</h6>
                    </label>
                </div>

                <div class="tile">
                    <input type="checkbox" name="Groovers" id="Groovers">
                    <label for="Groovers">
                        <img class="clubs-img" src="./assets/Blog-post/sg.jpg">
                        <h6>South Groovers</h6>
                    </label>
                </div>

                <div class="submit-container">
                    <button type="submit" name="submit">Submit</button>
                </div>

            </section>
        </form>
    </div>
    <!--
        <div class="container">
            <form action="updtOrg.php" method="post">
                <div class="card-container">
                    <div class="card-row">
                        <a href="#sc-info">
                            <div class="card ace">
                                <input type="checkbox" name="clubs[]" value="Student Council" id="sc">
                                <div class="card-content">Alliance of Camera Enthusiasts</div>
                            </div>
                        </a>
                    </div>
                    <div class="card-row">
                        <a href="#cs-info">
                            <div class="card athlos">
                                <input type="checkbox" name="clubs[]" value="Computer Society" id="cs">
                                <div class="card-content">'Athlos Club'</div>
                            </div>
                        </a>
                    </div>
                    <div class="card-row">
                        <a href="#hms-info">
                            <div class="card coders">
                                <input type="checkbox" name="clubs[]" value="HM Society" id="hms">
                                <div class="card-content">Coder's Club'</div>
                            </div>
                        </a>
                    </div>
                    <a href="#syms-info">
                        <div class="card teatro">
                            <input type="checkbox" name="clubs[]" value="SYMS" id="syms">
                            <div class="card-content">Teatro Versatil</div>
                        </div>
                    </a>
                    <div class="card-row">
                        <a href="#syms-info">
                            <div class="card south-groovers">
                                <input type="checkbox" name="clubs[]" value="SYMS" id="syms">
                                <div class="card-content">South Groovers</div>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="submit-container">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </form>


        </div>

    </div>
    -->
    <!-- //////////////////////////////////////////////////////////////////////// -->

    <div class="arrow-down-container">
        <p class="arrow-label">Get to know more about these organizations to help you choose.</p>
        <div class="arrow-down"></div>
    </div>
    <!--
    <?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'db_soc');

    if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
    }

    // Get the email of the student from the session variable
    $stu_id = $_SESSION['id'];

    // Select the course strand of the student with the given email
    $sql = "SELECT course_strand FROM tbl_students WHERE stud_id = '$stu_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // If the student is found, get the course strand
    $row = mysqli_fetch_assoc($result);
    $course_strand = $row['course_strand'];

    if ($course_strand == 'BSIT') {
    // If the student is in the BSIT course, disable the HM Society and SYMS checkboxes
    echo '
    <script>
        document.getElementById("hms").disabled = true;
        document.getElementById("syms").disabled = true;
    </script>
    ';
    } else if ($course_strand == 'BSBA') {
    // If the student is in the BSIT course, disable the HM Society and SYMS checkboxes
    echo '
    <script>
        document.getElementById("hms").disabled = true;
        document.getElementById("cs").disabled = true;
    </script>
    ';
    } else if ($course_strand == 'BSHM') {
    // If the student is in the BSIT course, disable the HM Society and SYMS checkboxes
    echo '
    <script>
        document.getElementById("syms").disabled = true;
        document.getElementById("cs").disabled = true;
    </script>
    ';
    } else {
    echo 'Invalid email';
    }
    }

    // Close the connection
    mysqli_close($conn);
    ?>
    -->
    <section class="orgs-section-container" id="ace-info">
        <div class="know-more-container fade-in" id="fade-in-element">
            <div class="about-img">
                <img src="./assets/Blog-post/ace.jpg">
            </div>
            <div class="about-text">
                <h2>Alliance of <br>Camera Enthusiasts</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="SCMembers.html" target="_blank" class="btn-body">Learn more</a>
            </div>
        </div>
    </section>

    <section class="orgs-section-container" id="coders-info">
        <div class="know-more-container fade-in" id="fade-in-element">
            <div class="about-text">
                <h2>Coder's<br>Club</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="#" class="btn-body">Learn more</a>
            </div>
            <div class="about-img">
                <img src="./assets/Blog-post/coders.jpg">
            </div>
        </div>
    </section>

    <section class="orgs-section-container" id="teatro-info">
        <div class="know-more-container fade-in" id="fade-in-element">
            <div class="about-img">
                <img src="./assets/Blog-post/teatro.jpg">
            </div>
            <div class="about-text">
                <h2>Teatro <br>Versatil<br>Society</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="#" class="btn-body">Learn more</a>
            </div>
        </div>
    </section>

    <section class="orgs-section-container" id="groovers-info">
        <div class="know-more-container fade-in" id="fade-in-element">
            <div class="about-text">
                <h2>South<br>Groovers</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="#" class="btn-body">Learn more</a>
            </div>
            <div class="about-img">
                <img src="./assets/Blog-post/sg.jpg">
            </div>
        </div>
    </section>



    <br><br>
    <p>This UI does not represent the final result of this project. Design is still subject to change.</p>

    <script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>

    <script>
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        var checkboxArray = Array.prototype.slice.call(checkboxes);
        checkboxArray.forEach(function (checkbox) {
            checkbox.addEventListener('change', function (e) {
                if (this.checked && checkboxArray.filter(function (cb) { return cb.checked; }).length > 1) {
                    this.checked = false;
                }
            });
        });

        const fadeInElements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.intersectionRatio > 0) {
                    entry.target.classList.add('is-visible');
                } else {
                    entry.target.classList.remove('is-visible');
                }
            });
        });

        fadeInElements.forEach((fadeInElement) => {
            observer.observe(fadeInElement);
        });

                                ///////////////////////////////////////////////////////////////

    </script>
</body>
</html>
