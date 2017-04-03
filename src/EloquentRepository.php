<?php

namespace Nwidart\Modules;

class EloquentRepository extends Repository
{
    /**
     * Get & scan all modules.
     *
     * @return array
     */
    public function scan()
    {
        $paths = $this->getScanPaths();

        $modules = [];

        foreach ($paths as $key => $path) {
            $manifests = $this->app['files']->glob("{$path}/module.json");

            is_array($manifests) || $manifests = [];

            foreach ($manifests as $manifest) {
                $json = Json::make($manifest);

                $name = $json->get('name');
                $description = $json->get('description');
                $active = $json->get('active');
                $order = $json->get('order');

                $module = EloquentModule::where('name', $name)->first();

                if ($module === null) {
                    /*
                     * Create a new EloquentModule if it doesn't exist
                     */
                    $module = EloquentModule::create([
                        'name' => $name,
                        'alias' => strtolower($name),
                        'description' => $description,
                    ]);
                } else {
                    /*
                     * If the module exist lets just make sure that
                     * its values are in sync with the module.json manifest
                     */
                    $module->update([
                        'name' => $name,
                        'alias' => strtolower($name),
                        'description' => $description,
                        'active' => $active,
                        'order' => $order,
                    ]);
                }

                $modules[$name] = $module;
            }
        }

        return $modules;
    }

    /**
     * Format the cached data as array of modules.
     *
     * @param array $cached
     *
     * @return array
     */
    protected function formatCached($cached)
    {
        $modules = [];

        foreach ($cached as $name => $module) {
            $modules[$name] = $module;
        }

        return $modules;
    }
}
