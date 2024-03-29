<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativePluginExecutor;
use Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativePluginExecutorInterface;
use Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativeReader;
use Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativeReaderInterface;
use Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativeWriter;
use Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativeWriterInterface;
use Spryker\Zed\ProductAlternative\Dependency\Facade\ProductAlternativeToLocaleFacadeInterface;
use Spryker\Zed\ProductAlternative\Dependency\Facade\ProductAlternativeToProductFacadeInterface;
use Spryker\Zed\ProductAlternative\ProductAlternativeDependencyProvider;

/**
 * @method \Spryker\Zed\ProductAlternative\Persistence\ProductAlternativeEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\ProductAlternative\Persistence\ProductAlternativeRepositoryInterface getRepository()
 * @method \Spryker\Zed\ProductAlternative\ProductAlternativeConfig getConfig()
 */
class ProductAlternativeBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativeWriterInterface
     */
    public function createProductAlternativeWriter(): ProductAlternativeWriterInterface
    {
        return new ProductAlternativeWriter(
            $this->getEntityManager(),
            $this->getRepository(),
            $this->getProductFacade(),
            $this->createProductAlternativePluginExecutor(),
        );
    }

    /**
     * @return \Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativeReaderInterface
     */
    public function createProductAlternativeReader(): ProductAlternativeReaderInterface
    {
        return new ProductAlternativeReader(
            $this->getRepository(),
            $this->getLocaleFacade(),
            $this->getProductFacade(),
            $this->getAlternativeProductApplicablePlugins(),
        );
    }

    /**
     * @return \Spryker\Zed\ProductAlternative\Business\ProductAlternative\ProductAlternativePluginExecutorInterface
     */
    public function createProductAlternativePluginExecutor(): ProductAlternativePluginExecutorInterface
    {
        return new ProductAlternativePluginExecutor(
            $this->getPostProductAlternativeCreatePlugins(),
            $this->getPostProductAlternativeDeletePlugins(),
        );
    }

    /**
     * @return \Spryker\Zed\ProductAlternative\Dependency\Facade\ProductAlternativeToLocaleFacadeInterface
     */
    public function getLocaleFacade(): ProductAlternativeToLocaleFacadeInterface
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::FACADE_LOCALE);
    }

    /**
     * @return \Spryker\Zed\ProductAlternative\Dependency\Facade\ProductAlternativeToProductFacadeInterface
     */
    public function getProductFacade(): ProductAlternativeToProductFacadeInterface
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::FACADE_PRODUCT);
    }

    /**
     * @return array<\Spryker\Zed\ProductAlternativeExtension\Dependency\Plugin\PostProductAlternativeCreatePluginInterface>
     */
    protected function getPostProductAlternativeCreatePlugins(): array
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::PLUGINS_POST_PRODUCT_ALTERNATIVE_CREATE);
    }

    /**
     * @return array<\Spryker\Zed\ProductAlternativeExtension\Dependency\Plugin\PostProductAlternativeDeletePluginInterface>
     */
    protected function getPostProductAlternativeDeletePlugins(): array
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::PLUGINS_POST_PRODUCT_ALTERNATIVE_DELETE);
    }

    /**
     * @return array<\Spryker\Zed\ProductAlternativeExtension\Dependency\Plugin\AlternativeProductApplicablePluginInterface>
     */
    protected function getAlternativeProductApplicablePlugins(): array
    {
        return $this->getProvidedDependency(ProductAlternativeDependencyProvider::PLUGINS_ALTERNATIVE_PRODUCT_APPLICABLE);
    }
}
