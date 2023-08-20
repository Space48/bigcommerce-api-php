<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Scripts\CreateScript;
use Space48\BigcommerceApi\Requests\Scripts\DeleteScript;
use Space48\BigcommerceApi\Requests\Scripts\GetScript;
use Space48\BigcommerceApi\Requests\Scripts\GetScripts;
use Space48\BigcommerceApi\Requests\Scripts\UpdateScript;
use Space48\BigcommerceApi\Resource;

class Scripts extends Resource
{
	/**
	 * @param string $sort Field name to sort the scripts by. Note: Since `id` increments when new scripts are added, you can use that field to sort by script create date.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 * @param array $channelIdIn Filters list of scripts by the associated channel_id.
	 */
	public function getScripts(string $sort, string $direction, array $channelIdIn): Response
	{
		return $this->connector->send(new GetScripts($sort, $direction, $channelIdIn));
	}


	public function createScript(): Response
	{
		return $this->connector->send(new CreateScript());
	}


	/**
	 * @param string $uuid The identifier for a specific script.
	 */
	public function getScript(string $uuid): Response
	{
		return $this->connector->send(new GetScript($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific script.
	 */
	public function updateScript(string $uuid): Response
	{
		return $this->connector->send(new UpdateScript($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific script.
	 */
	public function deleteScript(string $uuid): Response
	{
		return $this->connector->send(new DeleteScript($uuid));
	}
}
