<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Channels\CreateChannel;
use Space48\Bigcommerce\Requests\Channels\GetChannel;
use Space48\Bigcommerce\Requests\Channels\ListChannels;
use Space48\Bigcommerce\Requests\Channels\UpdateChannel;
use Space48\Bigcommerce\Resource;

class Channels extends Resource
{
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
	public function listChannels(
		string $include,
		bool $available,
		array $statusIn,
		array $typeIn,
		array $platformIn,
		string $dateCreated,
		string $dateCreatedMin,
		string $dateCreatedMax,
		string $dateModified,
		string $dateModifiedMin,
		string $dateModifiedMax,
	): Response
	{
		return $this->connector->send(new ListChannels($include, $available, $statusIn, $typeIn, $platformIn, $dateCreated, $dateCreatedMin, $dateCreatedMax, $dateModified, $dateModifiedMin, $dateModifiedMax));
	}


	public function createChannel(): Response
	{
		return $this->connector->send(new CreateChannel());
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param string $include Channels subresources that can be included in the response.
	 */
	public function getChannel(int $channelId, string $include): Response
	{
		return $this->connector->send(new GetChannel($channelId, $include));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function updateChannel(int $channelId): Response
	{
		return $this->connector->send(new UpdateChannel($channelId));
	}
}
