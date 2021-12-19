<?php

    //for display selected value in next page

    if(isset($_POST['submit']))
    {
        $gettitle=$_POST['title1'];
    }    
?>

<?php
//creating variable and assign method
$title = $_POST['title1'];
$Firstname = $_POST['fn'];
$Lastname = $_POST['ln'];
$Date = $_POST['DOB'];
$Email = $_POST['em'];
$Telephone= $_POST['Number'];
$Files = $_POST['File'];
$Message = $_POST['msg'];

//for display data in next webpage 
echo "Thank You ".$title. $Firstname.$Lastname."<br>";
echo "You Have submitted the following details:"."<br>";
echo "Date of Birth :  ".$Date."<br>";
echo "Telephone  :  ".$Telephone."<br>";
echo " File Uploaded :  ".$Files."<br>";
echo "Message :  ".$Message."<br>";

?>
