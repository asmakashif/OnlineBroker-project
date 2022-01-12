<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Form </title>
</head>

<body>
    <h3>Registration Form </h3> </br>
    </br>
    <form action="<?php echo base_url('welcome/savegeo');?>" method="post">
        <input type="" name="txtlat" id="txtlat" required value="">
        <input type="" name="txtlang" id="txtlang" required value="">
        <label>Name : </label>
        <input type="text" name="txt_name" id="txt_name" required placeholder="Please type your name here"> </br>
        </br>
        <label>Date of Birth : </label>
        <input type="date" name="txt_dob" id="txt_dob" required placeholder="Please type your date of birth here"> </br>
        </br>
        <label>State : </label>
        <input type="text" name="txt_state" id="txt_state" required placeholder="Please type your state here"> </br>
        </br>
        <label>City : </label>
        <input type="text" name="txt_city" id="txt_city" required placeholder="Please type your city here"> </br>
        </br>
        <label>Phone NO. : </label>
        <input type="text" name="txt_phno" id="txt_phno" required placeholder="Type your phone number here"> </br>
        </br>
        <label>ZIP : </label>
        <input type="text" name="txt_zip" id="txt_zip" required placeholder="Please type your ZIP code here"> </br>
        </br>
        <input type="submit" value="submit"> </form>
</body>
<!-- <script src="jquery.min.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/');?>geoloc.js"></script>

</html>