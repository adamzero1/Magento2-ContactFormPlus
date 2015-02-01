# Magento2-ContactFormPlus
<h3>Description/Plan</h3>
<p>Magento 2 module Allows storage of contact forms, as well as adding the ability to "resolve" contacts and provide a note about the resolution.</p><hr/>

<h3>Install instructions</h3>
<ol>
<li>check all is well before hand:<br />
<pre>composer update -v</pre>
If you get any issues resolve them now.</li>

<li>Add the following to your composer.json file:
<pre>{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/adamzero1/Magento2-ContactFormPlus.git"
        }
    ],
    "require": {
        "zero1/contact-form-plus": "dev-master"
    }
}</pre>
</li>

<li>Add the following to the <pre>'modules'</pre> array in [MAGENTO ROOT]/app/code/config.php:
<pre>'Zero1_ContactFormPlus' => 1,</pre></li>

<li>(get what we just added)<br />
</pre>composer update -v</pre><br />
All should be gravy.<br />
If you see something like:<br />
<pre>
[ErrorException]
  Target app/code/Path/To/Some/File/blah.php already exists (set extra.magento-force to override)
</pre>
add <pre>"magento-force": true,</pre> to the 'extra' part of your composer.json
</li>


</ol>
