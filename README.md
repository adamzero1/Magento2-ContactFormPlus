# Magento2-ContactFormPlus
<h3>Description/Plan</h3>
<p>Magento 2 module Allows storage of contact forms, as well as adding the ability to "resolve" contacts and provide a note about the resolution.</p><hr/>

Install instructions,
check all is well before hand: composer update -v

This stuff will need to be added to your composer.json file

{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/adamzero1/Magento2-ContactFormPlus.git"
        }
    ],
    "require": {
        "zero1/contact-form-plus": "dev-master"
    }
}

This will need to be added to your etc/config.php
in the 'modules' array()
'Zero1_ContactFormPlus' => 1,


then: composer update -v
All should be gravy

If you see something like:
[ErrorException]
  Target app/code/M2Demo/M2Extension/Controller/Index/SayHello.php already exists (set extra.magento-force to override)

  Add:
  "magento-force": true,

  to "extra" in composer.json
