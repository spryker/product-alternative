<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\ProductAlternativeCollectionTransfer;
use Generated\Shared\Transfer\ProductAlternativeListItemTransfer;
use Generated\Shared\Transfer\ProductAlternativeTransfer;
use Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative;
use Propel\Runtime\Collection\Collection;

interface ProductAlternativeMapperInterface
{
    public function mapProductAlternativeTransfer(SpyProductAlternative $productAlternativeEntity): ProductAlternativeTransfer;

    public function mapProductAlternativeCollectionTransfer(?Collection $productAlternativeEntities): ProductAlternativeCollectionTransfer;

    public function mapProductConcreteDataToProductAlternativeListItemTransfer(array $productConcreteData): ProductAlternativeListItemTransfer;

    public function mapProductAbstractDataToProductAlternativeListItemTransfer(array $productAbstractData): ProductAlternativeListItemTransfer;

    /**
     * @param \Propel\Runtime\Collection\Collection<\Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative> $productAlternativeEntities
     * @param \Generated\Shared\Transfer\ProductAlternativeCollectionTransfer $productAlternativeCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeCollectionTransfer
     */
    public function mapProductAlternativeEntitiesToProductAlternativeCollectionTransfer(
        Collection $productAlternativeEntities,
        ProductAlternativeCollectionTransfer $productAlternativeCollectionTransfer
    ): ProductAlternativeCollectionTransfer;
}
