<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteGiftCertificates
 *
 * By default, it deletes all *Gift Certificates*.
 */
class DeleteGiftCertificates extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/gift_certificates";
	}


	public function __construct()
	{
	}
}
