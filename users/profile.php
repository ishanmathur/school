<?php
    require_once('../header.php');
    $u = $_GET['id'];
    $sql = "SELECT username, fullname, imgloc, bio, branch, bday, phone, city, created_at FROM users WHERE id='".$u."'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
?>
<link rel="stylesheet" href="../css/welcome.css">
    <div class="container">
            <div id="info"><br>
                <div style="background: url('<?php if($row["imgloc"] != '') { echo "../".$row["imgloc"]; } else { echo "../img/navbar/user-min.png"; } ?>'); background-size: cover; background-position: center;"; id="profilepic"></div>
                <h3>@<b><?php echo $row["username"]; ?></b></h3>
                <?php
                    if($row["bio"] != "") {
                        echo '&nbsp; &nbsp; <b> Bio</b> :
                              <h5>'.$row["bio"].'</h5>'; 
                    }
                ?><br>
                <h3 style="color: black;"><b><?php echo $row["fullname"]; ?> </b></h3>
                
                
                <?php
                    if($row["city"] != "") { echo '<div class="details"><img src="../img/profiledetails/city.png" width="35" height="auto"> &nbsp; '.$row["city"].'</div>'; }
                    if($row["branch"] != "") { echo '<div class="details"><img src="../img/profiledetails/branch.png" width="35" height="auto"> &nbsp; '.$row["branch"].'</div>'; }
                    if($row["phone"] != "") { echo '<div class="details"><img src="../img/profiledetails/phone.png" width="35" height="auto"> &nbsp; '.$row["phone"].'</div>'; }
                    if($row["bday"] != "") { echo '<div class="details"><img src="../img/profiledetails/bday.png" width="35" height="auto"> &nbsp; '.$row["bday"].'</div>'; }
                    if($row["created_at"] != "") { echo '<div class="details"><img src="../img/profiledetails/joined.png" width="35" height="auto"> &nbsp; '.$row["created_at"].'</div>'; }
                ?>
                
            </div>
        </div>
    </div>

    <?php require_once('../footer.php'); ?>