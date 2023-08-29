<?php

namespace Space48\Bigcommerce;

use Saloon\Http\Connector;
use Space48\Bigcommerce\Resource\AbandonedCartEmails;
use Space48\Bigcommerce\Resource\AbandonedCartSettings;
use Space48\Bigcommerce\Resource\AbandonedCarts;
use Space48\Bigcommerce\Resource\AbandonedCartsSettings;
use Space48\Bigcommerce\Resource\Analytics;
use Space48\Bigcommerce\Resource\ApiToken;
use Space48\Bigcommerce\Resource\Banners;
use Space48\Bigcommerce\Resource\BlogPosts;
use Space48\Bigcommerce\Resource\BlogTags;
use Space48\Bigcommerce\Resource\Brands;
use Space48\Bigcommerce\Resource\BulkPricingRules;
use Space48\Bigcommerce\Resource\Cart;
use Space48\Bigcommerce\Resource\CartCurrency;
use Space48\Bigcommerce\Resource\CartItems;
use Space48\Bigcommerce\Resource\CartsSingle;
use Space48\Bigcommerce\Resource\Catalog;
use Space48\Bigcommerce\Resource\Categories;
use Space48\Bigcommerce\Resource\CategoryAssignments;
use Space48\Bigcommerce\Resource\CategoryTrees;
use Space48\Bigcommerce\Resource\ChannelActiveTheme;
use Space48\Bigcommerce\Resource\ChannelAssignments;
use Space48\Bigcommerce\Resource\ChannelCurrencyAssignments;
use Space48\Bigcommerce\Resource\ChannelListings;
use Space48\Bigcommerce\Resource\ChannelMenus;
use Space48\Bigcommerce\Resource\ChannelMetafields;
use Space48\Bigcommerce\Resource\ChannelSite;
use Space48\Bigcommerce\Resource\ChannelSiteCheckoutUrl;
use Space48\Bigcommerce\Resource\Channels;
use Space48\Bigcommerce\Resource\Checkout;
use Space48\Bigcommerce\Resource\CheckoutBillingAddress;
use Space48\Bigcommerce\Resource\CheckoutCartItems;
use Space48\Bigcommerce\Resource\CheckoutConsignments;
use Space48\Bigcommerce\Resource\CheckoutCoupons;
use Space48\Bigcommerce\Resource\CheckoutDiscounts;
use Space48\Bigcommerce\Resource\CheckoutGiftCertificates;
use Space48\Bigcommerce\Resource\CheckoutOrders;
use Space48\Bigcommerce\Resource\CheckoutSettings;
use Space48\Bigcommerce\Resource\CheckoutSpamProtection;
use Space48\Bigcommerce\Resource\CheckoutStoreCredit;
use Space48\Bigcommerce\Resource\CheckoutToken;
use Space48\Bigcommerce\Resource\ComplexRules;
use Space48\Bigcommerce\Resource\Consent;
use Space48\Bigcommerce\Resource\Countries;
use Space48\Bigcommerce\Resource\Coupons;
use Space48\Bigcommerce\Resource\CurrenciesBulk;
use Space48\Bigcommerce\Resource\CurrenciesSingle;
use Space48\Bigcommerce\Resource\CurrentCustomers;
use Space48\Bigcommerce\Resource\CustomFields;
use Space48\Bigcommerce\Resource\CustomTemplateAssociations;
use Space48\Bigcommerce\Resource\CustomerAddresses;
use Space48\Bigcommerce\Resource\CustomerAttributeValues;
use Space48\Bigcommerce\Resource\CustomerAttributes;
use Space48\Bigcommerce\Resource\CustomerConsent;
use Space48\Bigcommerce\Resource\CustomerFormFieldValues;
use Space48\Bigcommerce\Resource\CustomerGroups;
use Space48\Bigcommerce\Resource\CustomerImpersonationToken;
use Space48\Bigcommerce\Resource\CustomerPasswords;
use Space48\Bigcommerce\Resource\CustomerSettings;
use Space48\Bigcommerce\Resource\CustomerSettingsChannel;
use Space48\Bigcommerce\Resource\CustomerStoredInstruments;
use Space48\Bigcommerce\Resource\CustomerValidateCredentials;
use Space48\Bigcommerce\Resource\Customers;
use Space48\Bigcommerce\Resource\CustomsInformation;
use Space48\Bigcommerce\Resource\EmailStatuses;
use Space48\Bigcommerce\Resource\EmailTemplates;
use Space48\Bigcommerce\Resource\Experiment;
use Space48\Bigcommerce\Resource\FaviconImage;
use Space48\Bigcommerce\Resource\FormFields;
use Space48\Bigcommerce\Resource\GiftCertificates;
use Space48\Bigcommerce\Resource\Images;
use Space48\Bigcommerce\Resource\Inventory;
use Space48\Bigcommerce\Resource\InventoryNotifications;
use Space48\Bigcommerce\Resource\Items;
use Space48\Bigcommerce\Resource\LoginToken;
use Space48\Bigcommerce\Resource\Logo;
use Space48\Bigcommerce\Resource\LogoImage;
use Space48\Bigcommerce\Resource\ManageWebhooksBulk;
use Space48\Bigcommerce\Resource\ManageWebhooksSingle;
use Space48\Bigcommerce\Resource\Metafields;
use Space48\Bigcommerce\Resource\Methods;
use Space48\Bigcommerce\Resource\MethodsDeprecated;
use Space48\Bigcommerce\Resource\Order;
use Space48\Bigcommerce\Resource\OrderConsignments;
use Space48\Bigcommerce\Resource\OrderCoupons;
use Space48\Bigcommerce\Resource\OrderMessages;
use Space48\Bigcommerce\Resource\OrderProducts;
use Space48\Bigcommerce\Resource\OrderSettings;
use Space48\Bigcommerce\Resource\OrderShipments;
use Space48\Bigcommerce\Resource\OrderShippingAddresses;
use Space48\Bigcommerce\Resource\OrderShippingAddressesQuotes;
use Space48\Bigcommerce\Resource\OrderStatus;
use Space48\Bigcommerce\Resource\OrderTaxes;
use Space48\Bigcommerce\Resource\Orders;
use Space48\Bigcommerce\Resource\Pages;
use Space48\Bigcommerce\Resource\PagesBulk;
use Space48\Bigcommerce\Resource\PagesSingle;
use Space48\Bigcommerce\Resource\PaymentActions;
use Space48\Bigcommerce\Resource\Placement;
use Space48\Bigcommerce\Resource\PriceLists;
use Space48\Bigcommerce\Resource\PriceListsAssignments;
use Space48\Bigcommerce\Resource\PriceListsRecords;
use Space48\Bigcommerce\Resource\Processing;
use Space48\Bigcommerce\Resource\ProductModifiers;
use Space48\Bigcommerce\Resource\ProductTaxProperties;
use Space48\Bigcommerce\Resource\ProductVariantOptions;
use Space48\Bigcommerce\Resource\ProductVariants;
use Space48\Bigcommerce\Resource\Products;
use Space48\Bigcommerce\Resource\Redirects;
use Space48\Bigcommerce\Resource\Regions;
use Space48\Bigcommerce\Resource\Reviews;
use Space48\Bigcommerce\Resource\Scripts;
use Space48\Bigcommerce\Resource\SearchFilters;
use Space48\Bigcommerce\Resource\Settings;
use Space48\Bigcommerce\Resource\ShippingCarrier;
use Space48\Bigcommerce\Resource\ShippingMethod;
use Space48\Bigcommerce\Resource\ShippingProvider;
use Space48\Bigcommerce\Resource\ShippingZones;
use Space48\Bigcommerce\Resource\SiteCertificate;
use Space48\Bigcommerce\Resource\SiteRoutes;
use Space48\Bigcommerce\Resource\Sites;
use Space48\Bigcommerce\Resource\SortOrder;
use Space48\Bigcommerce\Resource\States;
use Space48\Bigcommerce\Resource\StoreInformation;
use Space48\Bigcommerce\Resource\StoreLocale;
use Space48\Bigcommerce\Resource\StoreProfile;
use Space48\Bigcommerce\Resource\StorefrontCategory;
use Space48\Bigcommerce\Resource\StorefrontProduct;
use Space48\Bigcommerce\Resource\StorefrontRobotstxt;
use Space48\Bigcommerce\Resource\StorefrontSearch;
use Space48\Bigcommerce\Resource\StorefrontSecurity;
use Space48\Bigcommerce\Resource\StorefrontSeo;
use Space48\Bigcommerce\Resource\StorefrontStatus;
use Space48\Bigcommerce\Resource\Subscribers;
use Space48\Bigcommerce\Resource\Subscription;
use Space48\Bigcommerce\Resource\Summary;
use Space48\Bigcommerce\Resource\SystemLogs;
use Space48\Bigcommerce\Resource\TaxProperties;
use Space48\Bigcommerce\Resource\TaxProvider;
use Space48\Bigcommerce\Resource\TaxProviderConnection;
use Space48\Bigcommerce\Resource\TaxRates;
use Space48\Bigcommerce\Resource\TaxSettings;
use Space48\Bigcommerce\Resource\TaxZones;
use Space48\Bigcommerce\Resource\Taxes;
use Space48\Bigcommerce\Resource\TemplateSettings;
use Space48\Bigcommerce\Resource\ThemeActions;
use Space48\Bigcommerce\Resource\ThemeConfigurations;
use Space48\Bigcommerce\Resource\ThemeCustomTemplates;
use Space48\Bigcommerce\Resource\ThemeJobs;
use Space48\Bigcommerce\Resource\Themes;
use Space48\Bigcommerce\Resource\TimeZone;
use Space48\Bigcommerce\Resource\Tokens;
use Space48\Bigcommerce\Resource\Transactions;
use Space48\Bigcommerce\Resource\Values;
use Space48\Bigcommerce\Resource\VariantsBatch;
use Space48\Bigcommerce\Resource\Videos;
use Space48\Bigcommerce\Resource\WebhookEvents;
use Space48\Bigcommerce\Resource\WebhooksAdmin;
use Space48\Bigcommerce\Resource\Widget;
use Space48\Bigcommerce\Resource\WidgetTemplate;
use Space48\Bigcommerce\Resource\Wishlists;
use Space48\Bigcommerce\Resource\WishlistsItems;

