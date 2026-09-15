<?php
 $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 $staticFile = __DIR__ . '/../views' . $requestPath;
 if (is_file($staticFile)) {
    $contentTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
    ];
    $extension = strtolower(pathinfo($staticFile, PATHINFO_EXTENSION));
    header('Content-Type: ' . ($contentTypes[$extension] ?? 'application/octet-stream'));
    readfile($staticFile);
    exit;
}
function dump (...$vars) {
    var_dump(...$vars);
    echo '</pre>';
}

switch($_SERVER['REQUEST_URI']) {
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include __DIR__ . '/../views/us.php';
        break;
    case '/technology':
        include __DIR__ . '/../views/technology.php';
        break;
    default:
    echo '404';
}
