<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Widget\CreateWidget;
use Space48\Bigcommerce\Requests\Widget\DeleteWidget;
use Space48\Bigcommerce\Requests\Widget\GetWidget;
use Space48\Bigcommerce\Requests\Widget\GetWidgets;
use Space48\Bigcommerce\Requests\Widget\UpdateWidget;
use Space48\Bigcommerce\Resource;

class Widget extends Resource
{
	/**
	 * @param string $widgetTemplateKind The kind of widget template.
	 * @param string $widgetTemplateUuid The identifier for a specific widget template.
	 * @param string $name The URL encoded name of the widget.
	 * @param array $nameIn Use to pass in comma-separated list of widget names. Example: `/widgets?name:in=test-widget-name,header%20images`
	 * @param int $channelIdIn Filter items by channel_id.
	 * @param string $siteIdIn A comma-separated list of site ids to filter the results by.
	 */
	public function getWidgets(
		?string $widgetTemplateKind,
		?string $widgetTemplateUuid,
		?string $name,
		?array $nameIn,
		?int $channelIdIn,
		?string $siteIdIn,
	): Response
	{
		return $this->connector->send(new GetWidgets($widgetTemplateKind, $widgetTemplateUuid, $name, $nameIn, $channelIdIn, $siteIdIn));
	}


	public function createWidget(): Response
	{
		return $this->connector->send(new CreateWidget());
	}


	/**
	 * @param string $uuid The identifier for a specific widget.
	 */
	public function getWidget(string $uuid): Response
	{
		return $this->connector->send(new GetWidget($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific widget.
	 */
	public function updateWidget(string $uuid): Response
	{
		return $this->connector->send(new UpdateWidget($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific widget.
	 */
	public function deleteWidget(string $uuid): Response
	{
		return $this->connector->send(new DeleteWidget($uuid));
	}
}
