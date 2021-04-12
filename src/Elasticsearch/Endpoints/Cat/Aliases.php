<?php

declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class Aliases
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Endpoints\Cat
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */
class Aliases extends AbstractEndpoint
{
    /**
     * A comma-separated list of alias names to return
     *
     * @var string
     */
    private $name;

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (isset($name) !== true) {
            return $this;
        }

        $this->name = $name;

        return $this;
    }

   /**
    * @return string
    */
    public function getURI(): string
    {
        $name = $this->name;
        $uri   = "/_cat/aliases";

        if (isset($name) === true) {
            $uri = "/_cat/aliases/$name";
        }

        return $uri;
    }

   /**
    * @return string[]
    */
    public function getParamWhitelist(): array
    {
        return array(
            'local',
            'master_timeout',
            'h',
            'help',
            'v',
            'format',
            's',
            'format',
        );
    }

   /**
    * @return string
    */
    public function getMethod(): string
    {
        return 'GET';
    }
}
