<?php

namespace Space48\Bigcommerce\Requests\EmailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteEmailTemplateOverride
 *
 * Removes a channel-specific email template override.
 */
class DeleteEmailTemplateOverride extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/marketing/email-templates/{$this->templateName}";
	}


	/**
	 * @param string $templateName
	 * @param int $channelId Required Channel ID. This delete operation will delete overridden settings for this channel, thus restoring them to the global defaults.
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
