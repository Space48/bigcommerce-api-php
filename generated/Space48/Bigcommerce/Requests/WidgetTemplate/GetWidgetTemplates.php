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
	 * @param string $widgetTemplateKind The kind of widget template.
	 * @param int $channelIdIn Filter items by channel_id.
	 */
	public function __construct(
		protected string $widgetTemplateKind,
		protected int $channelIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['widget_template_kind' => $this->widgetTemplateKind, 'channel_id:in' => $this->channelIdIn];
	}
}
