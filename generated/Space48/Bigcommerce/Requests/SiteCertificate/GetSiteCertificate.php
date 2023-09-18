<?php

namespace Space48\Bigcommerce\Requests\SiteCertificate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSiteCertificate
 *
 * Obtain information about a site’s SSL/TLS certificate.
 */
class GetSiteCertificate extends Request
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
