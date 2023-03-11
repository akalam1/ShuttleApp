<?php

$err = filter_input(INPUT_GET, 'error');
if ($err === "login") echo "<script>alert('Email or Password is incorrect!');</script>";
