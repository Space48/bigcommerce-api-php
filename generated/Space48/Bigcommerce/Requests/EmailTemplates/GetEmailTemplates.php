<?php

namespace Space48\Bigcommerce\Requests\EmailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getEmailTemplates
 *
 * Get a list of email templates.
 *
 * > #### Note
 * > The `/marketing/email-templates` endpoints only work
 * after opting into the new email management experience from your storeʼs control panel. You can
 * opt-in by visiting Email Templates. If you have already opted in, visiting the Email Templates page
 * will return a `404` error, and you will be able to access the new Transactional Emails page.
 */
class GetEmailTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/marketing/email-templates";
	}


	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function __construct(
		protected int $channelId,
	) {
	}


	public function defaultQuery(): array
	{
		return ['channel_id' => $this->channelId];
	}
}
