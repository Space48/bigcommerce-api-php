<?php

namespace Space48\Bigcommerce\Requests\VariantsBatch;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateVariantsBatch
 *
 * Updates a batch of `variant` objects. Currently the limit is 50 variants however this is subject to
 * change.
 *
 * **Required Fields**
 *
 * To update an existing variant:
 * * id (variant id)
 *
 * To create a new
 * variant:
 * * product_id
 * * sku
 * * option_values
 *   - id (option_value ID - Example: 146)
 *   - option_id
 * (Option ID - Example: 151)
 */
class UpdateVariantsBatch extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/variants";
	}


	public function __construct()
	{
	}
}
