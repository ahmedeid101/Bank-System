<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" class="href">
    
  </head>
  <body>

    <header>
        <a href="#contact" class="logo">Ahmed</a>
        <nav class="navigation" >
            <a href="#About">About</a>
            <a href="#services">services</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="main" id="About">
      <div>
          <h2>Hello, I'm Ahmed <br> <span>Web Developer</span> </h2>
          <h3></h3>
          <a href="https://github.com/ahmedeid101" class="main_btn">View my work</a>
          <div class="social-icons">
              <a href="https://www.linkedin.com/in/ahmed-eid-4085b2202/"><i class="fab fa-linkedin"></i></a>
              <a href="https://github.com/ahmedeid101"><i class="fab fa-github"></i></a>
              <a href="https://www.instagram.com/ahmed_eid404/"><i class="fab fa-instagram"></i></a>
          </div>
      </div>
  </section>

<section class="body-content" id="services">
    
        <div class="welcome">
          <h2>Welcome to our Bank</h2>
        </div>
        
      <div class="statistics">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <a href="TransferMoney.php">
              <div class="box">
                <i class="fa fa-envelope fa-fw bg-primary"></i>
                <div class="info">
                  <h3 a href="TransferDetails.php">Transfer Money</h3>
                  <p>Pay bills online...</p>
                </div>
              </div>
              </a>
            </div>

            <div class="col-md-4">
              <a href="newuser.php"> 
              <div class="box">
                <i class="fa fa-file fa-fw danger"></i>
                <div class="info">
                  <h3 a href="newuser.php">Create User</h3>
                  <p>New User Sign-Up</p>
                </div> 
              </div>
              </a>
            </div>

            <div class="col-md-4">
            <a href="TransactionHistory.php">
              <div class="box">
                <i class="fa fa-users fa-fw success"></i>
                <div class="info">
                  <h3 a href="TransactionHistory.php">Transactions</h3>
                  <p>Effortless Transact</p>
                </div>
              </div>
            </a>
            </div>
          </div>
        </div>
      </div>
</section>


<section class="cards contact" id="contact">
        <h2 class="title">Let's work together</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info">
                    <h3>Phone</h3>
                    <p>+201115684824</p>
                </div>

            </div>

            <div class="card">
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>Email</h3>
                    <p>ahmedgebrel101@gmail.com</p>
                </div>

            </div>
            </div>
    </section>

  <footer class="footer">
        <p>Copyrights @ <span class="footer-title">Ahmed Eid</span></p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

    </footer>


  
    
</body>
</html>