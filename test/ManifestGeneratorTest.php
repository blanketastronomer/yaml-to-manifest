<?php

class ManifestGeneratorTest extends PHPUnit_Framework_TestCase
{
    protected $generator;
    protected $manifest_section;

    protected function setUp()
    {
        $this->generator = new ManifestGenerator('test/manifest.yml');
    }

    public function testAddsManifestSection()
    {
        $this->generator->addSection('manifest');
        $this->generator->addSection('installdefs');
        $this->generator->generate('test/temp/manifest.php');
        $this->assertEquals(file_get_contents('test/temp/compare.php'), file_get_contents('test/temp/manifest.php'));
    }
}

