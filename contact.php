<?php include 'header.php'; ?>
<?php
  //Message Varibles
  $msg = '';
  $msgClass = '';
  //Check for submit
  if (filter_has_var(INPUT_POST, 'submit')) {
    //Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Required Fields
    if (!empty($name) && !empty($email) && !empty($message)) {
      //Passed
      //Check Email
      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        //Failed
        $msg = 'Please use a valid email address... chompipe!!!';
        $msgClass = 'alert-danger';
      } else {
        //Passed
        //echo 'You Information has been submited succesfully!';
        //Recipent email
        $toEmail = 'shaggyfo@gmail.com';
        $subject = 'Contact request from: '.$name;
        $body = '<h1>Contact Request</h1>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
        ';

        // Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
          // Email sent
          $msg = 'Your email has been sent... chompipe!!!';
          $msgClass = 'alert-success';
        } else {
          // Email not sent
          $msg = 'Your email was not sent... chompipe!!!';
          $msgClass = 'alert-danger';
        }

      }
    } else {
      //Failed
      $msg = 'Please fill in all fields... chompipe!!!';
      $msgClass = 'alert-danger';

    }
  }

?>

  <h1 class="mainTitle">CONTACT</h1>

  <div class="container">
    <?php if ($msg != '') : ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


<?php include 'footer.php'; ?>
