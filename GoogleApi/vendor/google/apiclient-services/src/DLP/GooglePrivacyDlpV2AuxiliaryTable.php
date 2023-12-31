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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2AuxiliaryTable extends \Google\Collection
{
  protected $collection_key = 'quasiIds';
  /**
   * @var GooglePrivacyDlpV2QuasiIdField[]
   */
  public $quasiIds;
  protected $quasiIdsType = GooglePrivacyDlpV2QuasiIdField::class;
  protected $quasiIdsDataType = 'array';
  /**
   * @var GooglePrivacyDlpV2FieldId
   */
  public $relativeFrequency;
  protected $relativeFrequencyType = GooglePrivacyDlpV2FieldId::class;
  protected $relativeFrequencyDataType = '';
  /**
   * @var GooglePrivacyDlpV2BigQueryTable
   */
  public $table;
  protected $tableType = GooglePrivacyDlpV2BigQueryTable::class;
  protected $tableDataType = '';

  /**
   * @param GooglePrivacyDlpV2QuasiIdField[]
   */
  public function setQuasiIds($quasiIds)
  {
    $this->quasiIds = $quasiIds;
  }
  /**
   * @return GooglePrivacyDlpV2QuasiIdField[]
   */
  public function getQuasiIds()
  {
    return $this->quasiIds;
  }
  /**
   * @param GooglePrivacyDlpV2FieldId
   */
  public function setRelativeFrequency(GooglePrivacyDlpV2FieldId $relativeFrequency)
  {
    $this->relativeFrequency = $relativeFrequency;
  }
  /**
   * @return GooglePrivacyDlpV2FieldId
   */
  public function getRelativeFrequency()
  {
    return $this->relativeFrequency;
  }
  /**
   * @param GooglePrivacyDlpV2BigQueryTable
   */
  public function setTable(GooglePrivacyDlpV2BigQueryTable $table)
  {
    $this->table = $table;
  }
  /**
   * @return GooglePrivacyDlpV2BigQueryTable
   */
  public function getTable()
  {
    return $this->table;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2AuxiliaryTable::class, 'Google_Service_DLP_GooglePrivacyDlpV2AuxiliaryTable');
