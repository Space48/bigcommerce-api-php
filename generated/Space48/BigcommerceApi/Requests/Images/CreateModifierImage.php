<?php

namespace Space48\BigcommerceApi\Requests\Images;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createModifierImage
 *
 * Creates a *Modifier Image*.
 *
 * The image will show on the storefront when the value is selected.
 *
 *
 * **Required Fields**
 * - image_file: Form posts are the only accepted upload option.
 */
class CreateModifierImage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/{$this->productId}/modifiers/{$this->modifierId}/values/{$this->valueId}/image";
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $modifierId The ID of the `Modifier`.
	 * @param int $valueId The ID of the `Modifier/Option Value`.
	 */
	public function __construct(
		protected int $productId,
		protected int $modifierId,
		protected int $valueId,
	) {
	}
}
