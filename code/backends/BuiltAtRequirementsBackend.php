<?php

class BuiltAtRequirementsBackend extends Requirements_Backend
{

    private static $use_backend = true;

    private static $suffix_key = 'b';

    protected $builtAtTimestamp = 0;

    /**
     * Finds the path for specified file
     *
     * @param string $fileOrUrl
     * @return string|bool
     */
    protected function path_for_file($fileOrUrl)
    {
        $path = parent::path_for_file($fileOrUrl);
        if (!$path || strpos($path, '?m=') === false) {
            return $path;
        }
        if ($this->builtAtTimestamp === 0) {
            $builtAt = SiteConfig::current_site_config()->BuiltAt;
            if (!$builtAt) {
                return $path;
            }
            $this->builtAtTimestamp = DateTime::createFromFormat('Y-m-d H:i:s', $builtAt)->getTimestamp();
        }
        $suffixKey = Config::inst()->get(self::class, 'suffix_key');
        return preg_replace('%(\?m=[0-9]+)%', "?$suffixKey=" . $this->builtAtTimestamp, $path);
    }
}
