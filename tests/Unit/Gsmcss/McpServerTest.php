<?php

namespace Tests\Unit\Gsmcss;

use Tests\TestCase;
use Illuminate\Support\Facades\File;

class McpServerTest extends TestCase
{
    public function test_mcp_package_json_exists()
    {
        $this->assertTrue(File::exists(base_path('gsmcss-mcp-server/package.json')));
    }

    public function test_mcp_entry_exists()
    {
        $this->assertTrue(File::exists(base_path('gsmcss-mcp-server/index.js')));
    }
}
