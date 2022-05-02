<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAIV Property Hub</title>
</head>
<body>
    <!-- Header -->
    <div class="title">
            <h1>MAIV PROPERTY HUB</h1>
            <h3>REIMAGINING REAL ESTATE</h3>
        </div>

        <!-- Menu  -->
        <div class="topnav">
            <div class="topnav-centered">
                <a href="#" class="active">About</a>
            </div>
            <div class="topnav-right">
                <a href="login.php">Login</a>
                <a href="signup.php">Signup</a>
            </div>
        </div>

        <!-- Description -->
        <div id="description">
            <div class="tab">
                <h2>Project Description</h2>
                <hr>
                <p>
                    We developed an e-commerce site where users can buy or sell property while viewing its details 
                    such as pricing and the amount of rooms available.</p>
            </div>
            <div class="tab">
                <h2>What do we do?</h2>
                <hr>
                <p>
                    MAIV Property Hub offer our customers an on-demand experience for selling and buying 
                    property with transparency and nearly seamless end-to-end service.
                </p>
            </div>
            <div class="tab">
                <h2>What services do we provide?</h2>
                <hr>
                <p>
                    Our services include listing properties with a valid account and marketing any and all available 
                    property for sale to our sellers and buyers as well as independent website administration.
                </p>
            </div>
            <div class="tab">
                <h2>Why choose MAIV Property Hub?</h2>
                <hr>
                <p>
                    We aim to reimagine real estate to make it easier to unlock life's next chapter with our innovative 
                    user interface, premium on-demand service, marketing, and transparency.<br><br>
                    
                    Unlike many of our other competitors, we require specific criteria to allow our most 
                    desirable property to be marketed.
                </p>
            </div>

            <!-- Previous and Next Buttons -->
            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button></div>
            </div>

            <!-- Circles at the bottom of this container -->
            <div id="circles">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
        </div>

        <script src="indexpage.js"></script>
</body>
</html>
