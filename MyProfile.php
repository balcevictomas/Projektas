
<?php
include 'header.php';
include 'php_files/conn.php';
$temp=$_SESSION['ID'];

header('Content-Type: text/html; charset=utf-8');
mysqli_set_charset($conn, "utf8");

$sql = "SELECT * FROM User WHERE ID = '$temp';";
$result = $conn -> query($sql);

$row = mysqli_fetch_assoc($result);


$name = $row['User_name'];
$pass = $row['User_password'];
$Date = $row['User_BD'];
$img =  $row['User_picture'];
$sex =  $row['User_sex'];
$em =  $row['User_Email'];
 ?>

      <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src=<?php echo '"'.$img.'"'; ?> alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                <ul class="collection">
                    <li class="collection-item avatar">
                      <img src="https://pbs.twimg.com/profile_images/541935754432114688/8gM0aHJY.jpeg" alt="" class="circle">
                      <span class="title">Your user name</span>
                      <p><?php echo $name; ?>
                      </p>
                      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                      <i class="material-icons circle">folder</i>
                      <span class="title">your pass</span>
                      <p><?php echo $pass; ?>
                      </p>
                      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                      <i class="material-icons circle green">insert_chart</i>
                      <span class="title">Your Birth day</span>
                      <p><?php echo $Date; ?>
                      </p>
                      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                    <li class="collection-item avatar">
                      <i class="material-icons circle red">play_arrow</i>
                      <span class="title">Your Email</span>
                      <p><?php echo $em; ?>
                      </p>
                      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                    </li>
                  </ul>
              </span>
            </div>
          </div>
        </div>
      </div>
<?php include 'footer.php'; ?>
