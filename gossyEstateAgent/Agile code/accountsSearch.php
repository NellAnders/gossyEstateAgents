<?php

    include("databaseConn.php");

?>

<?php

$sql = "SELECT * FROM Accounts WHERE Username LIKE '%Test%'";
$result = mysqli_query($conn, $sql)
// SELECT * FROM [table] WHERE [field] LIKE '%stringtosearchfor%'
?>

<?php

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        ?><div class="container">
            <p class="Row"><?php echo $row["AccountID"]." ".$row["Access Level"]." ".$row["Username"];?></p>
            <hr />
        </div>
        <?php
    }
}else{
    echo "No Accounts have been made";
}

$conn->close();
?>

