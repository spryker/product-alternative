<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Business;

use Generated\Shared\Transfer\ProductAlternativeCollectionTransfer;
use Generated\Shared\Transfer\ProductAlternativeTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\ProductAlternative\Business\ProductAlternativeBusinessFactory getFactory()
 */
class ProductAlternativeFacade extends AbstractFacade implements ProductAlternativeFacadeInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $idProduct
     * @param int $idProductAbstractAlternative
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeTransfer
     */
    public function createProductAbstractAlternative(int $idProduct, int $idProductAbstractAlternative): ProductAlternativeTransfer
    {
        return $this
            ->getFactory()
            ->createProductAlternativeWriter()
            ->createProductAbstractAlternative($idProduct, $idProductAbstractAlternative);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param int $idProduct
     * @param int $idProductConcreteAlternative
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeTransfer
     */
    public function createProductConcreteAlternative(int $idProduct, int $idProductConcreteAlternative): ProductAlternativeTransfer
    {
        return $this
            ->getFactory()
            ->createProductAlternativeWriter()
            ->createProductConcreteAlternative($idProduct, $idProductConcreteAlternative);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeCollectionTransfer
     */
    public function getProductAlternativesByIdProductConcrete(ProductConcreteTransfer $productConcreteTransfer): ProductAlternativeCollectionTransfer
    {
        return $this
            ->getFactory()
            ->createProductAlternativeReader()
            ->getProductAlternativesByIdProductConcrete($productConcreteTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAlternativeTransfer $productAlternativeTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAlternativeTransfer
     */
    public function getProductAlternativeByIdProductAlternative(ProductAlternativeTransfer $productAlternativeTransfer): ProductAlternativeTransfer
    {
        return $this
            ->getFactory()
            ->createProductAlternativeReader()
            ->getProductAlternativeByIdProductAlternative($productAlternativeTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function persistProductAlternatives(ProductConcreteTransfer $productConcreteTransfer): ProductConcreteTransfer
    {
        return $this
            ->getFactory()
            ->createProductAlternativeWriter()
            ->persistProductAlternatives($productConcreteTransfer);
    }
}
