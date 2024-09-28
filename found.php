<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found System</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <header>
        <h1>Lost and Found System</h1>
           <!-- <link rel="stylesheet" href="project.css"> -->
    <link rel="stylesheet" href="project.css">
        <nav>
            <ul>
                <li><a href="/loss_found/index.php">Report Lost Item</a></li>
                <li><a href="#">Report Found Item</a></li>
            </ul>
        </nav>
    </header>
    <section id="report-found">
        <h2>Report a Found Item</h2>
        <form action="project.html" method="post">

            <label for="Item Name">Item Name</label>
            <input type="text" id="Item name" name="Item Name" placeholder="Enter the Item Name" required>

            <label for="found-item">Item Description:</label>
            <input type="text" id="found-item" name="found-item" placeholder="Describe the found item" required>
            
            <label for="found-date">Date Found:</label>
            <input type="date" id="found-date" name="found-date" required>

            <label for="imag">Upload the image</label>
            <input type="file" id="image" name="upload" accept="image/*" required>

            <button type="submit">Submit</button>
        </form>
    </section>
    <footer>
       <a id = "about">&copy; Team Name Recovery Rangers. &copy; 2024 Lost and Found System.Technovation Hackathon &copy;Team Member's : Mohd Fazil, Bilal Ahmad</a>
    </footer>
</body>
</html>
To include the CSS directly in your HTML file in one line, use the following `<style>` tag within the `<head>` section:

```html
<style>body{font-family:Arial,sans-serif;background-color:#f8f9fa;margin:0;padding:0}header{background-color:#007bff;color:white;padding:15px;text-align:center}header h1{margin:0;font-size:2.5rem}nav ul{list-style-type:none;padding:0}nav ul li{display:inline-block;margin:0 10px}nav ul li a{color:white;text-decoration:none;font-size:1.2rem}nav ul li a:hover{text-decoration:underline}.container{background-color:white;padding:20px;margin:30px auto;border-radius:10px;box-shadow:0px 0px 10px rgba(0,0,0,0.1);max-width:600px}h2{color:#007bff;font-weight:bold}form{margin-top:20px}.form-control{border-radius:5px}button{background-color:#007bff;border:none;padding:10px 20px;border-radius:5px}button:hover{background-color:#0056b3}footer{background-color:#007bff;color:white;padding:10px;text-align:center;position:absolute;width:100%;bottom:0}footer a{color:white;text-decoration:none;font-size:1rem}footer a:hover{text-decoration:underline}</style>
```

This will embed the CSS styles directly in your HTML document.
 -->


 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found System</title>
    <link rel="stylesheet" href="lossfound/css.css">
    <link rel="stylesheet" href="project.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <h1>Lost and Found System</h1>
        <nav>
            <ul>
                <li><a href="/loss_found/index.php">Report Lost Item</a></li>
                <li><a href="/loss_found/found.php">Report Found Item</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2 class="text-center mt-4">Report a Found Item</h2>
        <form id="frm" method="post" action="found.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="enroll_no" class="form-label">Enroll No</label>
                <input type="text" class="form-control" id="enroll_no" name="enroll_no">
            </div>
            <div class="mb-3">
                <label for="number_no" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="number_no" name="number_no">
            </div>
            <div class="mb-3">
                <label for="item_name" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="item_name" name="item_name">
            </div>
            <div class="mb-3">
                <label for="item_description" class="form-label">Item Description</label>
                <input type="text" class="form-control" id="item_description" name="item_description">
            </div>
            <div class="mb-3">
                <label for="item_location" class="form-label">Item Location</label>
                <input type="text" class="form-control" id="item_location" name="item_location">
            </div>
            <div class="mb-3">
                <label for="item_photo" class="form-label">Item Photo</label>
                <input type="file" class="form-control" id="item_photo" name="item_photo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <footer>
        <a id = "about">&copy; Team Name Recovery Rangers. &copy; 2024 Lost and Found System.Technovation Hackathon &copy;Team Member's : Mohd Fazil, Bilal Ahmad</a>
    </footer>
</body>
</html> -->
 -->


 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found System</title>
    <link rel="stylesheet" href="project.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
</head>
<body>
    <header>
        <h1>Lost and Found System</h1>
        <nav>
            <ul>
                <li><a href="#report-lost">Report Lost Item</a></li>
                <li><a href="#report-found">Report Found Item</a></li>
                <li><a href="#items-list">View Items</a></li>
            </ul>
        </nav>
    </header>

    <section id="report-lost">
        <h2>Report a Lost Item</h2>
        <form action="data.php" method="post">
            <label for="lost-item">Item Description:</label>
            <input type="text" id="lost-item" name="lost-item" placeholder="Describe the lost item" required>
            
            <label for="lost-location">Lost Location:</label>
            <input type="text" id="lost-location" name="lost-location" placeholder="Where did you lose it?" required>
            
            <label for="lost-date">Date Lost:</label>
            <input type="date" id="lost-date" name="lost-location" required>

            <button type="submit">Submit</button>
        </form>
    </section>

    <section id="report-found">
        <h2>Report a Found Item</h2>
        <form>
            <label for="found-item">Item Description:</label>
            <input type="text" id="found-item" name="found-item" placeholder="Describe the found item" required>
            
            <label for="found-location">Found Location:</label>
            <input type="text" id="found-location" name="found-location" placeholder="Where did you find it?" required>
            
            <label for="found-date">Date Found:</label>
            <input type="date" id="found-date" name="found-date" required>

            <button type="submit">Submit</button>
        </form>
    </section>

    <section id="items-list">
        <h2>View Lost and Found Items</h2>
        <ul>
            <li>Black Wallet - Lost on September 1st, 2024 at Central Park</li>
            <li>Keys - Found on September 2nd, 2024 at the library</li>
            
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Lost and Found System. All rights reserved.</p>
    </footer>
    <script>
        $(document).ready(function(){
            alert()
        });
    </script>
