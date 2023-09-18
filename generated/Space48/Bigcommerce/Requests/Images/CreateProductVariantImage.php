<?php

namespace Space48\Bigcommerce\Requests\Images;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createProductVariantImage
 *
 * Creates a *Variant Image*.
 *
 * Only one image can be explicitly associated with a Variant. If the
 * Variant already has an associated image, overwrites the existing Variant Image.
 *
 * The image displays
 * on the storefront when the Variant is selected.
 *
 *  **Required Fields**
 * - image_file: Form posts.
 * Files larger than 1 MB are not accepted
 * - image_url: Any publicly available URL
 */
class CreateProductVariantImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/variants/{$this->variantId}/image";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $variantId ID of the variant on a product, or on an associated Price List Record.
	 */
	public function __construct(
		protected int $productId,
		protected int $variantId,
	) {
	}
}
