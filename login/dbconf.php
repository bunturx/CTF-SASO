<?php
//DATABASE CONNECTION VARIABLES
$host = "host"; // Host name
$username = "username"; // Mysql username
$password = "pass"; // Mysql password
$db_name = "sasoconf_ctf"; // Config in /db/consulta.sql

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginAttempts";
