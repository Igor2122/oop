<?php 

    $host = 'localhost';
    $usr = 'igdevelopers';
    $pass = '';
    $dbname = 'pdoposts';
    
    // Set the DSN - data source name 
    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;
    
    // Create PDO instance 
    $pdo = new PDO($dsn, $usr, $pass);
    // Set the default fetch method to object
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    
    # PDO Query 
    $stmt = $pdo->query('SELECT * FROM posts');
    
    # FETCHING DATA WITH ASSC-ARR & OBJ

    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    //     echo "<br>";
    //     echo $row['id']. "<br>";
    //     echo $row['title']. "<br>";
    //     echo $row['author']. "<br>";
    //     echo $row['body']. "<br>";
    //     echo $row['created_at']. "<br>";
    // }
    
    
    // fetching with object
    while($row = $stmt->fetch()){
        echo $row->name . "<hr>";
    }
    
    
    
/**/

    # PREPARED STATEMENTS (prepare & execute)
/*     
    // UNSAFE WAY TO DO IT 
    //$sql = "SELECT * FROM posts WHERE author = '$author'";
    
    // Fetch multiple posts with prepared statements
        # postioned param #named param
    // postional
    
    
    # postioned:
    // user input 
    // $author = 'Igor';
    // $sql = 'SELECT * FROM posts WHERE author = ?';
    // $stmt = $pdo->prepare($sql);
    
    // $stmt->execute([$author]);
    // $posts = $stmt->fetchAll();
    
    // foreach($posts as $post){
    //     echo $post->author;
    // }
  
    # named params 
    $author = 'Igor';
    $is_published = true;
    $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute(['author' => $author, 'is_published'=> $is_published]);
    $posts = $stmt->fetchAll();
    
    
    foreach($posts as $post){
        echo "<br>";
        echo $post->id . "<br>";
        echo $post->author . "<br>";
        echo $post->created_at . "<br>";
        echo $post->title . "<br>";
        echo $post->body . "<br>";
    }
*/  

    # FETCHING SINGLE POST 
/*    
    $id = 1;
    
    $sql = 'SELECT * FROM posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $post = $stmt->fetch();
    
    echo $post->body . "<br>";
    echo $post->author;
*/    

    # GET ROW COUNT
/*    
    $author = 'Igor';
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
    $stmt->execute([$author]); 
    
    $postCount = $stmt->rowCount();
    
    echo $postCount;
*/

    # INSERTING DATA
/*
    $title = 'Post Six';
    $body = 'This is post Five';
    $author = 'Kevin';
    
    $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['title'=> $title, 'body' => $body, 'author' => $author]);
    
    echo 'Post Added';
*/

    # UPDATE DATA
/*  
    $id = 1;
    $body = 'this is the updated post';
    
    $sql = 'UPDATE posts SET body = :body WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['body' => $body, 'id' => $id]);
    
    echo 'record updated';
*/

    # DELETE DATA
/*    
    $id = 5;
    
    $sql = 'DELETE FROM posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    
    echo 'record deleted';
*/

    # DATA SEARCH 
/*
    $search = "%f%";
    
    $sql = 'SELECT * FROM posts WHERE title LIKE ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$search]);
    
    $posts = $stmt->fetchAll();
    
    foreach($posts as $post){
        echo $post->title;
    }
*/  