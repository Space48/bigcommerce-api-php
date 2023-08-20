<?php

namespace Space48\BigcommerceApi\Requests\Channels;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateChannel
 *
 * Updates a *Channel*.
 *
 * ## Updatable Fields
 *
 * The following fields can be updated.
 * * `name`
 * *
 * `external_id`
 * * `status`
 * * `is_listable_from_ui`
 * * `is_visible`
 * * `config_meta`
 *
 *
 * > #### Note
 * > *
 * Partial updates are supported. In most cases, if a field that *cannot* be updated is passed in, the
 * API **will not** respond with an error. It returns a 200 response with the object, in which you will
 * see the field(s) were not updated.
 * > * `platform` and `type` cannot be updated after a channel is
 * created.
 * > * A channel with status `deleted` or `terminated` cannot be updated.
 */
class UpdateChannel extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/channels/{$this->channelId}";
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}
}
