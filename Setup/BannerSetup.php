<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_NewEntityType
 * @author     Extension Team
 * @copyright  Copyright (c) 2018-2019 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\NewEntityType\Setup;

use Magento\Eav\Setup\EavSetup;

class BannerSetup extends  EavSetup
{
    public function getDefaultEntities() {
        $bannerEntity = \Bss\NewEntityType\Model\Banner::ENTITY;
        $entities = [
            $bannerEntity => [
                'entity_model' => \Bss\NewEntityType\Model\ResourceModel\Banner::class,
                'table' => $bannerEntity . '_entity',
                'attributes' => [
                    'name' => [
                        'type' => 'static',
                    ],
                    'status' => [
                        'type' => 'static',
                    ],
                ],
            ],
        ];
        return $entities;
    }

}
