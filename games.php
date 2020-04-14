<?php
//Step1
 $db = mysqli_connect('localhost','u906139772_tingriley','database','u906139772_db')
 or die('Error connecting to MySQL server.');
?>


<html>
 <head>
 </head>
 <body>
                    

     
<?php
//Step2
$query = "SELECT * FROM game_list where 1";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$count = 0;
while ($row = mysqli_fetch_array($result)) {
    $count ++;
    if($count %2 == 1){
        echo "<div class=\"row\">";
    }
    
    echo "<figure class=\"col-md-6\">";
    echo "<a class=\"black-text\" href=".$row['url']." target=\"_blank\">";
    echo "<img alt=\"picture\" src=". $row['img'] ." class=\"img-fluid\">";
    echo "<h3 class=\"text-center my-3\">".$row['name']."</h3>";
    echo "</a>";
    echo "</figure>";
    if($count %2 == 0){
        echo"</div>";
    }

}
if($count %2 == 1){
    echo"</div>";
}
?>


</body>
</html>