/**
 * Abandoned Cart Emails
 *
 * Abandoned Cart Emails V3 API managing Handlebars-based emails.
 */
class Bigcommerce extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://api.bigcommerce.com/stores/{store_hash}/v3';
	}


	public function abandonedCartEmails(): AbandonedCartEmails
	{
		return new AbandonedCartEmails($this);
	}


	public function templateSettings(): TemplateSettings
	{
		return new TemplateSettings($this);
	}


	public function abandonedCartSettings(): AbandonedCartSettings
	{
		return new AbandonedCartSettings($this);
	}


	public function abandonedCarts(): AbandonedCarts
	{
		return new AbandonedCarts($this);
	}


	public function abandonedCartsSettings(): AbandonedCartsSettings
	{
		return new AbandonedCartsSettings($this);
	}


	public function cart(): Cart
	{
		return new Cart($this);
	}


	public function cartCurrency(): CartCurrency
	{
		return new CartCurrency($this);
	}


	public function cartItems(): CartItems
	{
		return new CartItems($this);
	}


	public function cartsSingle(): CartsSingle
	{
		return new CartsSingle($this);
	}


	public function items(): Items
	{
		return new Items($this);
	}


	public function metafields(): Metafields
	{
		return new Metafields($this);
	}


	public function redirects(): Redirects
	{
		return new Redirects($this);
	}


	public function settings(): Settings
	{
		return new Settings($this);
	}


	public function brands(): Brands
	{
		return new Brands($this);
	}


	public function images(): Images
	{
		return new Images($this);
	}


	public function categories(): Categories
	{
		return new Categories($this);
	}


	public function sortOrder(): SortOrder
	{
		return new SortOrder($this);
	}


	public function categoryTrees(): CategoryTrees
	{
		return new CategoryTrees($this);
	}


	public function productModifiers(): ProductModifiers
	{
		return new ProductModifiers($this);
	}


	public function values(): Values
	{
		return new Values($this);
	}


	public function productVariantOptions(): ProductVariantOptions
	{
		return new ProductVariantOptions($this);
	}


	public function productVariants(): ProductVariants
	{
		return new ProductVariants($this);
	}


	public function variantsBatch(): VariantsBatch
	{
		return new VariantsBatch($this);
	}


	public function bulkPricingRules(): BulkPricingRules
	{
		return new BulkPricingRules($this);
	}


	public function categoryAssignments(): CategoryAssignments
	{
		return new CategoryAssignments($this);
	}


	public function channelAssignments(): ChannelAssignments
	{
		return new ChannelAssignments($this);
	}


	public function complexRules(): ComplexRules
	{
		return new ComplexRules($this);
	}


	public function customFields(): CustomFields
	{
		return new CustomFields($this);
	}


	public function products(): Products
	{
		return new Products($this);
	}


	public function reviews(): Reviews
	{
		return new Reviews($this);
	}


	public function summary(): Summary
	{
		return new Summary($this);
	}


	public function videos(): Videos
	{
		return new Videos($this);
	}


	public function channelActiveTheme(): ChannelActiveTheme
	{
		return new ChannelActiveTheme($this);
	}


	public function channelCurrencyAssignments(): ChannelCurrencyAssignments
	{
		return new ChannelCurrencyAssignments($this);
	}


	public function channelListings(): ChannelListings
	{
		return new ChannelListings($this);
	}


	public function channelMenus(): ChannelMenus
	{
		return new ChannelMenus($this);
	}


	public function channelMetafields(): ChannelMetafields
	{
		return new ChannelMetafields($this);
	}


	public function channelSite(): ChannelSite
	{
		return new ChannelSite($this);
	}


	public function channelSiteCheckoutUrl(): ChannelSiteCheckoutUrl
	{
		return new ChannelSiteCheckoutUrl($this);
	}


	public function channels(): Channels
	{
		return new Channels($this);
	}


	public function checkout(): Checkout
	{
		return new Checkout($this);
	}


	public function checkoutBillingAddress(): CheckoutBillingAddress
	{
		return new CheckoutBillingAddress($this);
	}


	public function checkoutCartItems(): CheckoutCartItems
	{
		return new CheckoutCartItems($this);
	}


	public function checkoutConsignments(): CheckoutConsignments
	{
		return new CheckoutConsignments($this);
	}


	public function checkoutCoupons(): CheckoutCoupons
	{
		return new CheckoutCoupons($this);
	}


	public function checkoutGiftCertificates(): CheckoutGiftCertificates
	{
		return new CheckoutGiftCertificates($this);
	}


	public function checkoutSpamProtection(): CheckoutSpamProtection
	{
		return new CheckoutSpamProtection($this);
	}


	public function checkoutStoreCredit(): CheckoutStoreCredit
	{
		return new CheckoutStoreCredit($this);
	}


	public function checkoutDiscounts(): CheckoutDiscounts
	{
		return new CheckoutDiscounts($this);
	}


	public function checkoutOrders(): CheckoutOrders
	{
		return new CheckoutOrders($this);
	}


	public function checkoutSettings(): CheckoutSettings
	{
		return new CheckoutSettings($this);
	}


	public function checkoutToken(): CheckoutToken
	{
		return new CheckoutToken($this);
	}


	public function consent(): Consent
	{
		return new Consent($this);
	}


	public function currenciesBulk(): CurrenciesBulk
	{
		return new CurrenciesBulk($this);
	}


	public function currenciesSingle(): CurrenciesSingle
	{
		return new CurrenciesSingle($this);
	}


	public function currentCustomers(): CurrentCustomers
	{
		return new CurrentCustomers($this);
	}


	public function customTemplateAssociations(): CustomTemplateAssociations
	{
		return new CustomTemplateAssociations($this);
	}


	public function loginToken(): LoginToken
	{
		return new LoginToken($this);
	}


	public function customers(): Customers
	{
		return new Customers($this);
	}


	public function customerAddresses(): CustomerAddresses
	{
		return new CustomerAddresses($this);
	}


	public function customerGroups(): CustomerGroups
	{
		return new CustomerGroups($this);
	}


	public function customerPasswords(): CustomerPasswords
	{
		return new CustomerPasswords($this);
	}


	public function customerAttributeValues(): CustomerAttributeValues
	{
		return new CustomerAttributeValues($this);
	}


	public function customerAttributes(): CustomerAttributes
	{
		return new CustomerAttributes($this);
	}


	public function customerConsent(): CustomerConsent
	{
		return new CustomerConsent($this);
	}


	public function customerFormFieldValues(): CustomerFormFieldValues
	{
		return new CustomerFormFieldValues($this);
	}


	public function customerSettings(): CustomerSettings
	{
		return new CustomerSettings($this);
	}


	public function customerSettingsChannel(): CustomerSettingsChannel
	{
		return new CustomerSettingsChannel($this);
	}


	public function customerStoredInstruments(): CustomerStoredInstruments
	{
		return new CustomerStoredInstruments($this);
	}


	public function customerValidateCredentials(): CustomerValidateCredentials
	{
		return new CustomerValidateCredentials($this);
	}


	public function emailTemplates(): EmailTemplates
	{
		return new EmailTemplates($this);
	}


	public function formFields(): FormFields
	{
		return new FormFields($this);
	}


	public function countries(): Countries
	{
		return new Countries($this);
	}


	public function states(): States
	{
		return new States($this);
	}


	public function experiment(): Experiment
	{
		return new Experiment($this);
	}


	public function banners(): Banners
	{
		return new Banners($this);
	}


	public function coupons(): Coupons
	{
		return new Coupons($this);
	}


	public function giftCertificates(): GiftCertificates
	{
		return new GiftCertificates($this);
	}


	public function order(): Order
	{
		return new Order($this);
	}


	public function orderConsignments(): OrderConsignments
	{
		return new OrderConsignments($this);
	}


	public function orderCoupons(): OrderCoupons
	{
		return new OrderCoupons($this);
	}


	public function orderMessages(): OrderMessages
	{
		return new OrderMessages($this);
	}


	public function orderProducts(): OrderProducts
	{
		return new OrderProducts($this);
	}


	public function orderShipments(): OrderShipments
	{
		return new OrderShipments($this);
	}


	public function orderShippingAddresses(): OrderShippingAddresses
	{
		return new OrderShippingAddresses($this);
	}


	public function orderShippingAddressesQuotes(): OrderShippingAddressesQuotes
	{
		return new OrderShippingAddressesQuotes($this);
	}


	public function orderStatus(): OrderStatus
	{
		return new OrderStatus($this);
	}


	public function orderTaxes(): OrderTaxes
	{
		return new OrderTaxes($this);
	}


	public function orders(): Orders
	{
		return new Orders($this);
	}


	public function orderSettings(): OrderSettings
	{
		return new OrderSettings($this);
	}


	public function paymentActions(): PaymentActions
	{
		return new PaymentActions($this);
	}


	public function transactions(): Transactions
	{
		return new Transactions($this);
	}


	public function pagesBulk(): PagesBulk
	{
		return new PagesBulk($this);
	}


	public function pagesSingle(): PagesSingle
	{
		return new PagesSingle($this);
	}


	public function methods(): Methods
	{
		return new Methods($this);
	}


	public function tokens(): Tokens
	{
		return new Tokens($this);
	}


	public function methodsDeprecated(): MethodsDeprecated
	{
		return new MethodsDeprecated($this);
	}


	public function processing(): Processing
	{
		return new Processing($this);
	}


	public function priceLists(): PriceLists
	{
		return new PriceLists($this);
	}


	public function priceListsAssignments(): PriceListsAssignments
	{
		return new PriceListsAssignments($this);
	}


	public function priceListsRecords(): PriceListsRecords
	{
		return new PriceListsRecords($this);
	}


	public function scripts(): Scripts
	{
		return new Scripts($this);
	}


	public function analytics(): Analytics
	{
		return new Analytics($this);
	}


	public function catalog(): Catalog
	{
		return new Catalog($this);
	}


	public function emailStatuses(): EmailStatuses
	{
		return new EmailStatuses($this);
	}


	public function faviconImage(): FaviconImage
	{
		return new FaviconImage($this);
	}


	public function inventory(): Inventory
	{
		return new Inventory($this);
	}


	public function inventoryNotifications(): InventoryNotifications
	{
		return new InventoryNotifications($this);
	}


	public function logo(): Logo
	{
		return new Logo($this);
	}


	public function logoImage(): LogoImage
	{
		return new LogoImage($this);
	}


	public function searchFilters(): SearchFilters
	{
		return new SearchFilters($this);
	}


	public function storeLocale(): StoreLocale
	{
		return new StoreLocale($this);
	}


	public function storeProfile(): StoreProfile
	{
		return new StoreProfile($this);
	}


	public function storefrontCategory(): StorefrontCategory
	{
		return new StorefrontCategory($this);
	}


	public function storefrontProduct(): StorefrontProduct
	{
		return new StorefrontProduct($this);
	}


	public function storefrontRobotstxt(): StorefrontRobotstxt
	{
		return new StorefrontRobotstxt($this);
	}


	public function storefrontSearch(): StorefrontSearch
	{
		return new StorefrontSearch($this);
	}


	public function storefrontSecurity(): StorefrontSecurity
	{
		return new StorefrontSecurity($this);
	}


	public function storefrontSeo(): StorefrontSeo
	{
		return new StorefrontSeo($this);
	}


	public function storefrontStatus(): StorefrontStatus
	{
		return new StorefrontStatus($this);
	}


	public function shippingCarrier(): ShippingCarrier
	{
		return new ShippingCarrier($this);
	}


	public function shippingMethod(): ShippingMethod
	{
		return new ShippingMethod($this);
	}


	public function shippingZones(): ShippingZones
	{
		return new ShippingZones($this);
	}


	public function customsInformation(): CustomsInformation
	{
		return new CustomsInformation($this);
	}


	public function shippingProvider(): ShippingProvider
	{
		return new ShippingProvider($this);
	}


	public function siteCertificate(): SiteCertificate
	{
		return new SiteCertificate($this);
	}


	public function siteRoutes(): SiteRoutes
	{
		return new SiteRoutes($this);
	}


	public function sites(): Sites
	{
		return new Sites($this);
	}


	public function blogPosts(): BlogPosts
	{
		return new BlogPosts($this);
	}


	public function blogTags(): BlogTags
	{
		return new BlogTags($this);
	}


	public function pages(): Pages
	{
		return new Pages($this);
	}


	public function storeInformation(): StoreInformation
	{
		return new StoreInformation($this);
	}


	public function timeZone(): TimeZone
	{
		return new TimeZone($this);
	}


	public function systemLogs(): SystemLogs
	{
		return new SystemLogs($this);
	}


	public function apiToken(): ApiToken
	{
		return new ApiToken($this);
	}


	public function customerImpersonationToken(): CustomerImpersonationToken
	{
		return new CustomerImpersonationToken($this);
	}


	public function subscribers(): Subscribers
	{
		return new Subscribers($this);
	}


	public function subscription(): Subscription
	{
		return new Subscription($this);
	}


	public function taxProviderConnection(): TaxProviderConnection
	{
		return new TaxProviderConnection($this);
	}


	public function taxes(): Taxes
	{
		return new Taxes($this);
	}


	public function productTaxProperties(): ProductTaxProperties
	{
		return new ProductTaxProperties($this);
	}


	public function taxProperties(): TaxProperties
	{
		return new TaxProperties($this);
	}


	public function taxProvider(): TaxProvider
	{
		return new TaxProvider($this);
	}


	public function taxRates(): TaxRates
	{
		return new TaxRates($this);
	}


	public function taxZones(): TaxZones
	{
		return new TaxZones($this);
	}


	public function taxSettings(): TaxSettings
	{
		return new TaxSettings($this);
	}


	public function themeActions(): ThemeActions
	{
		return new ThemeActions($this);
	}


	public function themeConfigurations(): ThemeConfigurations
	{
		return new ThemeConfigurations($this);
	}


	public function themeCustomTemplates(): ThemeCustomTemplates
	{
		return new ThemeCustomTemplates($this);
	}


	public function themeJobs(): ThemeJobs
	{
		return new ThemeJobs($this);
	}


	public function themes(): Themes
	{
		return new Themes($this);
	}


	public function manageWebhooksBulk(): ManageWebhooksBulk
	{
		return new ManageWebhooksBulk($this);
	}


	public function manageWebhooksSingle(): ManageWebhooksSingle
	{
		return new ManageWebhooksSingle($this);
	}


	public function webhookEvents(): WebhookEvents
	{
		return new WebhookEvents($this);
	}


	public function webhooksAdmin(): WebhooksAdmin
	{
		return new WebhooksAdmin($this);
	}


	public function placement(): Placement
	{
		return new Placement($this);
	}


	public function regions(): Regions
	{
		return new Regions($this);
	}


	public function widget(): Widget
	{
		return new Widget($this);
	}


	public function widgetTemplate(): WidgetTemplate
	{
		return new WidgetTemplate($this);
	}


	public function wishlists(): Wishlists
	{
		return new Wishlists($this);
	}


	public function wishlistsItems(): WishlistsItems
	{
		return new WishlistsItems($this);
	}
}
