<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\CreateAbandonedCartEmailTemplate;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\DeleteAbandonedCartEmailTemplate;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\GetAbandonedCartEmailTemplate;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\GetAbandonedCartEmailTemplates;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\GetDefaultAbandonedCartEmailTemplate;
use Space48\Bigcommerce\Requests\AbandonedCartEmails\UpdateAbandonedCartEmailTemplate;
use Space48\Bigcommerce\Resource;

class AbandonedCartEmails extends Resource
{
	/**
	 * @param int $channelId Channel ID to use for channel-level data.
	 */
	public function getAbandonedCartEmailTemplates(?int $channelId): Response
	{
		return $this->connector->send(new GetAbandonedCartEmailTemplates($channelId));
	}


	/**
	 * @param int $channelId Channel ID to use for channel-level data.
	 */
	public function createAbandonedCartEmailTemplate(?int $channelId): Response
	{
		return $this->connector->send(new CreateAbandonedCartEmailTemplate($channelId));
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function getAbandonedCartEmailTemplate(int $id): Response
	{
		return $this->connector->send(new GetAbandonedCartEmailTemplate($id));
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function updateAbandonedCartEmailTemplate(int $id): Response
	{
		return $this->connector->send(new UpdateAbandonedCartEmailTemplate($id));
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function deleteAbandonedCartEmailTemplate(int $id): Response
	{
		return $this->connector->send(new DeleteAbandonedCartEmailTemplate($id));
	}


	public function getDefaultAbandonedCartEmailTemplate(): Response
	{
		return $this->connector->send(new GetDefaultAbandonedCartEmailTemplate());
	}
}
