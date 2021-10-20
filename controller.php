<?php
// Author: Ryan Hewitt - http://www.mesuva.com
namespace Concrete\Package\MsvSignoutCacheClear;

use Concrete\Core\Package\Package;
use Concrete\Core\Support\Facade\Events;

class Controller extends Package {

    protected $pkgHandle = 'msv_signout_cache_clear';
    protected $appVersionRequired = '8.0';
    protected $pkgVersion = '1.0';

    public function getPackageDescription() {
        return t("Automatically clear the site cache when a user signs out");
    }

    public function getPackageName() {
        return t("Sign Out Cache Clear");
    }

    public function on_start()
    {
        Events::addListener('on_user_logout', function($event) {
            $this->app->clearCaches();
        });
    }
}
