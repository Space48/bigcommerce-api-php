<?php

namespace Space48\Bigcommerce\Requests\Images;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBrandImage
 *
 * Creates a *Brand Image*.
 *
 * **Required Fields**
 * - image_file: Form posts are the only accepted upload
 * option.
 *
 * **Read-Only Fields**
 * - id
 *
 * Only one image at a time can be created. To update a *Brand
 * Image*, use the [Update a brand](/docs/rest-catalog/brands#update-a-brand) endpoint and an
 * `image_url`.
 */
class CreateBrandImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands/{$this->brandId}/image";
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function __construct(
		protected int $brandId,
	) {
	}
}
