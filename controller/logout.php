<?php

session_start();
session_destroy(); // Destroy the session
header("Location: ../"); // Redirect to homepage
exit;
