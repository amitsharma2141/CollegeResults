<link rel="stylesheet" href="re2.css">
<?php

switch ($_POST["tex"])
{
    case 1:
    details("Harsh Yadav",77,79,85,96,74,69,52);
    break;
    case 2:
    details("Jagdeep Mishra",77,79,85,96,74,69,52);
    break;
    case 3:
    details("Yashwant Gotiya",77,79,85,96,74,69,52);
    break;
    case 4:
    details("Gorav Prakash",77,79,85,96,74,69,52);
    break;
    case 5:
    details("Homesh Upadhya",77,79,85,96,74,69,52);
    break;
    case 5485:
    details("Saurabh Kumar",77,79,85,96,74,69,52);
    break;
    case 7:
    details("Dileep Jhariya",77,79,85,96,74,69,52);
    break;
    case 8:
    details("Akash Jain",77,79,85,96,74,69,52);
    break;
    default:
    echo "<h2>Roll number does not exist</h2>";
}
function details($na,$p1,$p2,$p3,$p4,$p5,$p6,$p7)
{
    echo "<center>";
    echo "<table>";
    echo "<tr><th>Roll number is: </th><th>".$_POST["tex"]."</th></tr>";
    echo "<tr><td> Name is: </td><td>".$na."</td></tr>";
    echo "<tr><td> Computer applcation(Paper 1): </td><td>".$p1."</td></tr><br>";
    echo "<tr><td> Computer applcation(Paper 2): </td><td>".$p2."</td></tr><br>";
    echo "<tr><td> Mathematics: </td><td>".$p3."</td></tr><br>";
    echo "<tr><td> Geology: </td><td>".$p4."</td></tr><br>";
    echo "<tr><td> Vocational: </td><td>".$p5."</td></tr><br>";
    echo "<tr><td> Foundation 1: </td><td>".$p6."</td></tr><br>";
    echo "<tr><td> Foundation 2: </td><td>".$p7."</td></tr><br>";
    echo "</center>";  
}
?>