<?php
$NameError = " ";
$EmailError = " ";
$GenderError = " ";
$WebsiteError = " ";

if (isset($_POST['Submit'])) {
  if (empty($_POST["Name"])) {
    $NameError = "Name is Required";
  }
  else {
    $Name = Test_User_Input($_POST["Name"]);
    if (!preg_match("/^[A-Za-z. ]*$/", $Name)) {
      $NameError = "Only Letters and white spaces allowed.";
    }
  }
  if (empty($_POST["Email"])) {
    $EmailError = "Email is Required";
  }
  else {
    $Email = Test_User_Input($_POST["Email"]);
    if (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email)) {
      $EmailError = "Invalid Email Format";
    }
  }
  if (empty($_POST["Gender"])) {
    $GenderError = "Gender is Required";
  }
  else {
    $Gender = Test_User_Input($_POST["Gender"]);
  }
  if (empty($_POST["Website"])) {
    $WebsiteError = "Website is Required";
  }
  else {
    $Website = Test_User_Input($_POST["Website"]);
    if (!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $Website)) {
      $WebsiteError = "Invalid Website Address";
    }
  }
}

function Test_User_Input($Data) {
  return $Data;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Validation</title>
  </head>
  <body>
    <h2>Form Validation with PHP.</h2>
    <form action="FormValidation.php" method="post">
      <legend>* Please Fill Out the following Fields.</legend>
        <fieldset>
          Name:<br>
          <input class="input" type="text" name="Name" placeholder="Name">
          * <?php echo $NameError; ?><br>
          E-mail:<br>
          <input class="input" type="text" name="Email" placeholder="Email">
          * <?php echo $EmailError; ?><br>
          Gender:<br>
          <input class="radio" type="radio" name="Gender" value="Female">Female
          <input class="radio" type="radio" name="Gender" value="Male">Male
          * <?php echo $GenderError; ?><br>
          Website:<br>
          <input class="input" type="input" name="Website" value="">
          * <?php echo $WebsiteError; ?><br>
          Comment:<br>
          <textarea name="Comment" rows="5" cols="25"></textarea>
          <br>
          <br>
          <input type="Submit" name="Submit" value="Submit Your Information">
        </fieldset>
    </form>
  </body>
</html>
