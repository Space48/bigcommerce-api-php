<?php

namespace Space48\Bigcommerce\Requests\SiteRoutes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-site-route
 *
 * Create routes that tell BigCommerce how to link to pages on a [headless
 * storefront](/api-docs/storefronts/developers-guide-headless).
 *
 * ## Usage Notes
 * * For a list of
 * supported route types, see [Route types](/docs/rest-management/sites#route-types).
 */
class PostSiteRoute extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}/routes";
	}


	/**
	 * @param int $siteId
	 */
	public function __construct(
		protected int $siteId,
	) {
	}
}
