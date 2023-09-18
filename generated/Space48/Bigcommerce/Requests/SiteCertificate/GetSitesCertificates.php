<?php

namespace Space48\Bigcommerce\Requests\SiteCertificate;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSitesCertificates
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
	 * @param null|string $urlsIn Query certificates by one or more URLs
	 */
	public function __construct(
		protected ?string $urlsIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['urls:in' => $this->urlsIn]);
	}
}
