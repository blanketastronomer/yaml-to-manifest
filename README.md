# YAML to Manifest

[![Build Status](https://travis-ci.org/blanketastronomer/yaml-to-manifest.svg?branch=master)](https://travis-ci.org/blanketastronomer/yaml-to-manifest)

## What is it?

YAML to Manifest is a bit of an experiment I created to make generating manifest
files for SugarCRM and/or SuiteCRM in YAML so I don't have to muck around with
PHP arrays directly.  This project is the result.

## How do I use this?

It's rather simple.  Just grab it with Composer.  Unfortunately, it's not on
Packagist yet, so you'll have to grab it like this:

```JSON
{
  "repositories": [
    {
      "url": "https://github.com/blanketastronomer/yaml-to-manifest.git",
      "type": "git"
    }
  ],
  "require": {
    "blanketastronomer/yaml-to-manifest": "dev-master"
  }
}
```

On the command line, run the following:

```bash
composer update && composer install
```

Then, somewhere in your build process, insert the following:

```php
require 'vendor/autoload.php'; // Insert this ONLY if you haven't already.

$gen = new ManifestGenerator('manifest.yml');

$gen->addSection('manifest');
$gen->addSection('installdefs');

$gen->generate();
```

Running the above code will generate a ```manifest.php``` file from the
```manifest.yml``` file found in the same directory as the file that the above
code resides in.

For example, if the above code lives at ```<project_root>/build.php``` and you
have ```<project_root>/manifest.yml```, running the above code will generate
a ```<project_root>/manifest.php```.

## How do I contribute?

1. Fork the repo
2. Write your tests, then write the code to make them pass.  Code will **not**
be accepted without passing tests.
3. Submit a pull request.

That's it!

## Anything else?

 Oh yeah, this repo is licensed under the GPLv3.  See LICENSE.txt for details.
