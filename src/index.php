<?php
#!/usr/bin/env php
// application.php

declare(strict_types=1);
require __DIR__ . '../../vendor/autoload.php';

use App\Commands\HelloWorld;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register Commands
$application->add(new HelloWorld());
$application->run();