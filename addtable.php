<?php
include 'dbtekconnect.php';

CREATE TABLE saaob_year (
	id INT PRIMARY KEY AUTO_INCREMENT,
	account_name VARCHAR(200),
	account_code VARCHAR(200),
	year VARCHAR(200),
	org_appropriation VARCHAR(200),
	allotment VARCHAR(200),
	obligation VARCHAR(200),
	bal_appropriation VARCHAR(200),
	bal_allotment VARCHAR(200)
);

?>