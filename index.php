<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventronix - Log in & Register</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="login.php" autocomplete="off" class="sign-in-form" method="post">
              
              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Don't have an account?</h6>
                <a href="#" class="toggle">Register</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input 
                    name="username"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="password"
                    type="password"
                    minlength="6"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Log In" class="sign-btn" />

                <a class="text-forgot" href="#">Forgot your password?</a>
              </div>
            </form>

            <form action="register.php" autocomplete="off" class="sign-up-form" method="post">

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Log in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    name="newname"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="newemail"
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="newpassword"
                    type="password"
                    minlength="6"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="./img/img1.png" class="image img-1 show" alt="" />
              <img src="./img/img2.png" class="image img-2" alt="" />
              <img src="./img/img3.png" class="image img-3" alt="" />
            </div>
            
            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Innovation Meets Efficiency</h2>
                  <h2>Seamless Resource Management</h2>
                  <h2>Ultimate Lab Companion</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Javascript file -->
    <script src="app.js"></script>
  </body>
</html>