<?php 
require_once '../php/HandleSubmit.php';
            $get_messages = new HandleSubmit();
            $messages = $get_messages->getAll();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contact Form </title>
  </head>
  <body>
<div class="container">
    <h2>Received Messages</h2>
    <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SUBJECT</th>
         <th scope="col">MESSAGE</th>
    </tr>
  </thead>
  <tbody>
      <? foreach ($messages as $message) : ?>
    <tr>
      <th scope="row"><?php echo $message->id ?></th>
      <td><?php echo $message->name ?></td>
      <td><?php echo $message->email ?></td>
      <td><?php echo $message->subject ?></td>
      <td><?php echo $message->message ?></td>
    </tr>
  <? endforeach ?>
  </tbody>
</table>
<a role="button" class="btn btn-primary" href="index.php">Back to Form</a>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
  </body>
</html>
