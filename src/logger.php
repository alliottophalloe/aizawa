<?php
function log_access($message, $ip) {
    $logfile = 'access.log';
    $time = date('Y-m-d H:i:s');
    $log_message = "[$time] $ip: $message" . PHP_EOL;
    file_put_contents($logfile, $log_message, FILE_APPEND);
}
?>