</body>
</html>












<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>found form</title>
</head>
<body>
    <form METHOD="post">
        Name: <input type="text" name="name"><br>
        Enrol_no <input type="text" name="enrol_no"><br>
        Phone no <input type="text" name="phone_no"><br>
        item_Name <input type="text" name="item_name"><br>
        Item_description <input type="text" name="item_des"><br>
        Item_location <input type="text" name="item_loc"><br>
        <input type="submit" name="sb">
    </form>
   // <php
   // $con=mysqli_connect('localhost','root','','found_items');
//
    //if(isset($_POST['sb']))
    //{
    //    $name=$_POST['name'];
    //    $enrol_no=$_POST['enrol_no'];
    //    $phone_no=$_POST['phone_no'];
    //    $item_name=$_POST['item_name'];
    //    $item_des=$_POST['item_des'];
   // //    $item_loc=$_POST['item_loc'];
   // $query="INSERT INTO found_items(Name,Enrol_no,Phone_no ,item_Name,Item_description,Item_location)VALUES ('$name','$enrol_no','$phone_no','$item_name','$item_des','$item_loc)";
   // $run=mysqli($con,$query);
   // }
   // ?>
</body>
</html>
 -->

 <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #311179; /* Dark Purple */
    --secondary-color: #fefeff; /* Light Pink */
    --accent-color: #0e0e0e; /* Neon Blue */
    --text-color: #fff;
    --input-bg-color: #f8f6fd; /* Light Beige */
    --label-color: #000; /* Black */
    --font-family: 'Poppins', sans-serif;
    --heading-font-family: 'Playfair Display', serif;
    --max-width: 800px;
    --transition-speed: 0.4s ease;
}

body {
    font-family: var(--font-family);
    line-height: 1.7;
    background-image: url('your-flower-image-url.jpg'); /* Replace with the actual image URL */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: #333;
    padding-bottom: 80px; /* Space for fixed footer */
    min-height: 100vh;
    letter-spacing: 0.5px;
}

/* Header Styles */
header {
    background: var(--primary-color);
    color: var(--text-color);
    padding: 1.5rem;
    text-align: center;
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 1000;
}

header h1 {
    margin-bottom: 1rem;
    font-family: var(--heading-font-family);
    font-size: 3.5rem;
    letter-spacing: 3px;
}

header nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
}

header nav ul li {
    margin: 0 15px;
}

header nav ul li a {
    color: var(--text-color);
    text-decoration: none;
    font-weight: bold;
    font-size: 1.2rem;
    transition: color var(--transition-speed);
}

header nav ul li a:hover {
    color: var(--accent-color);
}

/* Main Section Styles */
section {
    margin: 2rem auto;
    padding: 2.5rem;
    max-width: var(--max-width);
    background: #fff;
    color: #333;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.15);
    border-radius: 12px;
    transition: transform var(--transition-speed), background var(--transition-speed);
}

section:hover {
    transform: translateY(-12px);
    background: var(--secondary-color); /* Light Pink */
    color: var(--text-color);
}

section h2 {
    margin-bottom: 1rem;
    font-family: var(--heading-font-family);
    font-size: 2.5rem;
    color: var(--primary-color);
    letter-spacing: 2px;
}

label {
    display: block;
    margin-bottom: 0.75rem;
    font-weight: 600;
    font-size: 1.9rem;
    color: var(--label-color); /* Black */
}

input[type="text"], input[type="date"] {
    width: 100%;
    padding: 0.85rem;
    margin-bottom: 1.5rem;
    border: 1px solid #ccc;
    border-radius: 6px;
    background-color: var(--input-bg-color);
    transition: border-color var(--transition-speed), background-color var(--transition-speed);
}

input[type="text"]:focus, input[type="date"]:focus {
    border-color: var(--accent-color);
    background-color: #e8faff;
    outline: none;
}

/* Button Styles */
button {
    display: inline-block;
    background: var(--accent-color);
    color: var(--text-color);
    padding: 0.85rem 1.75rem;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1rem;
    letter-spacing: 1px;
    transition: background var(--transition-speed);
}
button:hover {
    background: var(--primary-color);
}


/* Footer Styles */
footer {
    text-align: center;
    padding: 1.2rem;
    background: var(--primary-color);
    color: var(--text-color);
    position: fixed;
    width: 100%;
    bottom: 0;
    font-size: 1.2rem;
    letter-spacing: 1px;
}

/* Responsive Design */
@media (max-width: 768px) {
    header nav ul {
        flex-direction: column;
        align-items: center;
    }

    header nav ul li {
        margin: 10px 0;
    }

    section {
        padding: 2rem;
    }

    section h2 {
        font-size: 1.8rem;
    }

    input[type="text"], input[type="date"] {
        padding: 0.7rem;
    }

    button {
        padding: 0.6rem 1.2rem;
    }
}

</style>