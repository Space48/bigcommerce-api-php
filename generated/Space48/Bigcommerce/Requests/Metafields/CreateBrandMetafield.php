<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBrandMetafield
 *
 * Creates a *Brand Metafield*.
 *
 * **Required Fields**
 * - permission_set
 * - namespace
 * - key
 * -
 * value
 *
 * **Read-Only Fields**
 * - id
 *
 * **Note:** The maxiumum number of metafields allowed on each order,
 * product, category, variant, or brand is 250 per client ID. For more information, see [Platform
 * Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.
 */
class CreateBrandMetafield extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}/metafields";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function __construct(
		protected int $brandId,
	) {
	}
}
