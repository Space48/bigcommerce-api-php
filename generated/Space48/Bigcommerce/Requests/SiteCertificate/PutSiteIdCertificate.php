<?php

namespace Space48\Bigcommerce\Requests\SiteCertificate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * putSiteIdCertificate
 *
 * - If a value for `url` is not supplied, the saved certificate is associated with the specified
 * site’s `primary` URL.
 * - Use caution. Because this endpoint upserts, supplying an SSL certificate
 * for a domain that already has a certificate connected overwrites the domain’s extant certificate.'
 */
class PutSiteIdCertificate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/sites/{$this->siteId}/certificate";
	}


	/**
	 * @param int $siteId
	 */
	public function __construct(
		protected int $siteId,
	) {
	}
}
