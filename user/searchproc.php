<?php
    session_start();
    include 'dbcon.php';
    $query="SELECT * FROM DONOR";
$result=mysqli_query($con,$query);
?>
<?php
    $bldgrp=$_POST['bldgrp'];
 ?>
  <?php
     
     $stmt1=$con->prepare("SELECT * FROM RECIPIENT WHERE RECPT_ID=?");
     $stmt1->bind_param("i",$_SESSION['usrid']);
     $stmt1->execute();
     $stmt_result1=$stmt1->get_result();
    //  $data=$stmt_result->fetch_assoc();
    
    if($stmt_result1->num_rows>0){
        $stmt2=$con->prepare("SELECT * FROM DONOR WHERE BLOOD_GRP=?");
        $stmt2->bind_param("s",$bldgrp);
        $stmt2->execute();
        $stmt_result2=$stmt2->get_result();
        if($stmt_result2->num_rows>0){

        }else{
           
            header("Location: search.php?error=No result found");
            exit();
    
          }

 
    
        
    }else{ 
        header("Location: donsearchbyrecp.php?error=You are not a registered user. Please register Here");
        exit();
    }

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donor Details</title>
  <link rel="stylesheet" href="usrdash.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/2c624fbb65.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="icons8-user-64.png">
          <span class="nav-item">User</span>
        </a></li>
        <li><a href="userdashboard.php">
          <i class="fas fa-solid fa-gauge"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="availblood.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Blood Collection</span>
        </a></li>
        <li><a href="donateblood.php">
            <i class="fas fa-solid fa-hand-holding-medical"></i>
          <span class="nav-item">Donate Blood</span>
        </a></li>
        <li><a href="donsearchbyrecp.php">
        <i class="fas fa-regular fa-align-justify"></i>
          <span class="nav-item">Recipient Form</span></a></li>

            <li><a href="search.php">
            <i class="fas fa-regular fa-magnifying-glass"></i>  
            <span class="nav-item">Search Donor</span>
        </a></li>
       
        <li><a href="viewannoun.php">
          <i class="fas fa-sharp fa-solid fa-bullhorn"></i>
          <span class="nav-item">View Announcements</span>
        </a></li>
       
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>USER PANEL</h1>
        
      </div>
      

      <section class="attendance">
        <div class="attendance-list">
          <h1>DONOR LIST</h1>
          <table class="table">
            <thead>
              <tr>
                <th>S.NO</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>GENDER</th>             
                <th>BLOOD GROUP</th>
                <th>QUANTITY</th>
                <th>EMAIL</th>
                <th>ADDRESS</th>
                <th>CONTACT</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $counter=0;           
                  while($row=mysqli_fetch_assoc($result))
                  { if($row['BLOOD_GRP']===$bldgrp){
                        $counter=$counter+1;?>
                <tr>
               

                  <td><?php echo $counter;?></td>
                  <td><?php echo $row['FNAME'];?></td>
                  <td><?php echo $row['LNAME'];?></td>
                  <td><?php echo $row['GENDER'];?></td>
                  <td><?php echo $row['BLOOD_GRP'];?></td>
                  <td><?php echo $row['QUANTITY'];?></td>
                  <td><?php echo $row['EMAIL'];?></td>
                  <td><?php echo $row['ADDRESS'];?></td>
                  <td><?php echo $row['CONTACT'];?></td>
                  
               
                </tr><?php
                  }?>

                    <?php
                }
                ?>
                
             

              
            </tbody> 
          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
