<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\CreateEmailTemplate;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\DeleteAbandonedCartEmailTemplateId;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\GetAbandonedCartEmailTemplateId;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\GetAbandonedCartEmails;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\GetDefaultAbandonedCartEmailTemplate;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\UpdateAbandonedCartEmailsId;
use Space48\Bigcommerce\Resource;

class AbandonedCartEmails extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-level data.
	 */
	public function getAbandonedCartEmails(int $channelId): Response
	{
		return $this->connector->send(new GetAbandonedCartEmails($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-level data.
	 */
	public function createEmailTemplate(int $channelId): Response
	{
		return $this->connector->send(new CreateEmailTemplate($channelId));
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function getAbandonedCartEmailTemplateId(int $id): Response
	{
		return $this->connector->send(new GetAbandonedCartEmailTemplateId($id));
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function updateAbandonedCartEmailsId(int $id): Response
	{
		return $this->connector->send(new UpdateAbandonedCartEmailsId($id));
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function deleteAbandonedCartEmailTemplateId(int $id): Response
	{
		return $this->connector->send(new DeleteAbandonedCartEmailTemplateId($id));
	}


	public function getDefaultAbandonedCartEmailTemplate(): Response
	{
		return $this->connector->send(new GetDefaultAbandonedCartEmailTemplate());
	}
}
