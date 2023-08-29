<?php

namespace Space48\Bigcommerce\Requests\Images;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateProductImage
 *
 * Updates a *Product Image*.
 *
 * **Usage Notes**
 * - `image_url` - `255` character limit
 * - For file
 * uploads, send a POST request using the `multipart/form-data` media type
 */
class UpdateProductImage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/images/{$this->imageId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $imageId The ID of the `Image` that is being operated on.
	 */
	public function __construct(
		protected int $productId,
		protected int $imageId,
	) {
	}
}
