<?php
session_start(); 
include_once 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghorer Garage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <section>
      <header>
        <h2><a href="#"><img src="logo.png"></a></h2>
        <div class="navigation">
          <a href="/ghorergarage/mech_front_page.php">Home</a>
          <a href="/ghorergarage/mech_profile.php">View Profile</a>
          <a href="/ghorergarage/mech_approved.php">Services</a>
          <a href="logout.php">Logout</a>
        </div>
      </header>
      <div class="content">
        <div class="info">
        <h1>Hello, <span><?php echo $_SESSION['username'] ?></span></h1>
        <h1>Welcome to<span><br>Ghorer Garage</h1>
          
        </div>
      </div>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </section>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

section{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  background:rgb(183, 182, 182);
  background-size: cover;
  background-position: center;
}

header{
  position: relative;
  top: 0;
  width: 100%;
  padding: 0 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header .logo{
  position: relative;
  color: #000;
  font-size: 30px;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 1px;
}

header .navigation a{
  color: #000000;
  text-decoration: none;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 2px 15px;
  border-radius: 20px;
  transition: 0.3s;
  transition-property: background;
}

header .navigation a:not(:last-child){
  margin-right: 30px;
}

header .navigation a:hover{
  background: #cccccc;
}

.content{
  max-width: 650px;
  margin: 60px 100px;
}

.content .info h2{
  color: #000000;
  font-size: 55px;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 2px;
  line-height: 60px;
  margin-bottom: 30px;
}

.content .info h2 span{
  color: #ffffff;
  font-size: 50px;
  font-weight: 600;
}

.content .info p{
  color: #000000;
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 40px;
}

.content .info-btn{
  color: #fff;
  background: #226A80;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 2px;
  padding: 10px 20px;
  border-radius: 5px;
  transition: 0.3s;
  transition-property: background;
}

.content .info-btn:hover{
  background: #0C4F60;
}

.media-icons{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}

.media-icons a{
  position: relative;
  color: #111;
  font-size: 25px;
  transition: 0.3s;
  transition-property: transform;
}

.media-icons a:not(:last-child){
  margin-right: 60px;
}

.media-icons a:hover{
  transform: scale(1.5);
}

label{
  display: none;
}

#check{
  z-index: 3;
  display: none;
}

/* Responsive styles */

@media (max-width: 960px){
  header .navigation{
    display: none;
  }

  label{
    display: block;
    font-size: 25px;
    cursor: pointer;
    transition: 0.3s;
    transition-property: color;
  }

  label:hover{
    color: #fff;
  }

  label .close-btn{
    display: none;
  }

  #check:checked ~ header .navigation{
    z-index: 2;
    position: fixed;
    background: rgba(114, 223, 255, 0.9);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  #check:checked ~ header .navigation a{
    font-weight: 700;
    margin-right: 0;
    margin-bottom: 50px;
    letter-spacing: 2px;
  }

  #check:checked ~ header label .menu-btn{
    display: none;
  }

  #check:checked ~ header label .close-btn{
    z-index: 2;
    display: block;
    position: fixed;
  }

  label .menu-btn{
    position: absolute;
  }

  header .logo{
    position: absolute;
    bottom: -6px;
  }

  .content .info h2{
    font-size: 45px;
    line-height: 50px;
  }

  .content .info h2 span{
    font-size: 40px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 14px;
  }
}

@media (max-width: 560px){
  .content .info h2{
    font-size: 35px;
    line-height: 40px;
  }

  .content .info h2 span{
    font-size: 30px;
    font-weight: 600;
  }

  .content .info p{
    font-size: 14px;
  }
}
</style>
  </body>
</html>