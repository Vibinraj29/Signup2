<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudRedis;

class GoogleCloudRedisV1LocationMetadata extends \Google\Model
{
  /**
   * @var GoogleCloudRedisV1ZoneMetadata[]
   */
  public $availableZones;
  protected $availableZonesType = GoogleCloudRedisV1ZoneMetadata::class;
  protected $availableZonesDataType = 'map';

  /**
   * @param GoogleCloudRedisV1ZoneMetadata[]
   */
  public function setAvailableZones($availableZones)
  {
    $this->availableZones = $availableZones;
  }
  /**
   * @return GoogleCloudRedisV1ZoneMetadata[]
   */
  public function getAvailableZones()
  {
    return $this->availableZones;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRedisV1LocationMetadata::class, 'Google_Service_CloudRedis_GoogleCloudRedisV1LocationMetadata');
