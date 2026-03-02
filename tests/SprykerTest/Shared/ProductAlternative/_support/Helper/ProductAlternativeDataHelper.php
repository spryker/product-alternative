<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Shared\ProductAlternative\Helper;

use Codeception\Module;
use Generated\Shared\Transfer\ProductAlternativeCreateRequestTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;
use Spryker\Zed\ProductAlternative\Business\ProductAlternativeFacadeInterface;
use SprykerTest\Shared\Testify\Helper\DataCleanupHelperTrait;
use SprykerTest\Shared\Testify\Helper\LocatorHelperTrait;

class ProductAlternativeDataHelper extends Module
{
    use DataCleanupHelperTrait;
    use LocatorHelperTrait;

    public function haveProductAlternative(
        ProductConcreteTransfer $productConcreteTransfer,
        string $skuProductAlternative
    ): ProductConcreteTransfer {
        $productAlternativeCreateRequestTransfer = (new ProductAlternativeCreateRequestTransfer())
            ->setIdProduct($productConcreteTransfer->getIdProductConcrete())
            ->setAlternativeSku($skuProductAlternative);

        $productConcreteTransfer->addProductAlternativeCreateRequest($productAlternativeCreateRequestTransfer);
        $this->getProductAlternativeFacade()->persistProductAlternative($productConcreteTransfer);

        $this->getDataCleanupHelper()->_addCleanup(function () use ($productConcreteTransfer): void {
            $this->cleanupProductAlternative($productConcreteTransfer);
        });

        return $productConcreteTransfer;
    }

    protected function getProductAlternativeFacade(): ProductAlternativeFacadeInterface
    {
        return $this->getLocator()->productAlternative()->facade();
    }

    protected function cleanupProductAlternative(ProductConcreteTransfer $productConcreteTransfer): void
    {
        foreach ($productConcreteTransfer->getProductAlternatives() as $productAlternativeTransfer) {
            $this->getProductAlternativeFacade()->deleteProductAlternativeByIdProductAlternative(
                $productAlternativeTransfer->getIdProductAlternative(),
            );
        }
    }
}
