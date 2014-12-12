<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 12/11/14
 * Time: 6:29 PM
 */

namespace Pitech\FrameworkBundle;

class PitechBundle implements PitechBundleInterface
{

    /**
     * Gets the Bundle namespace.
     *
     * @return string The Bundle namespace
     *
     */
    public function getNamespace()
    {
        $class = get_class($this);

        return substr($class, 0, strrpos($class, '\\'));
    }

    /**
     * Gets the Bundle directory path.
     *
     * @return string The Bundle absolute path
     *
     */
    public function getPath()
    {
        $reflected = new \ReflectionObject($this);
        $path = dirname($reflected->getFileName());

        return $path;
    }
}