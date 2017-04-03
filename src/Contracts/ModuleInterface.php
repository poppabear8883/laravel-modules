<?php

namespace Nwidart\Modules\Contracts;

use Nwidart\Modules\Json;

interface ModuleInterface
{
    /**
     * Get laravel instance.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function getLaravel();

    /**
     * Get name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get name in lower case.
     *
     * @return string
     */
    public function getLowerName();

    /**
     * Get name in studly case.
     *
     * @return string
     */
    public function getStudlyName();

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get alias.
     *
     * @return string
     */
    public function getAlias();

    /**
     * Get priority.
     *
     * @return string
     */
    public function getPriority();

    /**
     * Get module requirements.
     *
     * @return array
     */
    public function getRequires();

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath();

    /**
     * Set path.
     *
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path);

    /**
     * Bootstrap the application events.
     */
    public function boot();

    /**
     * Get json contents.
     *
     * @return Json
     */
    public function json($file = null);

    /**
     * Get a specific data from json file by given the key.
     *
     * @param $key
     * @param null $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Get a specific data from composer.json file by given the key.
     *
     * @param $key
     * @param null $default
     *
     * @return mixed
     */
    public function getComposerAttr($key, $default = null);

    /**
     * Register the module.
     */
    public function register();

    /**
     * Determine whether the given status same with the current module status.
     *
     * @param $status
     *
     * @return bool
     */
    public function isStatus($status);

    /**
     * Determine whether the current module activated.
     *
     * @return bool
     */
    public function enabled();

    /**
     * Alternate for "enabled" method.
     *
     * @return bool
     */
    public function active();

    /**
     * Determine whether the current module not activated.
     *
     * @return bool
     */
    public function notActive();

    /**
     * Alias for "notActive" method.
     *
     * @return bool
     */
    public function disabled();

    /**
     * Set active state for current module.
     *
     * @param $active
     *
     * @return bool
     */
    public function setActive($active);

    /**
     * Disable the current module.
     *
     * @return bool
     */
    public function disable();

    /**
     * Enable the current module.
     */
    public function enable();

    /**
     * Delete the current module.
     *
     * @return bool
     */
    public function delete();

    /**
     * Get extra path.
     *
     * @param $path
     *
     * @return string
     */
    public function getExtraPath($path);
}
