<?php

namespace Space48\Bigcommerce\Requests\ChannelListings;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getChannelListings
 *
 * Returns a list of all *Channel Listings* for a specific channel. Note that if the *Channel* is not
 * found or there is no listing associated to the *Channel*, it will return a 200 response with empty
 * data.
 */
class GetChannelListings extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/listings";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param null|int $after Specifies the prior listing ID in a limited (paginated) list of listings.
	 * @param null|array $productIdIn Filter items by a comma-separated list of product IDs.
	 * @param null|string $dateCreated Filter items by date_created. For example, `date_created=2019-09-04T00:00:00`, `date_created=2019-09-04`, or `date_created=1567573200`
	 * @param null|string $dateCreatedMin Filter items by minimum date_created. For example, `date_created:min=2019-09-04T00:00:00`, `date_created:min=2019-09-04`, or `date_created:min=1567573200`
	 * @param null|string $dateCreatedMax Filter items by maximum date_created. For example, `date_created:max=2019-09-04T00:00:00`, `date_created:max=2019-09-04`, or `date_created:max=1567573200`
	 * @param null|string $dateModified Filter items by date_modified. For example, `date_modified=2019-09-04T00:00:00`, `date_modified=2019-09-04`, or `date_modified=1567573200`
	 * @param null|string $dateModifiedMin Filter items by minimum date_modified. For example, `date_modified:min=2019-09-04T00:00:00`, `date_modified:min=2019-09-04`, or `date_modified:min=1567573200`
	 * @param null|string $dateModifiedMax Filter items by maximum date_modified. For example, `date_modified:max=2019-09-04T00:00:00`, `date_modified:max=2019-09-04`, or `date_modified:max=1567573200`
	 */
	public function __construct(
		protected int $channelId,
		protected ?int $after = null,
		protected ?array $productIdIn = null,
		protected ?string $dateCreated = null,
		protected ?string $dateCreatedMin = null,
		protected ?string $dateCreatedMax = null,
		protected ?string $dateModified = null,
		protected ?string $dateModifiedMin = null,
		protected ?string $dateModifiedMax = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'after' => $this->after,
			'product_id:in' => $this->productIdIn,
			'date_created' => $this->dateCreated,
			'date_created:min' => $this->dateCreatedMin,
			'date_created:max' => $this->dateCreatedMax,
			'date_modified' => $this->dateModified,
			'date_modified:min' => $this->dateModifiedMin,
			'date_modified:max' => $this->dateModifiedMax,
		]);
	}
}
