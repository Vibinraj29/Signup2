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

class ImageExactBoost extends \Google\Collection
{
  protected $collection_key = 'navquery';
  /**
   * @var ImageExactBoostNavQuery[]
   */
  public $navquery;
  protected $navqueryType = ImageExactBoostNavQuery::class;
  protected $navqueryDataType = 'array';

  /**
   * @param ImageExactBoostNavQuery[]
   */
  public function setNavquery($navquery)
  {
    $this->navquery = $navquery;
  }
  /**
   * @return ImageExactBoostNavQuery[]
   */
  public function getNavquery()
  {
    return $this->navquery;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageExactBoost::class, 'Google_Service_Contentwarehouse_ImageExactBoost');
