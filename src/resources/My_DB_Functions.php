<?php

function My_Connect_DB()
{	
	$servername="localhost";
    $username="megamind";
    $password="";
    $dbname = "my_megamind";	
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn)
    	die("Connection to DB failed: ".mysqli_connect_error());
    return $conn;
}
function My_SQL_EXE($conn, $sql)
{
	if($result = mysqli_query($conn, $sql))
    	echo "";
    else	
    	echo "";
        
    return $result;    
}

function showPost($conn, $get_post)
{
	$today = date("F d, Y");

	$get_post = "SELECT * FROM SavedPost;";
    $results = My_SQL_EXE($conn, $get_post);
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
}
function My_Show_Table($result)
{
    echo "<table border=1>";
    echo "<tr>";
        while($fieldinfo = mysqli_fetch_field($result))
        {
            echo "<td>";
                echo $fieldinfo->name;
            echo "</td>";
        }
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
            foreach($row as $key=>$value)
            {
                echo "<td>";
                    echo $value;
                echo "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
    echo "Total rows: ".mysqli_num_rows($result)."<br/>";
}

function Run_SQL_Show_Table($conn,$sql,$table)
{
	My_SQL_EXE($conn, $sql);
    $sql = "SELECT * FROM ".$table.";";
    $result = My_SQL_EXE($conn, $sql);
    My_Show_Table($result);
}

function UploadFile($fname, $format, $size)
{
	$uploadOK = 1;
    $dir = "uploads/";
    $file = $dir.basename($_FILES[$fname]["name"]);
    $fileType = pathinfo($file, PATHINFO_EXTENSION);
    $fileSize = getimagesize($_FILES[$fname]["tmp_name"]);
    
    //Check if the file is empty
    /*
    if($fileSize ==0)
    {
    	echo "File is empty<br/>";
        $uploadOK = 0;
    }
    */
    //Check if the file is too big
    $fileSize = $_FILES[$fname]["size"];
    if($fileSize > $size)
    {
    	echo "File is too large<br/>";
        $uploadOK = 0;
    }
    //Check to see if the file is of the format we want
    //$AllowedFormats = $format;
    if(stristr($format,$fileType)==false)
    {
    	echo "File Format is not allowed<br/>";
        $uploadOK = 0;
    }
    //Check to see if the file already exists
    /*
    if(file_exists($file))
    {
    	echo "File already exists<br/>";
        $uploadOK = 0;
    }
    */
    if($uploadOK)
		if(!move_uploaded_file($_FILES[$fname]["tmp_name"],$file))
        	$uploadOK = 0;
        
	if($uploadOK)
    	return $file;
    else return false;
}
?>