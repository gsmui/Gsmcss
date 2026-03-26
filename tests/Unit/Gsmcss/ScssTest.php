<?php

namespace Tests\Unit\Gsmcss;

use Tests\TestCase;
use Illuminate\Support\Facades\File;

class ScssTest extends TestCase
{
    public function test_gsmcss_scss_entry_exists()
    {
        $this->assertTrue(File::exists(resource_path('scss/gsmcss.scss')));
    }

    public function test_utility_files_exist()
    {
        $utilities = ['spacing', 'colors', 'flex', 'grid', 'display'];
        foreach ($utilities as $util) {
            $this->assertTrue(File::exists(resource_path("scss/utilities/_$util.scss")));
        }
    }
}
