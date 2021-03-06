<?php /* Template Name: Login Page */ ?>
<?php get_header(); ?>
  <div class="loginContainer">
      <div class="card card-container">
          <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
          <!--<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />-->
          <h4 class="text-center">Login To Your Account</h4>
          <p id="profile-name" class="profile-name-card"></p>
          <form class="form-signin" action="">
              <span id="reauth-email" class="reauth-email"></span>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div id="remember" class="checkbox">
                  <label><input type="checkbox" value="remember-me"> Remember me</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
          </form><!-- /form -->
          <a href="#" class="forgot-password">Forgot password?</a><br>
          <a href="#" class="forgot-password">Register</a>
      </div><!-- /card-container -->
      <?php get_footer(); ?>
  </div><!-- /loginContainer -->
