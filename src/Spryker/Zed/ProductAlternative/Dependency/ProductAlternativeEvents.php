<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductAlternative\Dependency;

interface ProductAlternativeEvents
{
    /**
     * Specification
     * - This events will be used for spy_product_alternative entity creation
     *
     * @api
     *
     * @var string
     */
    public const ENTITY_SPY_PRODUCT_ALTERNATIVE_CREATE = 'Entity.spy_product_alternative.create';

    /**
     * Specification
     * - This events will be used for spy_product_alternative entity changes
     *
     * @api
     *
     * @var string
     */
    public const ENTITY_SPY_PRODUCT_ALTERNATIVE_UPDATE = 'Entity.spy_product_alternative.update';

    /**
     * Specification
     * - This events will be used for spy_product_alternative entity deletion
     *
     * @api
     *
     * @var string
     */
    public const ENTITY_SPY_PRODUCT_ALTERNATIVE_DELETE = 'Entity.spy_product_alternative.delete';

    /**
     * Specification:
     * - This event is used for product_alternative publishing.
     *
     * @deprecated Use {@link \Spryker\Shared\ProductAlternativeStorage\ProductAlternativeStorageConfig::PRODUCT_ALTERNATIVE_PUBLISH}.
     *
     * @api
     *
     * @var string
     */
    public const PRODUCT_ALTERNATIVE_PUBLISH = 'ProductAlternative.product_alternative.publish';

    /**
     * Specification:
     * - This event is used for product_alternative unpublishing.
     *
     * @api
     *
     * @var string
     */
    public const PRODUCT_ALTERNATIVE_UNPUBLISH = 'ProductAlternative.product_alternative.unpublish';

    /**
     * Specification:
     * - This event is used for product_replacement_for publishing of abstract alternative products.
     *
     * @api
     *
     * @var string
     */
    public const PRODUCT_REPLACEMENT_ABSTRACT_PUBLISH = 'ProductAlternative.product_abstract_replacement_for.publish';

    /**
     * Specification:
     * - This event is used for product_replacement_for publishing of concrete alternative products.
     *
     * @api
     *
     * @var string
     */
    public const PRODUCT_REPLACEMENT_CONCRETE_PUBLISH = 'ProductAlternative.product_concrete_replacement_for.publish';
}
