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

namespace Google\Service\Slides;

class TextContent extends \Google\Collection
{
  protected $collection_key = 'textElements';
  /**
   * @var SlidesList[]
   */
  public $lists;
  protected $listsType = SlidesList::class;
  protected $listsDataType = 'map';
  /**
   * @var TextElement[]
   */
  public $textElements;
  protected $textElementsType = TextElement::class;
  protected $textElementsDataType = 'array';

  /**
   * @param SlidesList[]
   */
  public function setLists($lists)
  {
    $this->lists = $lists;
  }
  /**
   * @return SlidesList[]
   */
  public function getLists()
  {
    return $this->lists;
  }
  /**
   * @param TextElement[]
   */
  public function setTextElements($textElements)
  {
    $this->textElements = $textElements;
  }
  /**
   * @return TextElement[]
   */
  public function getTextElements()
  {
    return $this->textElements;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextContent::class, 'Google_Service_Slides_TextContent');
