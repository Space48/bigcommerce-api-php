<?php

namespace Space48\Bigcommerce\Requests\Experiment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateUser
 *
 * Update the information of an existing user.
 */
class UpdateUser extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}";
	}


	/**
	 * @param int $userId Id of an existing user.
	 */
	public function __construct(
		protected int $userId,
	) {
	}
}
