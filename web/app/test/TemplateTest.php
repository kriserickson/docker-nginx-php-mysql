<?php

namespace AppTest\TemplateManager;

use App\TemplateManager\Template;
use PHPUnit\Framework\TestCase;

class TemplateManagerTest extends TestCase
{
    public function testGetName()
    {
        $foo = new Template();
        $this->assertEquals($foo->getName(), 'Nginx PHP MySQL');
    }
}
