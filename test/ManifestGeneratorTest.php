<?php

require 'src/ManifestGenerator.php';

class ManifestGeneratorTest extends PHPUnit_Framework_TestCase
{
    protected $generator;
    protected $manifest_section;

    protected function setUp()
    {
        $this->generator = new ManifestGenerator('test/manifest.yml');
        $this->manifest_section = <<<'MANIFEST'
$manifest = array (
  'author' => '<author_name>',
  'description' => '<module_description>',
  'name' => '<module_name>',
  'acceptable_sugar_versions' => 
  array (
    0 => '6.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'CE',
    1 => 'PRO',
    2 => 'CORP',
    3 => 'ENT',
    4 => 'ULT',
  ),
  'key' => '<module_key>',
  'type' => 'module',
  'icon' => '<icon_file>',
  'is_uninstallable' => true,
  'published_date' => '@@PUBLISH_DATE@@',
  'readme' => '<path_to_readme>',
  'version' => '@@VERSION@@',
);
MANIFEST;
    }

    public function testAddsManifestSection()
    {
        $this->assertEquals($this->manifest_section, $this->generator->addSection('manifest'));
    }
}

