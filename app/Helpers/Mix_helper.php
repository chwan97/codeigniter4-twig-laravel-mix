<?php
if (!function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     *
     * @return string
     *
     * @throws Exception
     */
    function mix(string $path, string $manifestDirectory = ''): string
    {
        static $manifests = [];

        $publicPath = ROOTPATH . 'public';

        if ($path[0] !== '/') {
            $path = "/{$path}";
        }

        if ($manifestDirectory && $manifestDirectory[0] !== '/') {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        if (is_file($publicPath . $manifestDirectory . '/hot')) {
            $url = rtrim(file_get_contents($publicPath . $manifestDirectory . '/hot'));

            $customUrl = config('Mix')->hotProxyUrl;

            if (!empty($customUrl)) {
                return $customUrl . $path;
            }

            if (strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0) {
                return explode(':', $url, 2)[1] . $path;
            }

            return "//localhost:8080{$path}";
        }

        $manifestPath = $publicPath . $manifestDirectory . '/mix-manifest.json';

        if (!isset($manifests[$manifestPath])) {
            if (!is_file($manifestPath)) {
                throw new Exception('The Mix manifest does not exist.');
            }

            $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
        }

        $manifest = $manifests[$manifestPath];

        if (!isset($manifest[$path])) {
            $exception = new Exception("Unable to locate Mix file: {$path}.");

            if (!CI_DEBUG) {
                return $path;
            } else {
                throw $exception;
            }
        }

        return config('Mix')->url . $manifestDirectory . $manifest[$path];
    }
}
