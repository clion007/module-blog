<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magefan\Blog\Block\Adminhtml\Blog\Post;

/**
 * Class DeleteButton
 */
class DeleteButton extends \Magefan\Community\Block\Adminhtml\Edit\DeleteButton
{
    /**
     * @return array|string
     */
    public function getButtonData()
    {
        if (!$this->authorization->isAllowed("Magefan_Blog::post_delete")) {
            return [];
        }
        return parent::getButtonData();
    }
}