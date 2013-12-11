<?php  return 'function elements_modsnippet_41($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
// Start or resume session
session_start(); 

// Extend cookie life time by an amount of your liking
$cookieLifetime = 365 * 24 * 60 * 60; // A year in seconds
setcookie(session_name(),session_id(),time()+$cookieLifetime);
}
';