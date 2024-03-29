<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
</head>

<body>
<header>
    <div id ="logo">
        <a href="index.html"><img src="images/fi-logo.png" alt="Demo" width="200"></a>
    </div>

    <h1><a href="index.html">FriendshipLink WebApp</a></h1>

    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
                <a class="dropbtn" href="#">New</a>
                <div class="dropdown-content">
                    <a href="new_student.php">New Student Details</a>
                    <a href="new_host.php">New Host Details</a>
                </div>
            </li>
            <li  class="dropdown">
                <a href="#" class="dropbtn">View</a>
                <div class="dropdown-content">
                <a href="#">View Students </a>
                <a href="#">View Hosts</a>
                <a href="#">View Match</a>
                </div>
            </li>
            <li><a href="#">Create Match</a></li>
            <li><a href="#">Generate Report</a></li>
        </ul>
    </nav>
</header>


    <main>

        <div id="title">
        <header>
            <h2>New Student Details</h2>
        </header>
        </div>

        <span>
            <?php if($_GET['s']) {
                echo '<span style="color: blue;">Record Added! </span>';
        }

        ?>
        </span>
        <br>
        <br>

        <form action="processstudent.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="" required/>
            <br>
            <br>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="" required/>
            <br>
            <br>
            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" value="" required/>
            <br>
            <br>
            <label for="number">Telephone Number:</label>
            <input type="number" id="number" name="phoneNbr" value="" required/>
            <br>
            <br>
            <label for="email">E-mail address:</label>
            <input type="email" id="email" name="email" value="" required/>
            <br>
            <br>
            <!--Date of Birth:
            <input type="date" name="DoB">
            <br>
            <br>-->
            <label for="nationality">Home Country:</label>
            <input type="text" id="nationality" required name="nationality" value=""/>
            <br>
            <br>
            <label for="age">Age:</label>
            <input required type="number" id="age" name="age" value=""/>
            <br>
            <br>
            <label for="gender">Gender:</label>
            <input required type="radio" id="gender" name="gender" value="male">Male
            <input required type="radio" id="gender" name="gender" value="fmale">Female
            <br>
            <br>
            <label for="status">Marital Status:</label>
            <input required type="radio" id="status" name="status" value="Married"/>Married
            <input required type="radio" id="status" name="status" value="Single"/>Single
            <br>
            <br>
            <label for="ifMarried">If married, Enter details(if not applicable enter null):</label>
            <textarea required name="ifMarried" id="ifMarried" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <label for="university">University:</label>
            <input required type="radio" id="university" name="university" value="RGU"/>Robert Gordon
            <input required type="radio" id="university" name="university" value="Aberdeen University"/>Aberdeen University
            <br>
            <br>
            <label for="course">Course of study</label>
            <input required type="text" id="course" name="course" value=""/>
            <br>
            <br>
            <label for="endOfStudy">End of Study date:</label>
            <input required type="date" id="endOfStudy" name="endOfStudy" value=""/>
            <br>
            <br>
            <label for="interests">Special interests (sport, music, hobbies):</label>
            <textarea required name="interests" id="interests" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <label for="diet">Special diet:</label>
            <textarea required name="diet" id="diet" cols="45" rows="5" value=""></textarea>
            <br>
            <br>
            <input type="submit" value="Submit" />

        </form>
    </main>

<footer>
    <p>
        <a href="#top"><img alt="" src="images/fi-logo-reverse.png" style="width: 200px; height: 100px;" title="Back to top"></a>
    </p>
    <p>Copyright © 2016 Team B(eta) </p>

</footer>
</body>
</html>