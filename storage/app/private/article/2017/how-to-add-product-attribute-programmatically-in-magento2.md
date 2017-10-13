#### Step 1: Create a file Setup/InstallData to create product attribute
```php
<?php

namespace [VendorName]\[ModuleName]\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    private $eavSetupFactory;

    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'attribute_code',
            [
                'input' => 'boolean', // Input type
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Attribute label',
                'class' => '',
                'source' => '',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true, //Visible on the backend
                'visible_on_front' => false, //Visible on the front-end
                'required' => false,
                'user_defined' => false,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'used_in_product_listing' => true, //Depends on the theme. To include the attribute in product summaries that appear in catalog listings
                'unique' => false,
                'apply_to' => '' // The product types will be applied
            ]
        );
    }
}
```

#### Step 2: Get attribute value

```php
<?php

namespace [VendorName]\[ModuleName]\Helper;

use Magento\Store\Model\ScopeInterface;

class Image extends \Magento\Catalog\Helper\Image
{

    /**
     * Current Product
     *
     * @var \Magento\Catalog\Model\Product
     */
    protected $_product;

    public function getYourAttributeValue()
    {
        return $this->_product->getData(attribute_code);
    }
    ...
```
