<!DOCTYPE html>
<html>
  <head>
    <title>Check User</title>
    <link rel="stylesheet" type="text/css" href="museum.css">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
  </head>

  <body>
    <?php
      include "connecttodb.php"; //connect to the database
    ?>
    <h1> Add a New Work of Art to a Museum</h1>
    
	<form action="addthework.php" method="post" >
      What is the name of the piece of art: <input type="text"  name="work"><br>
      Who created the piece of art: <input type="text" name="artist"><br>
      What year was it created: <input type="number" min="0" max="2018" value="2018" name="theyear"><br>
      Which museum will hold it: <select name="whichmus">

	  <?php
	    include "getmuseum.php"
      ?>
      </select>
      <br>
	  <br>
      <input type="submit" value="Click here to add this new art work">
      <hr>
      <img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/pic.png">
    </form>

  </body>
</html>
