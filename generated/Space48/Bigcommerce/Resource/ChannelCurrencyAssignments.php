<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\CreateMultipleChannelsCurrencyAssignments;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\CreateSingleChannelCurrencyAssignments;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\DeleteSingleChannelCurrencyAssignments;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\GetSingleChannelCurrencyAssignments;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\ListAllCurrencyAssignments;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\UpdateMultipleChannelsCurrencyAssignments;
use Space48\Bigcommerce\Requests\ChannelCurrencyAssignments\UpdateSingleChannelCurrencyAssignments;
use Space48\Bigcommerce\Resource;

class ChannelCurrencyAssignments extends Resource
{
	public function listAllCurrencyAssignments(): Response
	{
		return $this->connector->send(new ListAllCurrencyAssignments());
	}


	public function updateMultipleChannelsCurrencyAssignments(): Response
	{
		return $this->connector->send(new UpdateMultipleChannelsCurrencyAssignments());
	}


	public function createMultipleChannelsCurrencyAssignments(): Response
	{
		return $this->connector->send(new CreateMultipleChannelsCurrencyAssignments());
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function getSingleChannelCurrencyAssignments(int $channelId): Response
	{
		return $this->connector->send(new GetSingleChannelCurrencyAssignments($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function updateSingleChannelCurrencyAssignments(int $channelId): Response
	{
		return $this->connector->send(new UpdateSingleChannelCurrencyAssignments($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function createSingleChannelCurrencyAssignments(int $channelId): Response
	{
		return $this->connector->send(new CreateSingleChannelCurrencyAssignments($channelId));
	}


	/**
	 * @param int $channelId The ID of a channel.
	 */
	public function deleteSingleChannelCurrencyAssignments(int $channelId): Response
	{
		return $this->connector->send(new DeleteSingleChannelCurrencyAssignments($channelId));
	}
}
