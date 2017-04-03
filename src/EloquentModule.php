<?php

namespace Nwidart\Modules;

use Illuminate\Database\Eloquent\Model;
use Nwidart\Modules\Contracts\ModuleInterface;

class EloquentModule extends Model implements ModuleInterface
{
    /**
     * Get laravel instance.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function getLaravel()
    {
        return app();
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
    }

    /**
     * Get name in lower case.
     *
     * @return string
     */
    public function getLowerName()
    {
        // TODO: Implement getLowerName() method.
    }

    /**
     * Get name in studly case.
     *
     * @return string
     */
    public function getStudlyName()
    {
        // TODO: Implement getStudlyName() method.
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias()
    {
        // TODO: Implement getAlias() method.
    }

    /**
     * Get priority.
     *
     * @return string
     */
    public function getPriority()
    {
        // TODO: Implement getPriority() method.
    }

    /**
     * Get module requirements.
     *
     * @return array
     */
    public function getRequires()
    {
        // TODO: Implement getRequires() method.
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        // TODO: Implement getPath() method.
    }

    /**
     * Set path.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        // TODO: Implement setPath() method.
    }

    /**
     * Get json contents.
     *
     * @return Json
     */
    public function json($file = null)
    {
        // TODO: Implement json() method.
    }

    /**
     * Get a specific data from json file by given the key.
     *
     * @param $key
     * @param null $default
     *
     * @return mixed
     */
    public function get($key, $default = null)
    {
        // TODO: Implement get() method.
    }

    /**
     * Get a specific data from composer.json file by given the key.
     *
     * @param $key
     * @param null $default
     *
     * @return mixed
     */
    public function getComposerAttr($key, $default = null)
    {
        // TODO: Implement getComposerAttr() method.
    }

    /**
     * Register the module.
     */
    public function register()
    {
        // TODO: Implement register() method.
    }

    /**
     * Determine whether the given status same with the current module status.
     *
     * @param $status
     *
     * @return bool
     */
    public function isStatus($status)
    {
        // TODO: Implement isStatus() method.
    }

    /**
     * Determine whether the current module activated.
     *
     * @return bool
     */
    public function enabled()
    {
        // TODO: Implement enabled() method.
    }

    /**
     * Alternate for "enabled" method.
     *
     * @return bool
     */
    public function active()
    {
        // TODO: Implement active() method.
    }

    /**
     * Determine whether the current module not activated.
     *
     * @return bool
     */
    public function notActive()
    {
        // TODO: Implement notActive() method.
    }

    /**
     * Alias for "notActive" method.
     *
     * @return bool
     */
    public function disabled()
    {
        // TODO: Implement disabled() method.
    }

    /**
     * Set active state for current module.
     *
     * @param $active
     *
     * @return bool
     */
    public function setActive($active)
    {
        // TODO: Implement setActive() method.
    }

    /**
     * Disable the current module.
     *
     * @return bool
     */
    public function disable()
    {
        // TODO: Implement disable() method.
    }

    /**
     * Enable the current module.
     */
    public function enable()
    {
        // TODO: Implement enable() method.
    }

    /**
     * Get extra path.
     *
     * @param $path
     *
     * @return string
     */
    public function getExtraPath($path)
    {
        // TODO: Implement getExtraPath() method.
    }
}
