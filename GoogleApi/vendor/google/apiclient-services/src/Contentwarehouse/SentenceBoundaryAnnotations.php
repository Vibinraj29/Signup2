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

namespace Google\Service\Contentwarehouse;

class SentenceBoundaryAnnotations extends \Google\Collection
{
  protected $collection_key = 'instance';
  /**
   * @var Proto2BridgeMessageSet
   */
  public $info;
  protected $infoType = Proto2BridgeMessageSet::class;
  protected $infoDataType = '';
  /**
   * @var SentenceBoundaryAnnotationsInstance[]
   */
  public $instance;
  protected $instanceType = SentenceBoundaryAnnotationsInstance::class;
  protected $instanceDataType = 'array';

  /**
   * @param Proto2BridgeMessageSet
   */
  public function setInfo(Proto2BridgeMessageSet $info)
  {
    $this->info = $info;
  }
  /**
   * @return Proto2BridgeMessageSet
   */
  public function getInfo()
  {
    return $this->info;
  }
  /**
   * @param SentenceBoundaryAnnotationsInstance[]
   */
  public function setInstance($instance)
  {
    $this->instance = $instance;
  }
  /**
   * @return SentenceBoundaryAnnotationsInstance[]
   */
  public function getInstance()
  {
    return $this->instance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SentenceBoundaryAnnotations::class, 'Google_Service_Contentwarehouse_SentenceBoundaryAnnotations');
