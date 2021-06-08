<?php
$db = mysqli_connect(
  'localhost',
  'root',
  'root',
  'shop'
);

function items_all($db)
{
  $query = "SELECT * FROM items";
  $result=mysqli_query($db, $query);
  if (!$result)
  {
    die(mysqli_error($db));
  }
  $n = mysqli_num_rows($result);
  $articles = array();
  for($i=0; $i<$n; $i++)
  {
    $row = mysqli_fetch_assoc($result);
    $articles[] = $row;
  }
  return $articles;
}

?>
