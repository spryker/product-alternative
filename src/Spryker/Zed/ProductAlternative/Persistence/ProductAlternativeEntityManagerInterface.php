<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Persistence;

use Generated\Shared\Transfer\ProductAlternativeTransfer;

interface ProductAlternativeEntityManagerInterface
{
    public function saveProductAbstractAlternative(int $idProduct, int $idProductAbstractAlternative): ProductAlternativeTransfer;

    public function saveProductConcreteAlternative(int $idProduct, int $idProductConcreteAlternative): ProductAlternativeTransfer;

    public function deleteProductAlternative(ProductAlternativeTransfer $productAlternativeTransfer): void;
}
