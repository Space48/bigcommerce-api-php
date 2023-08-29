<?php

namespace Space48\Bigcommerce\Requests\Images;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductImage
 *
 * Creates a *Product Image*.
 *
 *  **Required Fields**
 * - `image_file`, or
 * - `image_url`
 *
 * **Usage Notes**
 * -
 * `image_url` - `255` character limit
 * - For file uploads, use the `multipart/form-data` media type
 * -
 * Only one image at a time can be created
 * - Supported image file types are BMP, GIF, JPEG, PNG, WBMP,
 * XBM, and WEBP.
 */
class CreateProductImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/images";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function __construct(
		protected int $productId,
	) {
	}
}
