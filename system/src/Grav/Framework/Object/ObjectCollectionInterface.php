<?php
/**
 * @package    Grav\Framework\Object
 *
 * @copyright  Copyright (C) 2014 - 2017 RocketTheme, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Object;

use Grav\Framework\Collection\CollectionInterface;

/**
 * ObjectCollection Interface
 * @package Grav\Framework\Collection
 */
interface ObjectCollectionInterface extends CollectionInterface, ObjectInterface
{
    /**
     * Create a copy from this collection by cloning all objects in the collection.
     *
     * @return static
     */
    public function copy();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey($key);

    /**
     * @return array
     */
    public function getObjectKeys();

    /**
     * @param string $property      Object property to be fetched.
     * @param mixed $default        Default value if not set.
     * @return array                Property value.
     */
    public function getProperty($property, $default = null);

    /**
     * @param string $property  Object property to be updated.
     * @param string $value     New value.
     */
    public function setProperty($property, $value);

    /**
     * @param string $name          Method name.
     * @param array  $arguments     List of arguments passed to the function.
     * @return array                Return values.
     */
    public function call($name, array $arguments);

    /**
     * Group items in the collection by a field.
     *
     * @param string $property
     * @return array
     */
    public function group($property);
}
