<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Mix extends BaseConfig
{
    /**
     * Url for CDN.
     * Leave empty if using local files.
     *
     * @var string
     */
    public $url = '';

    /**
     * Hot reload Url.
     * Leave empty for default localhost:8080.
     *
     * @var string
     */
    public $hotProxyUrl = '';
}