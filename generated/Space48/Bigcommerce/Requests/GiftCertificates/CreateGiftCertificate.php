<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createGiftCertificate
 *
 * Creates a *Gift Certificate*.
 *
 *
 * **Required Fields**
 * * to_name
 * * to_email
 * * from_name
 * * from_email
 * *
 * amount
 *
 * **Read Only Fields**
 * * id
 * * order_id
 *
 * **Notes**
 *
 * When a gift certificate is created through
 * the API, no email notification is triggered to the specified recipient.
 */
class CreateGiftCertificate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/gift_certificates";
	}


	public function __construct()
	{
	}
}
