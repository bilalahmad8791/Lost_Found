<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lossfound";

$db = mysqli_connect($servername,$username,$password,$database);
if($db){
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $name = $_POST['name'];
        $enroll_no = $_POST['enroll_no'];
        $number_no = $_POST['number_no'];
        $item_name = $_POST['item_name'];
        $item_description = $_POST['item_description'];
        $item_location = $_POST['item_location'];
        $filename = $_FILES['item_photo']['name'];
        $filetem = $_FILES['item_photo']['tmp_name'];
        $folder = "image/".$filename;
        move_uploaded_file($filetem,$folder);
        
        $sql = "INSERT INTO user_data(name,enroll_name,phone_no,item_name,item_description,item_photo,location)VALUES('$name','$enroll_no','$number_no','$item_name','$item_description','$folder','$item_location')";
        $reselt = $db->query($sql);
        if($reselt){
            //echo "insert data";
            $show = true;
        }
        else{
            //echo "not insert data";
            $show = false;
        }
    }
    else{
        echo $_SERVER['REQUEST_METHOD'];
    }
}
else{
    echo "not databse create";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found System</title>
    <link rel="stylesheet" href="project.css">
    <!-- <link rel="stylesheet" href="project.css"> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <link rel="stylesheet" href="project.css">
</head>
<body>
    <header>
        <h1>Lost and Found System</h1>
           
        <nav>
            <ul>
                <li><a href="#">Report Lost Item</a></li>
                <li><a href="/loss_found/found.php">Report Found Item</a></li>
            </ul>
        </nav>
    </header>
   <div class="container">
        <h2 class="text-center mt-4">Report a Lost Item</h2>
        <form id="frm" method="post" action="index.php" enctype="multipart/form-data">

          <div class="mb-3">
             <label for="name" class="form-label">name</label>
             <input type="text" class="form-control" id="name" name="name">
          </div>

          <div class="mb-3">
             <label for="enroll_no" class="form-label">Enroll no</label>
             <input type="text" class="form-control" id="enroll_no" name="enroll_no">
          </div>

           <div class="mb-3">
             <label for="phone_no" class="form-label">phone no</label>
             <input type="number" class="form-control" id="number_no" name="number_no">
           </div>

           <div class="mb-3">
             <label for="item_name" class="form-label">Item Name</label>
             <input type="text" class="form-control" id="item_name" name="item_name">
           </div>

           <div class="mb-3">
             <label for="item_description" class="form-label">Item description</label>
             <input type="text" class="form-control" id="item_description" name="item_description">
           </div>

           <div class="mb-3">
             <label for="item_location" class="form-label">Item location</label>
             <input type="text" class="item_control" id="item_location" name="item_location">
           </div>

           <div class="mb-3">
             <label for="item_photo" class="form-label">Item Photo</label>
             <input type="file" class="item_location" id="item_photo" name="item_photo">
           </div>

          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>


    <footer>
        <a id = "about">&copy; Team Name Recovery Rangers. &copy; 2024 Lost and Found System.Technovation Hackathon &copy;Team Member's : Mohd Fazil, Bilal Ahmad</a>
    </footer>
</body>
</html>

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