<?php

//DB Variables
$host = 'localhost';
$user = 'mysql';
$password = "MbuguasWork!1";
$dbname = "pdoposts";


//SET DSN.
//DATA SOURCE NAME(STRING THAT HAS DB DATA)

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//with modern string decleration
//$dsn2 = "mysql:host=$host;dbname=$dbname";


//Create a PDO  Instance
$pdo = new PDO($dsn, $user, $password);

//setting defult attribute which your PDO will be fetching
//helps me avoid running PDO::FETCH_ASSOC //OBJ In every execution
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

//PDO QUERY
//THIS IS THE FIRST METHOD OF EXECUTING PDO QUERIES.
//HERE I RUN MY QUERIES DIRECTLY
//ITS USED WHEN YOU ARE NOT EXPECTING ANY DATA FROM THE CLIENT(FORM DATA)

//$stmt = $pdo->query('SELECT * FROM posts');


// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     //PDO::FETCH_ASSOC FORMATS  DATA INTO AN ASSOCIATIVE ARRAY.
//     echo $row['title'] . '<br>';
// }

//Formatting data received as an Object

// while ($row = $stmt->fetch()) {
//     //PDO::FETCH_ASSOC FORMATS  DATA INTO AN ASSOCIATIVE ARRAY.
//     echo $row->title;
// }


#Prepared Statements(Prepare and Execute)

//Unsafe
//$sql = "SELECT * FROM posts WHERE author='$author'";

//prepared Statements are good for seperating Instructions with the actual data.

//Fetch mutiple posts

//UserInput

$author = "caleb";
$is_published = true;
$id = 1;
$limit = 1;

//Positional Params
$sql = 'SELECT * FROM posts WHERE author=? && is_published=? LIMIT ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$author, $is_published, $limit]);
$posts = $stmt->fetchAll();


// //Named Params
// $sql = 'SELECT * FROM posts WHERE author=:author  && is_published=:is_published';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
// $posts = $stmt->fetchAll();


foreach ($posts as $post) {
    echo $post->title . '<br>';
}


//Fetch Single Posts
// $sql = 'SELECT * FROM posts WHERE id=:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $post = $stmt->fetch();

// echo $post->body;



//Get Row count
// $stmt = $pdo->prepare('SELECT * FROM posts WHERE author =?');
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();
// echo $postCount;


//Inserting Data
// $title = 'Post Five';
// $body = 'This is Mercy';
// $author = 'Mercy';

// $sql = 'INSERT INTO posts(title,body,author) VALUES (:title,:body,:author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);

// echo 'Post Added';


//Update Data
// $id = 1;
// $body = 'This is The Updated Post';


// $sql = 'UPDATE posts SET body=:body WHERE id=:id';

// $stmt = $pdo->prepare($sql);

// $stmt->execute(['body' => $body, 'id' => $id]);

// echo 'Post Updated';



//Delete Data
// $id = 3;
// $sql = 'DELETE FROM posts WHERE id=:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);

// echo 'Post Deleted';


//Search Data

// $search = "%post%";
// $sql = 'SELECT * FROM posts WHERE title LIKE ?';
// $stmt =  $pdo->prepare($sql);
// $stmt->execute([$search]);
// $posts = $stmt->fetchAll();

// foreach ($posts as $post) {
//     echo $post->title . '<br>';
// }
