<?php

namespace Space48\BigcommerceApi\Requests\Widget;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWidgets
 *
 * Returns a list of **Widgets**. Optional parameters can be passed in.
 */
class GetWidgets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/widgets";
	}


	/**
	 * @param string $widgetTemplateKind The kind of widget template.
	 * @param string $widgetTemplateUuid The identifier for a specific widget template.
	 * @param string $name The URL encoded name of the widget.
	 * @param array $nameIn Use to pass in comma-separated list of widget names. Example: `/widgets?name:in=test-widget-name,header%20images`
	 * @param int $channelIdIn Filter items by channel_id.
	 * @param string $siteIdIn A comma-separated list of site ids to filter the results by.
	 */
	public function __construct(
		protected string $widgetTemplateKind,
		protected string $widgetTemplateUuid,
		protected string $name,
		protected array $nameIn,
		protected int $channelIdIn,
		protected string $siteIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'widget_template_kind' => $this->widgetTemplateKind,
			'widget_template_uuid' => $this->widgetTemplateUuid,
			'name' => $this->name,
			'name:in' => $this->nameIn,
			'channel_id:in' => $this->channelIdIn,
			'site_id:in' => $this->siteIdIn,
		];
	}
}
