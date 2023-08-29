<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAllGiftCertificates
 *
 * By default, it deletes all *Gift Certificates*.
 */
class DeleteAllGiftCertificates extends Request
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
