<?php

namespace Test\CourseSystem\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class CreateCourseLocationAttribute implements DataPatchInterface, PatchRevertableInterface
{
    /**
     * @var \Magento\Catalog\Setup\CategorySetupFactory
     */
    private $catalogSetupFactory;

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * CreateProductSizeAttribute constructor.
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param \Magento\Catalog\Setup\CategorySetupFactory $catalogSetupFactory
     */
    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        \Magento\Catalog\Setup\CategorySetupFactory $catalogSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->catalogSetupFactory = $catalogSetupFactory;
    }

    /**
     * @return DataPatchInterface|void
     */
    public function apply()
    {
        $catalogSetup = $this->catalogSetupFactory->create(['setup' => $this->moduleDataSetup]);
        $catalogSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'course_location',
            [
                'type' => 'varchar',
                'label' => 'Location',
                'input' => 'select',
                'required' => false,
                'user_defined' => true,
                'group' => 'Course System',
                'visible_on_front' => true,
                'used_for_sort_by' => false,
                'is_filterable' => 2,
                'is_filterable_in_search' => true,
                'visible_in_advanced_search' => true,
                'option' => ['values' => ['Bern', 'Thun', 'Lausanne']],
                'backend' => \Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend::class,
                'source' => \Magento\Eav\Model\Entity\Attribute\Source\Table::class,
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Rollback all changes, done by this patch
     *
     * @return void
     */
    public function revert()
    {

    }
}
