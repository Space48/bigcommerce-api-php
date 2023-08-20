<?php

namespace Space48\BigcommerceApi\Requests\EmailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getEmailTemplate
 *
 * Get a single global email template or a channel-specific email template override.
 *
 * > #### Note
 * > The
 * `/marketing/email-templates` endpoints only work after opting into the new email management
 * experience from your storeʼs control panel. You can opt-in by visiting [Email
 * Templates](https://login.bigcommerce.com/deep-links/manage/marketing/email-templates). If you have
 * already opted in, visiting the [Email
 * Templates](https://login.bigcommerce.com/deep-links/manage/marketing/email-templates) page will
 * return a `404` error, and you will be able to access the new [Transactional
 * Emails](https://login.bigcommerce.com/deep-links/manage/transactional-emails) page.
 */
class GetEmailTemplate extends Request
{
	protected Method $method = Method::GET;


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
