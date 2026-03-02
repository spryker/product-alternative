<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Business\ProductAlternative;

use Generated\Shared\Transfer\ProductAlternativeResponseTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;

interface ProductAlternativeWriterInterface
{
    public function persistProductAlternative(ProductConcreteTransfer $productConcreteTransfer): ProductConcreteTransfer;

    public function deleteProductAlternativeByIdProductAlternative(int $idProductAlternative): ProductAlternativeResponseTransfer;
}
