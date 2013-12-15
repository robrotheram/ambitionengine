<?php
require '../ambitionengine/email.php';
sendEmail('robrotheram@gmail.com',$_POST['emailFrom'],$_POST['subject'],$_POST['message']);
