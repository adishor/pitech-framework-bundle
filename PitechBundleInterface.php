<?php
/**
 * Created by PhpStorm.
 * User: adi
 * Date: 12/11/14
 * Time: 6:29 PM
 */

namespace Pitech\FrameworkBundle;


interface PitechBundleInterface
{
    public function getNamespace();

    public function getPath();
}