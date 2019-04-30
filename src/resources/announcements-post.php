<?php
session_start();
include "My_DB_Functions.php";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <link rel="stylesheet" href="styles.css">
  <title>Software Development - Announcements</title>
</head>
<style>
.submit {
  background-color: #000000;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  width: 150px;
}
#deleteButton {
  background-color: #000000;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;
  width: 150px;
  display:none;
}
.buttonpost {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 150px;
}
.postDivs {
	background-color:#F0F0F0; 
    width:95%;
    margin:0 auto;
    border-radius:3px;
    padding-left:1%; 
	padding-right:1%; 
    padding-bottom:.1%; 
    padding-top:.1%;
}
#myDiv {
	background-color:#F0F0F0; 
    width:95%;
    margin:0 auto;
    border-radius:3px;
    padding-left:1%; 
	padding-right:1%; 
    padding-bottom:.1%; 
    padding-top:.1%;
    display:none;
}

#myEditDiv {
	background-color:#F0F0F0; 
    width:95%;
    margin:0 auto;
    border-radius:3px;
    padding-left:1%; 
	padding-right:1%; 
    padding-bottom:.1%; 
    padding-top:.1%;
    display:none;
}

#myDeleteDiv {
	background-color:#F0F0F0; 
    width:95%;
    margin:0 auto;
    border-radius:3px;
    padding-left:1%; 
	padding-right:1%; 
    padding-bottom:.1%; 
    padding-top:.1%;
    display:none;
}

  .container {
    background-color: white;
    width:950px;
    margin: auto;
    border-radius: 3px;
    padding-top: 10px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 30px;
    overflow: auto;
  }
  
  body {
  	background-image: url(left_side.png), url(right_side.png), linear-gradient(white, #006407);
    background-position: left top, right top;
    background-repeat: repeat-y, repeat-y, no-repeat;
    background-size: 155px 1000px, 155px 1000px, cover;
    font-family: arial;
  }
  
  .logo {
  	width:600px;
    height:110px;
    float: left;
  }
  
  .admin {
  	font-size:85%
  }
  
  .navbar {
    overflow: hidden;
    background-color: black;
    margin: auto;
  }

  .here {
	border: 2px solid white;
    margin: 8px;
    line-height: 5px;
  }

  .navbar a {
    float: left;
    font-size: 100%;
    color: white;
    text-align: left;
    padding: 14px 16px;
    text-decoration: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    font-size: 145%;  
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }

  .navbar a:hover, .dropdown:hover .dropbtn {
    color: #006407;
    font-weight: bold;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #F0F0F0;
    border-radius: 3px;
    min-width: 170px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown-content a:hover {
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .class-photo{
    width:925px;
    height:625px;
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  
  .content {
    background-color:#F0F0F0;
    width:95%;
    margin:0 auto;
    border-radius:3px;
    padding-left:1%;
    padding-right:1%;
    padding-bottom:1%;
    padding-top:1%;
    font-size: 115%;
  }
  
  .footer {
  	background-color: black;
    width: 100%;
    height: 8%;
  	bottom: 0;
    left: 0;
    display: block;
	color: white;
    text-align: center;
    padding-top: 30px;
    padding-bottom: 30px;
    border-radius:3px;
  }
</style>
<body>
<br/>

<div class="container">
  <a href="http://coneill.altervista.org/software_development/home.html">
	<img class="logo" src="logo.png" alt="Software Development Icon">
  </a>
    <p style="visibility:hidden; font-size:85%;" align="right"><u>Admin Login</u></p>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="navbar">
    <a href="http://coneill.altervista.org/software_development/home.html">HOME</a>
    <a href="http://coneill.altervista.org/software_development/announcements.html" class="here">ANNOUNCEMENTS</a>
    <div class="dropdown">
      <button class="dropbtn">PROJECTS 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">Spring 2019</a>
      </div>
    </div> 
    <div class="dropdown">
      <button class="dropbtn">ABOUT 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="http://coneill.altervista.org/software_development/faq.html">FAQ</a>
        <a href="http://coneill.altervista.org/software_development/teachers.html">Teachers</a>
        <a href="http://coneill.altervista.org/software_development/feedback.html">Feedback</a>
      </div>
    </div>
    <a href="#">RESOURCES</a>
  </div>
  <br/><br/><br/>
  <p style="text-align:center; font-family:'Arial Rounded MT'; color:#006407; font-size:300%; margin:4px; line-height:20px;">Announcements</p>
  <br/><br/><br/>
	<button class="buttonpost" onClick="myFunction()">Make Post</button>
    <button class="buttonpost" onClick="myDeleteFunction()">Delete Post</button>
    <button class="buttonpost" onClick="myEditFunction()">Edit Post</button>
<div id="myDeleteDiv">
	<form method="post">
      <br/>
      <textarea rows="1" cols="120" id="postDeleteTitle" name="postDeleteTitle"></textarea>
      <br/><br/>
      <textarea rows="10" cols="120" id="postDeleteDescription" name="postDeleteDescription"></textarea>
      <br/><br/>
      <button class="submit" type="submit" name="deletePost" value="Delete Post">Delete</button>
      <br/><br/>
    </form>
</div>
<br/><br/>
<div id="myEditDiv">
	<form method="post">
      <br/>
      <textarea rows="1" cols="120" id="postEditTitle" name="postEditTitle"></textarea>
      <br/><br/>
      <textarea rows="10" cols="120" id="postEditDescription" name="postEditDescription"></textarea>
      <br/><br/>
      <button class="submit" type="submit" name="editPost" value="Edit Post">Edit</button>
      <br/><br/>
    </form>
</div>
<br/><br/>
<div id="myDiv">
	<form method="post">
      <br/>
      <textarea rows="1" cols="120" id="postTitle" name="postTitle"></textarea>
      <br/><br/>
      <textarea rows="10" cols="120" id="postDescription" name="postDescription"></textarea>
      <br/><br/>
      <input class="submit" type="submit" name="submitPost" value="Submit">
      <br/><br/>
    </form>
</div>
<br/>
<?php
	  $conn = My_Connect_DB();
	  $get_post = "SELECT * FROM SavedPost;";
      $results = My_SQL_EXE($conn, $get_post);
      $today = date("F d, Y");
	  mysqli_close($conn);
	  while ($post = mysqli_fetch_assoc($results)) {
			echo '<div class="postDivs">';
        	echo "<br/>";
			echo "<b>" . $today . ": " . $post["postTitle"] . "</b>" . "<br/>" . "<br/>" . $post["postDetails"] . "<br/>";
			echo "<br/>";
        	echo "<br/>";
        	echo "<br/>";
        	echo '</div>';
        	echo "<br/>";
	  }
?>
<br/>
<?php
	if(isset($_POST['submitPost'])){
	  echo "You clicked Submit Post";
	
      $conn = My_Connect_DB();
      
      $today = date("F d, Y");
      $varFormPostTitle = mysql_real_escape_string($_POST['postTitle']);
      $varFormPostDescription = mysql_real_escape_string($_POST['postDescription']);
      // insert record
      $sql="INSERT INTO SavedPost (postTitle, postDetails)
      VALUES ('$varFormPostTitle','$varFormPostDescription')";

	  My_SQL_EXE($conn, $sql);

	  $get_post = "SELECT * FROM SavedPost;";
      $results = My_SQL_EXE($conn, $get_post);
      
      mysqli_close($conn);
  	}
?>
<?php
	if(isset($_POST['deletePost'])){
	  echo "You clicked Delete Post";
      echo "<br/>";

      $conn = My_Connect_DB();
      
      $varFormPostTitleDelete = mysql_real_escape_string($_POST['postDeleteTitle']);
      $varFormPostDescriptionDelete = mysql_real_escape_string($_POST['postDeleteDescription']);

	  $get_deleted_post = "DELETE FROM SavedPost WHERE postTitle = '$varFormPostTitleDelete';";
      My_SQL_EXE($conn, $get_deleted_post);
      
      //$get_deleted_post_details = "DELETE FROM SavedPost;";
      //My_SQL_EXE($conn, $get_deleted_post_details);

	  //$get_post = "SELECT * FROM SavedPost;";
      //$results = My_SQL_EXE($conn, $get_post);
      
      //My_SQL_EXE($conn, $sql);
      mysqli_close($conn);
  	}
?>
<?php
	if(isset($_POST['editPost'])){

      $conn = My_Connect_DB();

      $varFormPostTitleEdit = mysql_real_escape_string($_POST['postEditTitle']);
      $varFormPostDescriptionEdit = mysql_real_escape_string($_POST['postEditDescription']);
      
      $get_edited_post = "UPDATE SavedPost SET postDetails = $varFormPostDescriptionEdit WHERE postTitle = '$varFormPostTitleEdit';";
      My_SQL_EXE($conn, $get_edited_post);
      
      mysqli_close($conn);
      }
?>
  <div class="content">
    <strong>April 15th, 2019: Create Symposium Date and Time Announced</strong><br/><br/>
    Create Symposium will be held on <strong>Thursday, April 25th</strong> 2-3PM in building A (specific room numbers TBA). Attendance is 
    MANDATORY for all teams and all group members. Projects do not need to be in its 100% final form but do need to be presentable. Please have
    a video demonstration on standby as a backup in case of unexpected issues. Submit a screenshot (to be advertised on posters for the Create event)
    and the video on Piazza. At least two group members will stay with the project at all times
    to present and recieve feedback while the other members can experience the rest of the symposium. We will do a rotation so everyone has a chance
    to see everything. A google form (4-5 questions) for feedback is suggested but not required.
  </div><br/><br/>
  <div class="content">
    <strong>April 15th, 2019: Project Due Date Announced</strong><br/><br/>
    The semester long projects will be due on Monday, April 29th at 3:30. All testing, documentation, and implementation needs to be completed, and a final
    version uploaded to github. 
  </div><br/><br/>
  <div class="content">
    <strong>April 15th, 2019: Final Exam Info</strong><br/><br/>
    The final exam will be adminstered as a take-home test. The test will open on May 3rd in D2L, and you will have the option to save your work during
    the exam and come back at a later time. It be due on our final exam date, May 6th. Even though this exam is open-book
    and open-note, it is noted you will need to dedicate a good 2-3 hours to complete this.
  </div>
</div>
  <p>&nbsp;</p>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function myFunction() {
  var x = document.getElementById("myDiv");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function myEditFunction() {
  var y = document.getElementById("myEditDiv");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}

function myDeleteFunction() {
  var y = document.getElementById("myDeleteDiv");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}
</script>
</body>
</html>



