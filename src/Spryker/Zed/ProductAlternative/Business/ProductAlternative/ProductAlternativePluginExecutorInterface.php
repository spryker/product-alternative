<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Business\ProductAlternative;

use Generated\Shared\Transfer\ProductAlternativeTransfer;

interface ProductAlternativePluginExecutorInterface
{
    public function executePostProductAlternativeCreatePlugins(ProductAlternativeTransfer $productAlternativeTransfer): void;

    public function executePostProductAlternativeDeletePlugins(ProductAlternativeTransfer $productAlternativeTransfer): void;
}
