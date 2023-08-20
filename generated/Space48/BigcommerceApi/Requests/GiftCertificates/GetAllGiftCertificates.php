<?php

namespace Space48\BigcommerceApi\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllGiftCertificates
 *
 * Returns a list of *Gift Certificates*. Optional filter parameters can be passed in.
 *
 * Default sorting
 * is by gift-certificate id, from lowest to highest.
 *
 * The maximum limit is 250. If a limit isn’t
 * provided, up to 50 gift_certificates are returned by default.
 */
class GetAllGiftCertificates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/gift_certificates";
	}


	/**
	 * @param int $minId
	 * @param int $maxId
	 * @param string $code
	 * @param int $orderId
	 * @param string $toName
	 * @param string $toEmail
	 * @param string $fromName
	 * @param string $fromEmail
	 */
	public function __construct(
		protected int $minId,
		protected int $maxId,
		protected string $code,
		protected int $orderId,
		protected string $toName,
		protected string $toEmail,
		protected string $fromName,
		protected string $fromEmail,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'code' => $this->code,
			'order_id' => $this->orderId,
			'to_name' => $this->toName,
			'to_email' => $this->toEmail,
			'from_name' => $this->fromName,
			'from_email' => $this->fromEmail,
		];
	}
}
