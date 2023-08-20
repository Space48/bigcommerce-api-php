<?php

namespace Space48\BigcommerceApi\Requests\SiteCertificate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-sites-certificates
 *
 * Return all SSL certificates connected to domains within a store.
 */
class GetSitesCertificates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/sites/certificates";
	}


	/**
	 * @param string $urlsIn Query certificates by one or more URLs
	 */
	public function __construct(
		protected string $urlsIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['urls:in' => $this->urlsIn];
	}
}
