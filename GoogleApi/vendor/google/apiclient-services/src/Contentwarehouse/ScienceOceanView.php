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

class ScienceOceanView extends \Google\Collection
{
  protected $collection_key = 'countryview';
  /**
   * @var ScienceOceanViewCountryView[]
   */
  public $countryview;
  protected $countryviewType = ScienceOceanViewCountryView::class;
  protected $countryviewDataType = 'array';

  /**
   * @param ScienceOceanViewCountryView[]
   */
  public function setCountryview($countryview)
  {
    $this->countryview = $countryview;
  }
  /**
   * @return ScienceOceanViewCountryView[]
   */
  public function getCountryview()
  {
    return $this->countryview;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScienceOceanView::class, 'Google_Service_Contentwarehouse_ScienceOceanView');
