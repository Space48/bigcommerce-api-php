<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ChannelListings\CreateChannelListings;
use Space48\BigcommerceApi\Requests\ChannelListings\GetChannelListing;
use Space48\BigcommerceApi\Requests\ChannelListings\ListChannelListings;
use Space48\BigcommerceApi\Requests\ChannelListings\UpdateChannelListings;
use Space48\BigcommerceApi\Resource;

class ChannelListings extends Resource
{
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
	public function listChannelListings(
		int $channelId,
		int $after,
		array $productIdIn,
		string $dateCreated,
		string $dateCreatedMin,
		string $dateCreatedMax,
		string $dateModified,
		string $dateModifiedMin,
		string $dateModifiedMax,
	): Response
	{
		return $this->connector->send(new ListChannelListings($channelId, $after, $productIdIn, $dateCreated, $dateCreatedMin, $dateCreatedMax, $dateModified, $dateModifiedMin, $dateModifiedMax));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function updateChannelListings(int $channelId): Response
	{
		return $this->connector->send(new UpdateChannelListings($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function createChannelListings(int $channelId): Response
	{
		return $this->connector->send(new CreateChannelListings($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 * @param int $listingId The ID of a channel listing.
	 */
	public function getChannelListing(int $channelId, int $listingId): Response
	{
		return $this->connector->send(new GetChannelListing($channelId, $listingId));
	}
}
