<?php

namespace Space48\Bigcommerce\Requests\Videos;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductVideo
 *
 * Creates a *Product Video*.
 *
 * **Required Fields**
 * * video_id
 *
 * **Read-Only Fields**
 * * id
 *
 * Publicly
 * accessible URLs are valid parameters.
 * Videos must be loaded through YouTube at this time.
 */
class CreateProductVideo extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/videos";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
