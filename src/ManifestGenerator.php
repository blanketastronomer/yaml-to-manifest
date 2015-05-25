<?php

class ManifestGenerator {
    private $manifest_array;

    /**
     * Constructor.
     *
     * @param $yaml_file string Path to a YAML file to parse.
     */
    public function __construct($yaml_file){
        $this->manifest_array = Spyc::YAMLLoad($yaml_file);
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
        return '$' . $section_name . ' = ' . var_export($this->manifest_array[$section_name], true) . ';';
    }
}