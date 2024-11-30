<?php

use Kaviru\MuseCore\ErrorHandling;

# Set the custom error handler
register_shutdown_function(function () {
    ErrorHandling::customError();
});

# Hide default php errors
ini_set('display_errors', 0);

include_once __DIR__ . '/vendor/autoload.php';

ob_start();

require_once __DIR__ . '/vendor/kaviru/muse-core/src/site_data.php';
require_once __DIR__ . '/routes/web.php';

ErrorHandling::check_404();
