<?php

namespace Space48\BigcommerceApi\Requests\ChannelCurrencyAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSingleChannelCurrencyAssignments
 *
 * Returns a list of currency assignments for a specific channel.
 */
class GetSingleChannelCurrencyAssignments extends Request
{
	protected Method $method = Method::GET;


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
