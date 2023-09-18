<?php

namespace Space48\Bigcommerce\Requests\Placement;

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
	 * @param null|string $widgetTemplateKind The kind of widget template.
	 * @param null|string $templateFile The template file, for example: `pages/home`.
	 * @param null|string $widgetUuid The identifier for a specific widget.
	 * @param null|string $widgetTemplateUuid The identifier for a specific widget template.
	 * @param null|string $channelIdIn A comma-separated list of channel ids to filter the results by.
	 * @param null|string $siteIdIn A comma-separated list of site IDs to filter the results by.
	 */
	public function __construct(
		protected ?string $widgetTemplateKind = null,
		protected ?string $templateFile = null,
		protected ?string $widgetUuid = null,
		protected ?string $widgetTemplateUuid = null,
		protected ?string $channelIdIn = null,
		protected ?string $siteIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'widget_template_kind' => $this->widgetTemplateKind,
			'template_file' => $this->templateFile,
			'widget_uuid' => $this->widgetUuid,
			'widget_template_uuid' => $this->widgetTemplateUuid,
			'channel_id:in' => $this->channelIdIn,
			'site_id:in' => $this->siteIdIn,
		]);
	}
}
