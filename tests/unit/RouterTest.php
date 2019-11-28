<?php

use PHPUnit\Framework\TestCase;

class RouterTest extends PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function load_require_file_and_returns_routs() {
        $file = 'app/core/routes.php';

        $this->assertFileExists($file);
    }

}