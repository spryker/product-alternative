<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Persistence;

use Orm\Zed\Product\Persistence\SpyProductAbstractQuery;
use Orm\Zed\Product\Persistence\SpyProductQuery;
use Orm\Zed\ProductAlternative\Persistence\SpyProductAlternativeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;
use Spryker\Zed\ProductAlternative\Persistence\Propel\Mapper\ProductAlternativeMapper;
use Spryker\Zed\ProductAlternative\Persistence\Propel\Mapper\ProductAlternativeMapperInterface;
use Spryker\Zed\ProductAlternative\ProductAlternativeDependencyProvider;

/**
 * @method \Spryker\Zed\ProductAlternative\Persistence\ProductAlternativeRepositoryInterface getRepository()
 * @method \Spryker\Zed\ProductAlternative\ProductAlternativeConfig getConfig()
 * @method \Spryker\Zed\ProductAlternative\Persistence\ProductAlternativeEntityManagerInterface getEntityManager()
 */
class ProductAlternativePersistenceFactory extends AbstractPersistenceFactory
{
    public function createProductAlternativePropelQuery(): SpyProductAlternativeQuery
    {
        return SpyProductAlternativeQuery::create();
    }

    public function createProductAlternativeMapper(): ProductAlternativeMapperInterface
    {
        return new ProductAlternativeMapper();
    }

    public function createProductPropelQuery(): SpyProductQuery
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::PROPEL_QUERY_PRODUCT);
    }

    public function createProductAbstractPropelQuery(): SpyProductAbstractQuery
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::PROPEL_QUERY_PRODUCT_ABSTRACT);
    }
}
