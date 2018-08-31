<?php

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Core\Config\Config;

$remove = Config::inst()->get(ModelAdmin::class, 'removelegacyimporters');
if ($remove === "scaffolded") {
    Config::inst()->update(ModelAdmin::class, 'model_importers', array());
}