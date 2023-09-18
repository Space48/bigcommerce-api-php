<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\WidgetTemplate\CreateWidgetTemplate;
use Space48\Bigcommerce\Requests\WidgetTemplate\DeleteWidgetTemplate;
use Space48\Bigcommerce\Requests\WidgetTemplate\GetWidgetTemplate;
use Space48\Bigcommerce\Requests\WidgetTemplate\GetWidgetTemplates;
use Space48\Bigcommerce\Requests\WidgetTemplate\PreviewWidget;
use Space48\Bigcommerce\Requests\WidgetTemplate\UpdateWidgetTemplate;
use Space48\Bigcommerce\Resource;

class WidgetTemplate extends Resource
{
	/**
	 * @param string $widgetTemplateKind The kind of widget template.
	 * @param int $channelIdIn Filter items by channel_id.
	 */
	public function getWidgetTemplates(?string $widgetTemplateKind, ?int $channelIdIn): Response
	{
		return $this->connector->send(new GetWidgetTemplates($widgetTemplateKind, $channelIdIn));
	}


	public function createWidgetTemplate(): Response
	{
		return $this->connector->send(new CreateWidgetTemplate());
	}


	/**
	 * @param string $uuid The identifier for a specific widget.
	 */
	public function previewWidget(string $uuid): Response
	{
		return $this->connector->send(new PreviewWidget($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific template.
	 * @param string $versionUuid This is an optional query parameter used to attempt to fetch a specific Widget Template version.
	 */
	public function getWidgetTemplate(string $uuid, ?string $versionUuid): Response
	{
		return $this->connector->send(new GetWidgetTemplate($uuid, $versionUuid));
	}


	/**
	 * @param string $uuid The identifier for a specific template.
	 */
	public function updateWidgetTemplate(string $uuid): Response
	{
		return $this->connector->send(new UpdateWidgetTemplate($uuid));
	}


	/**
	 * @param string $uuid The identifier for a specific template.
	 */
	public function deleteWidgetTemplate(string $uuid): Response
	{
		return $this->connector->send(new DeleteWidgetTemplate($uuid));
	}
}
