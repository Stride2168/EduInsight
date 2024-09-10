<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <meta charset="UTF-8">
    <title>Section</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="homepage.html" ><img id="brain" src="images/brain.png"></a></li>
            <li><h1 id="title">EduInsight</h1></li>
            <li><a class="sidebar" href="homepage.php">Home</a></li>
            <li><a class="sidebar" href="sections.php">Sections</a></li>
            <li><a class="sidebar" href="grades.php">Grades</a></li>
            <li><a class="sidebar" href="settings.php">Settings</a></li>
            <li><a class="User"href="page2.html">User</a></li>
            <li><a class="logout" href="LOGIN.php">Logout</a></li>
        </ul>
    </div>
   
    <div id="content"> <!--always inside this!!!!-->

        <h1>Sections:</h1>
        <form><label for="student">Search:</label>
            <input type="text" id="student" name="Student" placeholder="Name, Section, year....">
            <button id="butt" type="submit">search</button>
        </form> 
        <div class="w3-container w3-teal">
        <h5>My Page</h5>
           
            <div class="container">
          
                    <p class="card"><a href="subsection.html" class="sec">Section a<br><span class="highlight">Students:40</span></a></span>
                    </p>
                    <p class="card"><a href="subsection.html" class="sec">Section b<br><span class="highlight">Students:30</span></a></span>
                    </p>
                    <p class="card"><a href="subsection.html" class="sec">Section c<br><span class="highlight">Students:45</span></a></span>
                    </p>
            </div>
      
        </div>
    </div>
    
       
    <script>
    
        window.addEventListener('load', function () {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
