<?php

class ManifestGenerator {
    private $manifest_array;
    private $generated_manifest;

    /**
     * Constructor.
     *
     * @param $yaml_file string Path to a YAML file to parse.
     */
    public function __construct($yaml_file){
        $this->manifest_array = Spyc::YAMLLoad($yaml_file);
        $this->generated_manifest = '';
    }

    /**
     * Adds a section to the manifest.
     *
     * @param $section_name string Name of the YAML section to add.
     *
     * @return string Manifest data to add.
     */
    public function addSection($section_name)
    {
        $this->generated_manifest .= "\n$"
            . $section_name
            . ' = '
            . var_export($this->manifest_array[$section_name], true)
            . ";\n";
    }

    public function generate($path='manifest.yml')
    {
        $file_contents = <<<FILE
<?php
$this->generated_manifest
?>
FILE;
        file_put_contents($path, $file_contents);
    }
}
