<?php

namespace Space48\BigcommerceApi\Requests\Placement;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getPlacements
 *
 * Returns a list of **Placements**.
 */
class GetPlacements extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/placements";
	}


	/**
	 * @param string $widgetTemplateKind The kind of widget template.
	 * @param string $templateFile The template file, for example: `pages/home`.
	 * @param string $widgetUuid The identifier for a specific widget.
	 * @param string $widgetTemplateUuid The identifier for a specific widget template.
	 * @param string $channelIdIn A comma-separated list of channel ids to filter the results by.
	 * @param string $siteIdIn A comma-separated list of site IDs to filter the results by.
	 */
	public function __construct(
		protected string $widgetTemplateKind,
		protected string $templateFile,
		protected string $widgetUuid,
		protected string $widgetTemplateUuid,
		protected string $channelIdIn,
		protected string $siteIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'widget_template_kind' => $this->widgetTemplateKind,
			'template_file' => $this->templateFile,
			'widget_uuid' => $this->widgetUuid,
			'widget_template_uuid' => $this->widgetTemplateUuid,
			'channel_id:in' => $this->channelIdIn,
			'site_id:in' => $this->siteIdIn,
		];
	}
}
