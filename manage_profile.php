<?php
session_start();
$email = trim($email);
echo "<h4 style='text-align:center;'>Welcome back, $username!</h4>";
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OG Tech - My Profile Dashboard</title>
  <meta name="theme-color" content="#ff9800">
  <?php include "header.php"; ?>
</head>
<body>

  <div class="errormsg">
    <?php
    if (isset($_GET["error"])) {
      echo "<script>
        let msg = document.getElementById('msg');
        msg.className = 'red-text bold pulse';
        msg.innerHTML = 'Please review your information carefully!';
      </script>";
    }

    if ($_GET["error"] == "empty_input")
      echo "<script>document.getElementById('msg').innerHTML = '*Fill in all fields!';</script>";

    if ($_GET["error"] == "none") {
      echo "<script>document.getElementById('msg').className = 'green-text';</script>";
      echo "<script>document.getElementById('msg').innerHTML = 'Profile updated!';</script>";
      M.toast({html: 'Profile updated successfully!'});
    }
    ?>
  </div>
  
  <div class="card-content grey darken-4 white-text">
    <form class="s12" action="includes/manage_profile.inc.php" method="POST">
      <input type="file" name="profile_pic" accept="image/*">
      <div class="row">
        <div class="input-field s6">
          <i class="material-icons prefix">account_circle</i>
          <?php
          echo "<input disabled name='id' type='hidden' value='$memberID'/>";
          echo "<input disabled class='validate white-text' maxlength='20' required name='username' id='username' type='text' value='$username'/>";
          ?>
          <label class='cyan-text' for="username">Enter New Username</label>
          <span class="helper-text grey-text" data-error="Min 5, Max 12 characters" data-success="Min 5, Max 12 characters">Min 5, Max 12 characters</span>
        </div>
      </div>
      <br>
      <p class="center-align">
        <button disabled id="update_acc" class="btn green lighten-1" type="submit" name="update">Update Account</button>
      </p>
    </form>
  </div>        

  <script>
    var submitBtn = document.querySelector("#update_acc");

    function confirm_edit(btn) {
      username.classList.toggle("highlight");
      email.classList.toggle("highlight");

      username.disabled = false;
      email.disabled = false;
      pwd.disabled = false;
      repeatPwd.disabled = false;
      submitBtn.disabled = false;

      btn.textContent = "Editing Enabled";
    }

    function fade_in() {
      $("#msg").fadeIn().delay(2500).fadeOut();
    }

    function togglePwd() {
      pwd.type = pwd.type === "password" ? "text" : "password";
    }
  </script>
</body>
</html>