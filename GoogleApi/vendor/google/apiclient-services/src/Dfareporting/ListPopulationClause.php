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

namespace Google\Service\Dfareporting;

class ListPopulationClause extends \Google\Collection
{
  protected $collection_key = 'terms';
  /**
   * @var ListPopulationTerm[]
   */
  public $terms;
  protected $termsType = ListPopulationTerm::class;
  protected $termsDataType = 'array';

  /**
   * @param ListPopulationTerm[]
   */
  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  /**
   * @return ListPopulationTerm[]
   */
  public function getTerms()
  {
    return $this->terms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListPopulationClause::class, 'Google_Service_Dfareporting_ListPopulationClause');
