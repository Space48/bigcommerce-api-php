<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGiftCertificates
 *
 * Returns a list of *Gift Certificates*. Optional filter parameters can be passed in.
 *
 * Default sorting
 * is by gift-certificate id, from lowest to highest.
 *
 * The maximum limit is 250. If a limit isn’t
 * provided, up to 50 gift_certificates are returned by default.
 */
class GetGiftCertificates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/gift_certificates";
	}


	/**
	 * @param null|int $minId
	 * @param null|int $maxId
	 * @param null|string $code
	 * @param null|int $orderId
	 * @param null|string $toName
	 * @param null|string $toEmail
	 * @param null|string $fromName
	 * @param null|string $fromEmail
	 */
	public function __construct(
		protected ?int $minId = null,
		protected ?int $maxId = null,
		protected ?string $code = null,
		protected ?int $orderId = null,
		protected ?string $toName = null,
		protected ?string $toEmail = null,
		protected ?string $fromName = null,
		protected ?string $fromEmail = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'min_id' => $this->minId,
			'max_id' => $this->maxId,
			'code' => $this->code,
			'order_id' => $this->orderId,
			'to_name' => $this->toName,
			'to_email' => $this->toEmail,
			'from_name' => $this->fromName,
			'from_email' => $this->fromEmail,
		]);
	}
}
