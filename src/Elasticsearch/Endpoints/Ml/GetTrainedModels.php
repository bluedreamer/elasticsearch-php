<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Ml;

use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class GetTrainedModels
 * Elasticsearch API name ml.get_trained_models
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.12.0-SNAPSHOT (c4379e122f178e346f6402b1a4ebf382d29fec05)
 */
class GetTrainedModels extends AbstractEndpoint
{
    protected $model_id;

    public function getURI(): string
    {
        $model_id = $this->model_id ?? null;

        if (isset($model_id)) {
            return "/_ml/trained_models/$model_id";
        }
        return "/_ml/trained_models";
    }

    public function getParamWhitelist(): array
    {
        return [
            'allow_no_match',
            'include',
            'include_model_definition',
            'decompress_definition',
            'from',
            'size',
            'tags',
            'exclude_generated'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setModelId($model_id): GetTrainedModels
    {
        if (isset($model_id) !== true) {
            return $this;
        }
        $this->model_id = $model_id;

        return $this;
    }
}
