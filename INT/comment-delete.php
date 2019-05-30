<?php
include_once 'LidhjaDB.php';
$conn = connectDB();

$comment_id = $_POST['comment_id'];

try{
    $sql_del = "DELETE FROM tbl_user_comments WHERE id = $comment_id";
    $stmt = $conn->prepare($sql_del);
    $stmt->execute();
    if (is_null($stmt)) {
        $error = 'Something went wrong!';
        throw new Exception($error);
    }
    else{
        echo true;
    }
}
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

//if (! empty($stmt)) {
//    echo true;
//}
?>