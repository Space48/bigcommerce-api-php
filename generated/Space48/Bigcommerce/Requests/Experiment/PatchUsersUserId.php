<?php

namespace Space48\Bigcommerce\Requests\Experiment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-users-userId
 *
 * Update the information of an existing user.
 */
class PatchUsersUserId extends Request implements HasBody
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
