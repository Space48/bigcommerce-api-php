<?php

namespace Space48\Bigcommerce\Requests\Channels;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listChannels
 *
 * Returns a list of *Channels*.
 *
 * Will always return the default BigCommerce storefront with an ID of
 * `1`. This storefront is created by default when you provision a BigCommerce store.
 */
class ListChannels extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/channels";
	}


	/**
	 * @param string $include Channels subresources that can be included in the response.
	 * @param bool $available Filter items based on whether the channel is currently available for integration. Setting this query parameter to `true` will return channels with the status of `prelaunch`, `active` , `inactive`, and `connected`. Setting this query parameter to `false` will return channels with the status of `disconnected`, `archived`, `deleted`, and `terminated`.
	 * @param array $statusIn Filter items by a comma-separated list of statuses.
	 * @param array $typeIn Filter items by a comma-separated list of types.
	 * @param array $platformIn Filter items by a comma-separated list of platforms. For a list of supported platforms, see [Platform](/docs/rest-management/channels#platform).
	 * @param string $dateCreated Filter items by date_created. For example, `date_created=2019-09-04T00:00:00`, `date_created=2019-09-04`, or `date_created=1567573200`
	 * @param string $dateCreatedMin Filter items by minimum date_created. For example, `date_created:min=2019-09-04T00:00:00`, `date_created:min=2019-09-04`, or `date_created:min=1567573200`
	 * @param string $dateCreatedMax Filter items by maximum date_created. For example, `date_created:max=2019-09-04T00:00:00`, `date_created:max=2019-09-04`, or `date_created:max=1567573200`
	 * @param string $dateModified Filter items by date_modified. For example, `date_modified=2019-09-04T00:00:00`, `date_modified=2019-09-04`, or `date_modified=1567573200`
	 * @param string $dateModifiedMin Filter items by minimum date_modified. For example, `date_modified:min=2019-09-04T00:00:00`, `date_modified:min=2019-09-04`, or `date_modified:min=1567573200`
	 * @param string $dateModifiedMax Filter items by maximum date_modified. For example, `date_modified:max=2019-09-04T00:00:00`, `date_modified:max=2019-09-04`, or `date_modified:max=1567573200`
	 */
	public function __construct(
		protected string $include,
		protected bool $available,
		protected array $statusIn,
		protected array $typeIn,
		protected array $platformIn,
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
			'include' => $this->include,
			'available' => $this->available,
			'status:in' => $this->statusIn,
			'type:in' => $this->typeIn,
			'platform:in' => $this->platformIn,
			'date_created' => $this->dateCreated,
			'date_created:min' => $this->dateCreatedMin,
			'date_created:max' => $this->dateCreatedMax,
			'date_modified' => $this->dateModified,
			'date_modified:min' => $this->dateModifiedMin,
			'date_modified:max' => $this->dateModifiedMax,
		];
	}
}
