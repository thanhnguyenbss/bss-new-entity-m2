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

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    private $bannerSetupFactory;
    
    public function __construct(
        \Bss\NewEntityType\Setup\BannerSetupFactory $bannerSetupFactory
    ) {
        $this->bannerSetupFactory = $bannerSetupFactory;
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $bannerEntity = \Bss\NewEntityType\Model\Banner::ENTITY;
        $bannerSetup = $this->bannerSetupFactory->create(['setup' => $setup]);
        $bannerSetup->installEntities();
        $bannerSetup->addAttribute(
            $bannerEntity, 'display_from', ['type' => 'datetime']
        );
        $bannerSetup->addAttribute(
            $bannerEntity, 'display_to', ['type' => 'datetime']
        );
        $bannerSetup->addAttribute(
            $bannerEntity, 'priority', ['type' => 'int']
        );

        $setup->endSetup();

    }
}
