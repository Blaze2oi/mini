<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Front Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <!-- Add this code to your HTML file, right after the existing <ul> in the navbar -->
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li class="emergency-numbers">
                    <a href="#">Emergency Numbers</a>
                    <ul class="emergency-dropdown">
                      <li><a href="#">Police: 100</a></li>
                      <li><a href="#">Fire Department: 101</a></li>
                      <li><a href="#">Medical Emergency: 102</a></li>
                  </ul>
                  
                </li>
            </ul>

        </nav>
    </header>

    <main>
      <section class="hero">
        <h1>WELCOME TO</h1>
        <h1 class="fancy-text">Book My Doc</h1>
        <a class="button" href="http://localhost/mini/login1.php">Login for Users</a>
        <a class="button" href="http://localhost/mini/doclogin.php">Login for Doctors</a>
    </section>

        <section id="learn-more" class="about">
            <h2>About Us</h2>
            <p>We strive to commend the basic needs of the patients. Since it's a go-to website, it's user-friendly, informative, and accurate.</p>
        </section>
    </main>
</body>
</html>