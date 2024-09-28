<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="con">
        <div class="alert alert-primary text-center" role="alert">
           <h3 class="text-white">All item list</h3>
        </div>
        <div class="container">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">S no</th>
      <th scope="col">Name</th>
      <th scope="col">Enroll no</th>
      <th scope="col">Phone no</th>
      <th scope="col">Item name</th>
      <th scope="col">Item desc</th>
      <th scope="col">Item photo</th>
      <th scope="col">loca </th>
      <th scope="col">Date/Time</th>
    </tr>
  </thead>
  <tbody>
<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "lossfound";
    
    $db = mysqli_connect($servername,$username,$password,$database);
    if($db){
        $sql = "SELECT * FROM user_data";
        $result = $db->query($sql);
        if($result){
           while($row = $result->fetch_assoc()){
            $photo = $row['item_photo'];
              echo '  
                <tr>
                    <td width="50">'.$row['s_no'].'</td>
                    <td width="100">'.$row['name'].'</td>
                    <td width="50">'.$row['enroll_name'].'</td>
                    <td width="50">'.$row['phone_no'].'</td>
                    <td width="100">'.$row['item_name'].'</td>
                    <td width="150">'.$row['item_description'].'</td>
                    <td width="100"><img src="'.$photo.'" width="50px" height="50px"><img></td>
                    <td width="100">'.$row['location'].'</td>
                    <td width="100">'.$row['date'].'</td>
                </tr>';

           }
        }
        else{
            echo "not select data";
        }
    }
    else{
        echo "database not";
    }

?>

    </tr>
  </tbody>
</table>
        </div>
    </div>
</body>
</html>