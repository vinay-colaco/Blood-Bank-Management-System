<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/2c624fbb65.js" crossorigin="anonymous"></script>
    <title>Details</title>
</head>
<body>
<div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="icons8-admin-settings-male-30.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="admindashboard.php">
          <i class="fas fa-solid fa-gauge"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="bloodavail.php">
          <i class="fas fa-database"></i>
          <span class="nav-item">Blood Collection</span>
        </a></li>
        <li><a href="adddonor.php">
         <i class="fas fa-solid fa-user-plus"></i>
          <span class="nav-item">Add Donor</span>
        </a></li>
        <li><a href="recpavail.php">
          <i class="fas fa-sharp fa-solid fa-address-card"></i>
          <span class="nav-item">Recipient Details</span>
        </a></li>
       
        <li><a href="deldonrecp.php">
          <i class="fas fa-solid fa-user-minus"></i>
          <span class="nav-item">Delete Details</span>
        </a></li>
        <li><a href="announc.php">
          <i class="fas fa-sharp fa-solid fa-bullhorn"></i>
          <span class="nav-item">Add Announcements</span>
        </a></li>
        
        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main">
        <div class="main-top">
          <h1>ADMIN PANEL</h1>
          
        </div>
       
        <section class="attendance">
          <div class="attendance-list">
            <h1> DETAILS</h1>
           
                    
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>    




                </tbody>    
            </table>
          </div>
        </section>
      </section>
    </div>
  

</body>
</html>