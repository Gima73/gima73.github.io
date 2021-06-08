<?php
$db = mysqli_connect(
  'localhost',
  'root',
  'root',
  'shop'
);

function articles_new($db, $idea, $value)
{
  $t="INSERT INTO items (name, value) VALUES ('$idea', '$value')";
  $result=mysqli_query($db, $t);
  if (!$result)
  {
    die(mysqli_error($db));
  }
}
articles_new($db, $_POST['name'], $_POST['value']);
header("Location: "."add_item.html");
?>
