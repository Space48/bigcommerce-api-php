<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createAbandonedCartEmailTemplate
 *
 * Create an Abandoned Cart Email template.
 */
class CreateAbandonedCartEmailTemplate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails";
	}


	/**
	 * @param null|int $channelId Channel ID to use for channel-level data.
	 */
	public function __construct(
		protected ?int $channelId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['channel_id' => $this->channelId]);
	}
}
