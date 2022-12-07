<?php

if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["cars"])) {
  # code...
  header("Content-Type: application/json");
  // header("Access-Control-Allow-Origin: *");
  // header("Access-Control-Allow-Methods: POST");
  // header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  // header("Access-Control-Max-Age: 3600");
  // header("Access-Control-Allow-Credentials: true");
  // header("Access-Control-Expose-Headers: Content-Length, X-JSON");
  // header("X-Content-Type-Options: nosniff");
  // header("X-XSS-Protection: 1; mode=block");
  // header("X-Frame-Options: DENY");
  // header("X-Permitted-Cross-Domain-Policies: none");
  // header("Referrer-Policy: no-referrer");
  // header("Feature-Policy: none");
  // header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self'; img-src 'self'; font-src 'self'; connect-src 'self'; frame-src 'self'; object-src 'self'; media-src 'self'; worker-src 'self'; child-src 'self'; form-action 'self'; frame-ancestors 'self'; plugin-types application/pdf; base-uri 'self'; manifest-src 'self'; prefetch-src 'self'; report-uri /report-violation; block-all-mixed-content; require-sri-for script style;");
  // header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
  // header("X-Download-Options: noopen");
  header("HTTP/1.1 200 OK");
  echo json_encode(array(
    'name' => $_POST["name"],
    'age' => (int)$_POST["age"],
    'cars' => $_POST["cars"]
  ));
}
