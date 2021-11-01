<?php

$title = "Title A"; // $_POST["title"]
$comment = "<script>document.body.style.backgroundColor='red'</script>"; // $_POST["comment"]
$comment = htmlspecialchars($comment);
// Connect to DB
// INSERT
// bindValue
// Text file is the column in the DB for the comment
// Write to file
file_put_contents("comment.txt", $comment);










