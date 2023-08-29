<?php

namespace Space48\Bigcommerce\Requests\Pages;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createAPage
 *
 * Creates a *Page*. The request payload limit is 1MB.
 *
 * **Required Fields**
 * *   `type`
 * *   `name`
 * *
 * `link` (for a page of `type: link`)
 * *   `feed` (for a page of `type: rss_feed`)
 * *   `body` (for a
 * page of `type: raw`)
 *
 * **Read Only Fields**
 * *   `id`
 *
 * ## Content Type
 *
 * The default value for
 * `content_type` is `text/html`; however, if `page_type` is set to `raw`, `content_type` can be
 * changed to `text/javascript` or `application/json`. Updating this field allows you to place a
 * JavaScript or a JSON file in the root directory.
 *
 * > #### Warning
 * > **Deprecated**
 * > * This API
 * operation is deprecated. Avoid using this API operation if possible. It will be removed in a future
 * version.
 * > * To create one or more pages, use Pages V3ʼs [Create
 * pages](/docs/rest-content/pages#create-pages) endpoint.
 */
class CreateApage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/pages";
	}


	public function __construct()
	{
	}
}
