<?php

namespace Space48\Bigcommerce\Requests\Images;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductImage
 *
 * Deletes a *Product Image*.
 */
class DeleteProductImage extends Request
{
	protected Method $method = Method::DELETE;


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
