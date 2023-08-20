<?php

namespace Space48\BigcommerceApi\Requests\EmailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateEmailTemplate
 *
 * Update a global template or create a channel-specific email template override.
 */
class UpdateEmailTemplate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/marketing/email-templates/{$this->templateName}";
	}


	/**
	 * @param string $templateName
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected string $templateName,
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
