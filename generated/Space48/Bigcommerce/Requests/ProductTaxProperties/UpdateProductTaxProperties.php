<?php

namespace Space48\Bigcommerce\Requests\ProductTaxProperties;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * update-product-tax-properties
 *
 * Update the tax properties associated with one or more products. This operation will be additive to
 * any tax property values already associated with the product, overwriting any existing tax property
 * values.
 */
class UpdateProductTaxProperties extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/tax/products/properties";
	}


	public function __construct()
	{
	}
}
