<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="callback.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1.0">
</head>
<body>
    <?php
    ?>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SOC</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Organizations</a></li>
                    <li><a href="#">Clubs</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>Student <br><span>Organizations &</span> <br>Clubs</h1>
            <p class="par">
                SOC is designed  to help the  STI students to access the different <br>organizations and clubs. To allow students interactive  activities and assessments<br> for effective and accessible log in anytime.
                Students will be able to register <br>digitally and save time.
            </p>

            <button class="cn"><a href="#">Learn more</a></button>

            <div class="form">
                <img src="STI logo.jpg" style="width: 100px; height: 75px; padding: 60px 50px 0px 75px">

                <button id="myBtn" class="btnn">
                    <img src="ms.png" style="width: 12px; height: 12px; padding: 0px 5px 0px 0px">
                    <a href="signin.php">SIGN IN WITH YOUR O365 ACCOUNT</a>
                </button>

                <p class="link">
                    Having trouble logging in?<br>
                    <a href="#">Click here
                </p>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SOC</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Organizations</a></li>
                    <li><a href="#">Clubs</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>Student <br><span>Organizations &</span> <br>Clubs</h1>
            <p class="par">
                SOC is designed  to help the  STI students to access the different <br>organizations and clubs. To allow students interactive  activities and assessments<br> for effective and accessible log in anytime.
                Students will be able to register <br>digitally and save time.
            </p>

            <button class="cn"><a href="#">Learn more</a></button>

            <div class="form">
                <img src="STI logo.jpg" style="width: 100px; height: 75px; padding: 60px 50px 0px 75px">

                <button id="myBtn" class="btnn">
                    <img src="ms.png" style="width: 12px; height: 12px; padding: 0px 5px 0px 0px">
                    <a href="signin.php">SIGN IN WITH YOUR O365 ACCOUNT</a>
                </button>

                <p class="link">
                    Having trouble logging in?<br>
                    <a href="#">Click here
                </p>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Registration</h3>
            <h4>Personal Details</h4>
            <form action = "new_user.php" method = "post">
                <div class="registree-container">
                    <div>
                        <label for="studentid">Student ID</label><br>
                        <input type="text" id="studentid" name="studentid" required><br>
                    </div>

                    <div>
                        <label for="lname">Last Name</label><br>
                        <input type="text" id="lname" name="lname" required><br>
                    </div>

                    <div>
                        <label for="fname">First Name</label><br>
                        <input type="text" id="fname" name="fname" required><br>
                    </div>

                    <div>
                        <label for="mi">Middle Initial</label><br>
                        <input type="text" id="mi" name="mi" required><br>
                    </div>

                    <div>
                        <label for="courseStrand">Course/Strand</label><br>
                        <select id="course" name="course" class="access-dropdown">
                            <option value="BSBA">Bachelor of Science in Business Administration</option>
                            <option value="BSHM">Bachelor of Science in Hotel Management</option>
                            <option value="BSIT">Bachelor of Science in Information Technology</option>
                            <option value="ITMAWD">Information Technology (Mobile and Web Development)</option>
                            <option value="CCTEC">CCTEC</option>
                            <option value="CUARTS">CUARTS</option>
                            <option value="ABM">Administration and Business Management</option>
                            <option value="HUMSS">Humanities</option>
                        </select>
                    </div>

                    <div>
                        <label for="mobile">Contact No</label><br>
                        <input type="text" id="mobile" name="mobile" required><br>
                    </div>

                     <div>
                        <label for="mobile">E-mail address</label><br>
                        <input type="text" id="email" name="email" value = "<?php echo $user->data->getUserPrincipalName() ?>" required readonly><br>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btnn"><span class="spanHover">Submit</span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
