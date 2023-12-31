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

namespace Google\Service\AndroidPublisher;

class Apk extends \Google\Model
{
  /**
   * @var ApkBinary
   */
  public $binary;
  protected $binaryType = ApkBinary::class;
  protected $binaryDataType = '';
  /**
   * @var int
   */
  public $versionCode;

  /**
   * @param ApkBinary
   */
  public function setBinary(ApkBinary $binary)
  {
    $this->binary = $binary;
  }
  /**
   * @return ApkBinary
   */
  public function getBinary()
  {
    return $this->binary;
  }
  /**
   * @param int
   */
  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }
  /**
   * @return int
   */
  public function getVersionCode()
  {
    return $this->versionCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Apk::class, 'Google_Service_AndroidPublisher_Apk');
