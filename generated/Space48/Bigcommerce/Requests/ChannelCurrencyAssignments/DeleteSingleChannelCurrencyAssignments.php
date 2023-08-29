<?php

namespace Space48\Bigcommerce\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSingleChannelCurrencyAssignments
 *
 * Deletes currency assignments for a specific channel. Once done, this channel will inherit the
 * store’s currency settings.
 */
class DeleteSingleChannelCurrencyAssignments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}/currency-assignments";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
