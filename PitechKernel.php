<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 12/11/14
 * Time: 6:25 PM
 */

namespace Pitech\FrameworkBundle;

use Symfony\Component\ClassLoader\UniversalClassLoader;


abstract class PitechKernel implements PitechKernelInterface
{

    protected $loader;
    protected $bundles;

    public function __construct()
    {
        $this->loader = new UniversalClassLoader();
        $this->bundles = $this->registerBundles();
    }

    public function loadClasses()
    {

        foreach ($this->bundles as $name => $path) {
            $this->loader->registerNamespace($name, $path);
        }

        $this->loader->register();
    }

}