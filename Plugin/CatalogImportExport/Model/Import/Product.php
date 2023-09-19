<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\LinkProduct\Plugin\CatalogImportExport\Model\Import;

use Magento\CatalogImportExport\Model\Import\Product as ProductImportExport;
use MagePal\LinkProduct\Model\Product\Link;

class Product
{
    /**
     *
     * @param ProductImportExport $subject
     * @param array $result
     * @return mixed
     */
    public function afterGetLinkNameToId(ProductImportExport $subject, $result)
    {
        $result['_accessory_'] = Link::LINK_TYPE_ACCESSORY;
        return $result;
    }
}
