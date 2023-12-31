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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowCxV3FlowValidationResult extends \Google\Collection
{
  protected $collection_key = 'validationMessages';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $updateTime;
  /**
   * @var GoogleCloudDialogflowCxV3ValidationMessage[]
   */
  public $validationMessages;
  protected $validationMessagesType = GoogleCloudDialogflowCxV3ValidationMessage::class;
  protected $validationMessagesDataType = 'array';

  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * @param GoogleCloudDialogflowCxV3ValidationMessage[]
   */
  public function setValidationMessages($validationMessages)
  {
    $this->validationMessages = $validationMessages;
  }
  /**
   * @return GoogleCloudDialogflowCxV3ValidationMessage[]
   */
  public function getValidationMessages()
  {
    return $this->validationMessages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowCxV3FlowValidationResult::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowCxV3FlowValidationResult');
