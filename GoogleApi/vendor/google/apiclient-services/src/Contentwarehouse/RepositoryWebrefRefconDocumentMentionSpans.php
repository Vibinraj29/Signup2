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

class RepositoryWebrefRefconDocumentMentionSpans extends \Google\Collection
{
  protected $collection_key = 'mentionSpan';
  /**
   * @var RepositoryWebrefRefconMentionSpans[]
   */
  public $mentionSpan;
  protected $mentionSpanType = RepositoryWebrefRefconMentionSpans::class;
  protected $mentionSpanDataType = 'array';

  /**
   * @param RepositoryWebrefRefconMentionSpans[]
   */
  public function setMentionSpan($mentionSpan)
  {
    $this->mentionSpan = $mentionSpan;
  }
  /**
   * @return RepositoryWebrefRefconMentionSpans[]
   */
  public function getMentionSpan()
  {
    return $this->mentionSpan;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RepositoryWebrefRefconDocumentMentionSpans::class, 'Google_Service_Contentwarehouse_RepositoryWebrefRefconDocumentMentionSpans');
