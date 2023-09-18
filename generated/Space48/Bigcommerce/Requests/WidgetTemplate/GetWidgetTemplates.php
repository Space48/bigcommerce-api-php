<?php

namespace Space48\Bigcommerce\Requests\WidgetTemplate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWidgetTemplates
 *
 * Returns a list of **Widget Templates**.
 */
class GetWidgetTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/widget-templates";
	}


	/**
	 * @param null|string $widgetTemplateKind The kind of widget template.
	 * @param null|int $channelIdIn Filter items by channel_id.
	 */
	public function __construct(
		protected ?string $widgetTemplateKind = null,
		protected ?int $channelIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['widget_template_kind' => $this->widgetTemplateKind, 'channel_id:in' => $this->channelIdIn]);
	}
}
