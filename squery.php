 
<?php

$result = $_POST['search'];
$result = strtolower($result);

if ($result == "dropbox")
  header('Location: http://www.dropbox.com');

if ($result == "amazon")
  header('Location: http://www.amazon.com');

if ($result == "google")
  header('Location: http://www.google.com');

if ($result == "ebay")
  header('Location: http://www.ebay.com');

if ($result == "wikipedia")
  header('Location: http://www.wikipedia.org');

if ($result == "youtube")
  header('Location: http://www.youtube.com');

if ($result == "hess toy truck")
  header('Location: https://hesstoytruck.com');

if ($result == "LM7805")
  header('Location: http://www.learningaboutelectronics.com/Articles/What-is-a-LM7805-voltage-regulator');

echo "No results found for this search";
?> 
 
