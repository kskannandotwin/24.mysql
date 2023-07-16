<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Introduction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css">
    <style>
       h1 {
           color: purple;
       }

       .containingDiv {
           border: 1px solid #7c73f6;
           margin-top: 100px;
           border-radius: 15px;
       }
    </style>
</head> 

<body>
    
    <div class="container-fluid">
       <div class="row">
            <div class="col-sm-offset-1 col-sm-10 containingDiv">
                <h1>Connect to database</h1>
                <?php
                // this is working in https://kannan-fullstack.000webhostapp.com

// $servername = "localhost";
// $username = "id21039441_user";
// $password = "Janani@1234";
// $database = "id21039441_users";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";
?>
                
                 <?php
                    // mysqli_connect(host, username, password, dbname)
                    // $link = @mysqli_connect("localhost", "id21039441_user", "Janani@1234", "id21039441_users") or die("ERROR: Unable to connect: " . mysqli_connect_error());
                    // var_dump($link);

                    // // check connection
                    // if(mysqli_connect_error()) {
                    //     die("ERROR: Unable to connect: " . mysqli_connect_error());
                    // }
                    // echo "<p>Connected successfully to the database.</p>";
                    
                    // connect
                    $link = new mysqli("localhost", "id21039441_user", "Janani@1234", "id21039441_users");

                    // check connection
                    if($link -> connect_errno > 0) {
                        die("Unable to connect: " . $link -> connect_error);
                    } else {
                        echo "<p>Connected successfully to the database.</p>";
                    }
                 ?>     
            </div>
       </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>