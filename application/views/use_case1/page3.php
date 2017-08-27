<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
	<meta charset="utf-8">
	<title>Use Case 1</title>
</head>
<body>
	<h1>Use case 1</h1>
	<p>Page 3</p>
	<p>Forms</p>
  <form action="searchExampleName" method="POST">
    <input type="text" name="example_name" placeholder="Inser example name"/>
    <button type="submit" name="submit">Submit</button>
  </form>
  <br>
  <a id="asyncReq">AJAX request: <span id="asyncReqRes"></span></a>
	<script src="<?=base_url();?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?=base_url();?>assets/js/config.js"></script>
  <script src="<?=base_url();?>assets/js/page3.js"></script>
</body>
</html>
