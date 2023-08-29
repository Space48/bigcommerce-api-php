<?php

namespace Space48\Bigcommerce\Requests\ChannelListings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listChannelListings
 *
 * Returns a list of all *Channel Listings* for a specific channel. Note that if the *Channel* is not
 * found or there is no listing associated to the *Channel*, it will return a 200 response with empty
 * data.
 */
class ListChannelListings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/listings";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param int $after Specifies the prior listing ID in a limited (paginated) list of listings.
	 * @param array $productIdIn Filter items by a comma-separated list of product IDs.
	 * @param string $dateCreated Filter items by date_created. For example, `date_created=2019-09-04T00:00:00`, `date_created=2019-09-04`, or `date_created=1567573200`
	 * @param string $dateCreatedMin Filter items by minimum date_created. For example, `date_created:min=2019-09-04T00:00:00`, `date_created:min=2019-09-04`, or `date_created:min=1567573200`
	 * @param string $dateCreatedMax Filter items by maximum date_created. For example, `date_created:max=2019-09-04T00:00:00`, `date_created:max=2019-09-04`, or `date_created:max=1567573200`
	 * @param string $dateModified Filter items by date_modified. For example, `date_modified=2019-09-04T00:00:00`, `date_modified=2019-09-04`, or `date_modified=1567573200`
	 * @param string $dateModifiedMin Filter items by minimum date_modified. For example, `date_modified:min=2019-09-04T00:00:00`, `date_modified:min=2019-09-04`, or `date_modified:min=1567573200`
	 * @param string $dateModifiedMax Filter items by maximum date_modified. For example, `date_modified:max=2019-09-04T00:00:00`, `date_modified:max=2019-09-04`, or `date_modified:max=1567573200`
	 */
	public function __construct(
		protected int $channelId,
		protected int $after,
		protected array $productIdIn,
		protected string $dateCreated,
		protected string $dateCreatedMin,
		protected string $dateCreatedMax,
		protected string $dateModified,
		protected string $dateModifiedMin,
		protected string $dateModifiedMax,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'after' => $this->after,
			'product_id:in' => $this->productIdIn,
			'date_created' => $this->dateCreated,
			'date_created:min' => $this->dateCreatedMin,
			'date_created:max' => $this->dateCreatedMax,
			'date_modified' => $this->dateModified,
			'date_modified:min' => $this->dateModifiedMin,
			'date_modified:max' => $this->dateModifiedMax,
		];
	}
}
