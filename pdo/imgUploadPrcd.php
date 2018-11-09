<?php 


    
    
    $msg = "";
    
        $host = 'localhost';
        $usr = 'root';
        $pass = '';
        $dbname = 'photos';
    
    if(isset($_POST['upload'])){
        
        $location = "img/" . basename($_FILES['image']['name']);
        
        $db = mysqli_connect($host, $usr, $pass, $dbname);
        
        $img = $_FILES['image']['name'];
        
        
        // $img = 'test';
        // $text = 'test description';
        
        
        $sql = "INSERT INTO posts(name, description) VALUES('$img', '$text')";
        
        
        mysqli_query($db, $sql);
        
        
        if(move_uploaded_file($_FILES['image']['tmp_name'], $location)){
            echo $msg = "Image Uploaded";
            echo 'success!';
            echo $location;
        } else {
            echo $msg = " There was a problem ";
            // exit;
        }
        
    }
    
    
        
    
    
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>
</head>
<body>
    <div>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="size" value="100000"/>
            <input type="file" name="image"><br>
            <input type="text" cols="40" rows="4" name="description" placeholder="Description"><br>
            <input type="submit" value="Upload Image" name="upload">
</form>

    <?php 
        
        $db = mysqli_connect($host, $usr, $pass, $dbname);
        $sql = "select * from posts";
        $res = mysqli_query($db, $sql);
        
        while($row = mysqli_fetch_array($res)){
            echo "<div>";
                echo "<img src='img/".$row['name']."'>";
                echo "<p>" . $row['description'] . "</p>";
            echo "</div>";
        }
    
    ?>
    </div>
</body>
</html>

