<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <!-- Add your CSS files here -->
    <link href ="resources\css\app.css">
    <style>
        /* Basic styling for logo and welcome banner */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Full height for html and body */
        html, body {
            height: 100%;
        }

        /* Flex container for entire page */
        body {
            display: flex;
            flex-direction: column;
        }

        /* Header styles */
        header {
            background-color: #87CEFA;
            color: black;
            text-align: center;
            padding: 10px 0;
        }
        .logo {
          
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .logo img {
            max-width: 100px; /* Adjust the size as needed */
            height: auto;
        }

        .welcome-banner {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa; /* Light gray background */
        }
        
        /* Ensure the body and html take full height */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        /* Container for the main content to push footer to the bottom */
        .content {
            flex: 1;
        }

        /* Custom styles for navigation buttons */
        .nav-buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            background-color: #f8f9fa;
        }

        .nav-buttons .row {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .nav-buttons a {
            text-decoration: none;
            padding: 60px 60px;
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            margin: 0 20px;
            transition: background-color 0.3s;
        }

        .nav-buttons a:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }
    
    </style>

</head>


<body>
<header>
    <h1> HOSPITAL RECORDS MANAGEMENT SYSTEM</h1>
    <nav>
      <div class="logo">
        <img src="C:\Users\Sironet Saina\OneDrive\Pictures\Your paragraph text (1).png" >
      </div>
      <div class="Welcome-banner">
        <h1> Welcome to our records management services </h1>
      </div>

   </nav>
  
   </header>
<main class="content"> 
    
 <nav class="nav-buttons">
 <div class="row">
            <a href="{{ url('/admin') }}">Admin</a>
            <a href="{{ url('/doctor') }}">Doctor</a>
            
        </div>
        <br>
        <div class="row">
            <a href="{{ url('/lab') }}">Lab</a>
            <a href="{{ url('/pharmacy') }}">Pharmacy</a>
        </div>
    </nav> 
</main>
<footer>
        <p> Your health is our care</p>
        <p> 2024 My Application. All rights reserved.</p>
    </footer>

</body>
</html>
