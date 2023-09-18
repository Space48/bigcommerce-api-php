<?php

namespace Space48\Bigcommerce\Requests\ChannelAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductsChannelAssignments
 *
 * Delete products channel assignments. A filter must be supplied.
 */
class DeleteProductsChannelAssignments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/channel-assignments";
	}


	/**
	 * @param null|string $productIdIn
	 * @param null|string $channelIdIn
	 */
	public function __construct(
		protected ?string $productIdIn = null,
		protected ?string $channelIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['product_id:in' => $this->productIdIn, 'channel_id:in' => $this->channelIdIn]);
	}
}
