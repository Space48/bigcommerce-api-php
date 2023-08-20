<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\EmailTemplates\DeleteEmailTemplateOverride;
use Space48\BigcommerceApi\Requests\EmailTemplates\GetEmailTemplate;
use Space48\BigcommerceApi\Requests\EmailTemplates\GetEmailTemplates;
use Space48\BigcommerceApi\Requests\EmailTemplates\UpdateEmailTemplate;
use Space48\BigcommerceApi\Resource;

class EmailTemplates extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getEmailTemplates(int $channelId): Response
	{
		return $this->connector->send(new GetEmailTemplates($channelId));
	}


	/**
	 * @param string $templateName
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function getEmailTemplate(string $templateName, int $channelId): Response
	{
		return $this->connector->send(new GetEmailTemplate($templateName, $channelId));
	}


	/**
	 * @param string $templateName
	 * @param int $channelId Channel ID to use for channel-specific setting. If omitted, you will interact with the global setting only.
	 */
	public function updateEmailTemplate(string $templateName, int $channelId): Response
	{
		return $this->connector->send(new UpdateEmailTemplate($templateName, $channelId));
	}


	/**
	 * @param string $templateName
	 * @param int $channelId Required Channel ID. This delete operation will delete overridden settings for this channel, thus restoring them to the global defaults.
	 */
	public function deleteEmailTemplateOverride(string $templateName, int $channelId): Response
	{
		return $this->connector->send(new DeleteEmailTemplateOverride($templateName, $channelId));
	}
}
