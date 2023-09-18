<?php

namespace Space48\Bigcommerce\Requests\Metafields;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteProductMetafield
 *
 * Deletes a *Product Metafield*.
 */
class DeleteProductMetafield extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/metafields/{$this->metafieldId}";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $metafieldId The ID of the `Metafield`.
	 */
	public function __construct(
		protected int $productId,
		protected int $metafieldId,
	) {
	}
}
