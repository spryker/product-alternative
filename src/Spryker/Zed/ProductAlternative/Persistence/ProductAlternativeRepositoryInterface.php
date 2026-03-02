<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Persistence;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\ProductAlternativeCollectionTransfer;
use Generated\Shared\Transfer\ProductAlternativeCriteriaTransfer;
use Generated\Shared\Transfer\ProductAlternativeListItemTransfer;
use Generated\Shared\Transfer\ProductAlternativeTransfer;

interface ProductAlternativeRepositoryInterface
{
    public function getProductAlternativesForProductConcrete(int $idProductConcrete): ProductAlternativeCollectionTransfer;

    public function findProductAlternativeByIdProductAlternative(int $idProductAlternative): ?ProductAlternativeTransfer;

    /**
     * @param array<int> $productIds
     *
     * @return bool
     */
    public function doAllConcreteProductsHaveAlternatives(array $productIds): bool;

    public function getProductAlternativeListItemTransferForProductAbstract(
        int $idProductAbstract,
        LocaleTransfer $localeTransfer
    ): ProductAlternativeListItemTransfer;

    public function getProductAlternativeListItemTransferForProductConcrete(
        int $idProduct,
        LocaleTransfer $localeTransfer
    ): ProductAlternativeListItemTransfer;

    /**
     * @return array<int>
     */
    public function findProductAbstractIdsWhichConcreteHasAlternative(): array;

    public function getProductAlternativeCollection(
        ProductAlternativeCriteriaTransfer $productAlternativeCriteriaTransfer
    ): ProductAlternativeCollectionTransfer;
}
