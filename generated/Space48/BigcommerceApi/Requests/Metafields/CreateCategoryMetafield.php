<?php

namespace Space48\BigcommerceApi\Requests\Metafields;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCategoryMetafield
 *
 * Creates a *Category Metafield*.
 *
 * **Required Fields:**
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
class CreateCategoryMetafield extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}/metafields";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 */
	public function __construct(
		protected int $categoryId,
	) {
	}
}
