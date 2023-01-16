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
use Propel\Runtime\Collection\ObjectCollection;

class ProductAlternativeMapper implements ProductAlternativeMapperInterface
{
    /**
     * @var string
     */
    public const PRODUCT_TYPE_ABSTRACT = 'Abstract';

    /**
     * @var string
     */
    public const PRODUCT_TYPE_CONCRETE = 'Concrete';

    /**
     * @param \Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative $productAlternativeEntity
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeTransfer
     */
    public function mapProductAlternativeTransfer(SpyProductAlternative $productAlternativeEntity): ProductAlternativeTransfer
    {
        return (new ProductAlternativeTransfer())
            ->setIdProductAlternative($productAlternativeEntity->getIdProductAlternative())
            ->setIdProduct($productAlternativeEntity->getFkProduct())
            ->setIdProductAbstractAlternative($productAlternativeEntity->getFkProductAbstractAlternative())
            ->setIdProductConcreteAlternative($productAlternativeEntity->getFkProductConcreteAlternative());
    }

    /**
     * @param \Propel\Runtime\Collection\Collection|null $productAlternativeEntities
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeCollectionTransfer
     */
    public function mapProductAlternativeCollectionTransfer(?Collection $productAlternativeEntities): ProductAlternativeCollectionTransfer
    {
        $productAlternativeCollectionTransfer = new ProductAlternativeCollectionTransfer();
        if (!$productAlternativeEntities) {
            return $productAlternativeCollectionTransfer;
        }

        foreach ($productAlternativeEntities as $productAlternativeEntity) {
            $productAlternativeCollectionTransfer->addProductAlternative(
                $this->mapProductAlternativeTransfer($productAlternativeEntity),
            );
        }

        return $productAlternativeCollectionTransfer;
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection<\Orm\Zed\ProductAlternative\Persistence\SpyProductAlternative> $productAlternativeEntities
     * @param \Generated\Shared\Transfer\ProductAlternativeCollectionTransfer $productAlternativeCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeCollectionTransfer
     */
    public function mapProductAlternativeEntitiesToProductAlternativeCollectionTransfer(
        ObjectCollection $productAlternativeEntities,
        ProductAlternativeCollectionTransfer $productAlternativeCollectionTransfer
    ): ProductAlternativeCollectionTransfer {
        foreach ($productAlternativeEntities as $productAlternativeEntity) {
            $productAlternativeCollectionTransfer->addProductAlternative(
                $this->mapProductAlternativeTransfer($productAlternativeEntity),
            );
        }

        return $productAlternativeCollectionTransfer;
    }

    /**
     * @param array $productAbstractData
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeListItemTransfer
     */
    public function mapProductAbstractDataToProductAlternativeListItemTransfer(array $productAbstractData): ProductAlternativeListItemTransfer
    {
        return $this->mapProductDataToProductAlternativeListItemTransfer($productAbstractData)
            ->setType(static::PRODUCT_TYPE_ABSTRACT);
    }

    /**
     * @param array $productConcreteData
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeListItemTransfer
     */
    public function mapProductConcreteDataToProductAlternativeListItemTransfer(array $productConcreteData): ProductAlternativeListItemTransfer
    {
        return $this->mapProductDataToProductAlternativeListItemTransfer($productConcreteData)
            ->setType(static::PRODUCT_TYPE_CONCRETE);
    }

    /**
     * @param array<string, mixed> $productData
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeListItemTransfer
     */
    protected function mapProductDataToProductAlternativeListItemTransfer(array $productData): ProductAlternativeListItemTransfer
    {
        return (new ProductAlternativeListItemTransfer())->fromArray($productData)
            ->setCategories(explode(',', $productData[ProductAlternativeListItemTransfer::CATEGORIES]));
    }
}
