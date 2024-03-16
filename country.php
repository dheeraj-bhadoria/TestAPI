<?php

// Define an array of countries
$countries = array(
    "Afghanistan",
    "Albania",
    "Algeria",
    // Add more countries as needed...
);

// Set the response header to JSON
header('Content-Type: application/json');

// Encode the countries array to JSON and output it
echo json_encode($countries);
