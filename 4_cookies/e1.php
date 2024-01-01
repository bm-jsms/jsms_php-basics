<?php

// Cookies

setcookie(
    name: "myCookie", // name of the cookie
    value: "Test Cookie", // value of the cookie
    expires_or_options: time() + 86400, // 1 day
    path: "/", // available in the entire website
    domain: "localhost", // available in the entire domain
    secure: false, // available in http or https
    httponly: false // available in http or https
); 

echo $_COOKIE["name"]; // Test Cookie

?>