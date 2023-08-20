<?php

namespace Space48\BigcommerceApi\Requests\SiteCertificate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSitesIdCertificate
 *
 * Obtain information about a site’s SSL/TLS certificate.
 */
class GetSitesIdCertificate extends Request
{
	protected Method $method = Method::GET;


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
