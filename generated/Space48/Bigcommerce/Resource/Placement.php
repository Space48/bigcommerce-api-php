<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Placement\CreatePlacement;
use Space48\Bigcommerce\Requests\Placement\DeletePlacement;
use Space48\Bigcommerce\Requests\Placement\GetPlacement;
use Space48\Bigcommerce\Requests\Placement\GetPlacements;
use Space48\Bigcommerce\Requests\Placement\UpdatePlacement;
use Space48\Bigcommerce\Resource;

class Placement extends Resource
{
	/**
	 * @param string $widgetTemplateKind The kind of widget template.
	 * @param string $templateFile The template file, for example: `pages/home`.
	 * @param string $widgetUuid The identifier for a specific widget.
	 * @param string $widgetTemplateUuid The identifier for a specific widget template.
	 * @param string $channelIdIn A comma-separated list of channel ids to filter the results by.
	 * @param string $siteIdIn A comma-separated list of site IDs to filter the results by.
	 */
	public function getPlacements(
		string $widgetTemplateKind,
		string $templateFile,
		string $widgetUuid,
		string $widgetTemplateUuid,
		string $channelIdIn,
		string $siteIdIn,
	): Response
	{
		return $this->connector->send(new GetPlacements($widgetTemplateKind, $templateFile, $widgetUuid, $widgetTemplateUuid, $channelIdIn, $siteIdIn));
	}


	public function createPlacement(): Response
	{
		return $this->connector->send(new CreatePlacement());
	}


	/**
	 * @param string $uuid The identifier for a specific placement.
	 */
	public function getPlacement(string $uuid): Response
	{
		return $this->connector->send(new GetPlacement($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific placement.
	 */
	public function updatePlacement(string $uuid): Response
	{
		return $this->connector->send(new UpdatePlacement($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific placement.
	 */
	public function deletePlacement(string $uuid): Response
	{
		return $this->connector->send(new DeletePlacement($uuid));
	}
}
