<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

/**
 * This autoloading setup is really less complicated than it needs to
 * be. The ZF2 skeleton distributed by Zend accounts for many 
 * scenarios. However it is my belief that each of those scenarios
 * are false. You should just use composer and if you aren't using
 * composer you're gonna have a bad time.
 */

// Composer autoloading
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    $loader = include __DIR__ . '/vendor/autoload.php';
}

if (!class_exists('Zend\Loader\AutoloaderFactory')) {
    throw new RuntimeException('Unable to load ZF2. Run `php composer.phar install` or define a ZF2_PATH environment variable.');
}

return $loader;
