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

class ExtraSnippetInfoResponseTidbit extends \Google\Model
{
  /**
   * @var ExtraSnippetInfoResponseTidbitAnchorInfo
   */
  public $anchorinfo;
  protected $anchorinfoType = ExtraSnippetInfoResponseTidbitAnchorInfo::class;
  protected $anchorinfoDataType = '';
  /**
   * @var int
   */
  public $begin;
  /**
   * @var int
   */
  public $end;
  /**
   * @var string
   */
  public $items;
  /**
   * @var float
   */
  public $score;
  /**
   * @var string
   */
  public $text;
  /**
   * @var string
   */
  public $type;

  /**
   * @param ExtraSnippetInfoResponseTidbitAnchorInfo
   */
  public function setAnchorinfo(ExtraSnippetInfoResponseTidbitAnchorInfo $anchorinfo)
  {
    $this->anchorinfo = $anchorinfo;
  }
  /**
   * @return ExtraSnippetInfoResponseTidbitAnchorInfo
   */
  public function getAnchorinfo()
  {
    return $this->anchorinfo;
  }
  /**
   * @param int
   */
  public function setBegin($begin)
  {
    $this->begin = $begin;
  }
  /**
   * @return int
   */
  public function getBegin()
  {
    return $this->begin;
  }
  /**
   * @param int
   */
  public function setEnd($end)
  {
    $this->end = $end;
  }
  /**
   * @return int
   */
  public function getEnd()
  {
    return $this->end;
  }
  /**
   * @param string
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return string
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * @param float
   */
  public function setScore($score)
  {
    $this->score = $score;
  }
  /**
   * @return float
   */
  public function getScore()
  {
    return $this->score;
  }
  /**
   * @param string
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExtraSnippetInfoResponseTidbit::class, 'Google_Service_Contentwarehouse_ExtraSnippetInfoResponseTidbit');
