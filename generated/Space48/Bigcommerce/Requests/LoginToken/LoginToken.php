<?php

namespace Space48\Bigcommerce\Requests\LoginToken;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Login Token
 *
 * The customer login access point URL.
 *
 * [Learn more about the Customer Login
 * API](/api-docs/customers/customer-login-api).
 *
 * ##
 * Example
 *
 * ```
 * https://yourstore.example.com/login/token/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ7Y2xpZW50X2lkfSIsImlhdCI6MTUzNTM5MzExMywianRpIjoie3V1aWR9Iiwib3BlcmF0aW9uIjoiY3VzdG9tZXJfbG9naW4iLCJzdG9yZV9oYXNoIjoie3N0b3JlX2hhc2h9IiwiY3VzdG9tZXJfaWQiOjJ9.J-fAtbjRFGdLsT744DhoprFEDqIfVq72HbDzrbFy6Is
 * ```
 */
class LoginToken extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/login/token/{$this->jwtToken}";
	}


	/**
	 * @param string $jwtToken
	 */
	public function __construct(
		protected string $jwtToken,
	) {
	}
}
