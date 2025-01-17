<?php

namespace Proxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Router extends \Entities\Router implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Entities\\Router' . "\0" . 'id', '' . "\0" . 'Entities\\Router' . "\0" . 'handle', '' . "\0" . 'Entities\\Router' . "\0" . 'protocol', '' . "\0" . 'Entities\\Router' . "\0" . 'type', '' . "\0" . 'Entities\\Router' . "\0" . 'name', '' . "\0" . 'Entities\\Router' . "\0" . 'shortname', '' . "\0" . 'Entities\\Router' . "\0" . 'router_id', '' . "\0" . 'Entities\\Router' . "\0" . 'peering_ip', '' . "\0" . 'Entities\\Router' . "\0" . 'asn', '' . "\0" . 'Entities\\Router' . "\0" . 'software', '' . "\0" . 'Entities\\Router' . "\0" . 'software_version', '' . "\0" . 'Entities\\Router' . "\0" . 'operating_system', '' . "\0" . 'Entities\\Router' . "\0" . 'operating_system_version', '' . "\0" . 'Entities\\Router' . "\0" . 'mgmt_host', '' . "\0" . 'Entities\\Router' . "\0" . 'api', '' . "\0" . 'Entities\\Router' . "\0" . 'api_type', '' . "\0" . 'Entities\\Router' . "\0" . 'lg_access', '' . "\0" . 'Entities\\Router' . "\0" . 'quarantine', '' . "\0" . 'Entities\\Router' . "\0" . 'bgp_lc', '' . "\0" . 'Entities\\Router' . "\0" . 'rpki', '' . "\0" . 'Entities\\Router' . "\0" . 'skip_md5', '' . "\0" . 'Entities\\Router' . "\0" . 'template', '' . "\0" . 'Entities\\Router' . "\0" . 'last_updated', '' . "\0" . 'Entities\\Router' . "\0" . 'vlan'];
        }

        return ['__isInitialized__', '' . "\0" . 'Entities\\Router' . "\0" . 'id', '' . "\0" . 'Entities\\Router' . "\0" . 'handle', '' . "\0" . 'Entities\\Router' . "\0" . 'protocol', '' . "\0" . 'Entities\\Router' . "\0" . 'type', '' . "\0" . 'Entities\\Router' . "\0" . 'name', '' . "\0" . 'Entities\\Router' . "\0" . 'shortname', '' . "\0" . 'Entities\\Router' . "\0" . 'router_id', '' . "\0" . 'Entities\\Router' . "\0" . 'peering_ip', '' . "\0" . 'Entities\\Router' . "\0" . 'asn', '' . "\0" . 'Entities\\Router' . "\0" . 'software', '' . "\0" . 'Entities\\Router' . "\0" . 'software_version', '' . "\0" . 'Entities\\Router' . "\0" . 'operating_system', '' . "\0" . 'Entities\\Router' . "\0" . 'operating_system_version', '' . "\0" . 'Entities\\Router' . "\0" . 'mgmt_host', '' . "\0" . 'Entities\\Router' . "\0" . 'api', '' . "\0" . 'Entities\\Router' . "\0" . 'api_type', '' . "\0" . 'Entities\\Router' . "\0" . 'lg_access', '' . "\0" . 'Entities\\Router' . "\0" . 'quarantine', '' . "\0" . 'Entities\\Router' . "\0" . 'bgp_lc', '' . "\0" . 'Entities\\Router' . "\0" . 'rpki', '' . "\0" . 'Entities\\Router' . "\0" . 'skip_md5', '' . "\0" . 'Entities\\Router' . "\0" . 'template', '' . "\0" . 'Entities\\Router' . "\0" . 'last_updated', '' . "\0" . 'Entities\\Router' . "\0" . 'vlan'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Router $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandle', []);

        return parent::getHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function handle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'handle', []);

        return parent::handle();
    }

    /**
     * {@inheritDoc}
     */
    public function getProtocol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProtocol', []);

        return parent::getProtocol();
    }

    /**
     * {@inheritDoc}
     */
    public function protocol()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'protocol', []);

        return parent::protocol();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function type()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'type', []);

        return parent::type();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function name()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'name', []);

        return parent::name();
    }

    /**
     * {@inheritDoc}
     */
    public function getShortName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortName', []);

        return parent::getShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function shortname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'shortname', []);

        return parent::shortname();
    }

    /**
     * {@inheritDoc}
     */
    public function getRouterId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRouterId', []);

        return parent::getRouterId();
    }

    /**
     * {@inheritDoc}
     */
    public function routerId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'routerId', []);

        return parent::routerId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPeeringIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeeringIp', []);

        return parent::getPeeringIp();
    }

    /**
     * {@inheritDoc}
     */
    public function peeringIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'peeringIp', []);

        return parent::peeringIp();
    }

    /**
     * {@inheritDoc}
     */
    public function getAsn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsn', []);

        return parent::getAsn();
    }

    /**
     * {@inheritDoc}
     */
    public function asn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'asn', []);

        return parent::asn();
    }

    /**
     * {@inheritDoc}
     */
    public function getSoftware()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoftware', []);

        return parent::getSoftware();
    }

    /**
     * {@inheritDoc}
     */
    public function software()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'software', []);

        return parent::software();
    }

    /**
     * {@inheritDoc}
     */
    public function getSoftwareVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoftwareVersion', []);

        return parent::getSoftwareVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function softwareVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'softwareVersion', []);

        return parent::softwareVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getOperatingSystem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOperatingSystem', []);

        return parent::getOperatingSystem();
    }

    /**
     * {@inheritDoc}
     */
    public function operatingSystem()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'operatingSystem', []);

        return parent::operatingSystem();
    }

    /**
     * {@inheritDoc}
     */
    public function getOperatingSystemVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOperatingSystemVersion', []);

        return parent::getOperatingSystemVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function operatingSystemVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'operatingSystemVersion', []);

        return parent::operatingSystemVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getMgmtHost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMgmtHost', []);

        return parent::getMgmtHost();
    }

    /**
     * {@inheritDoc}
     */
    public function mgmtIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mgmtIp', []);

        return parent::mgmtIp();
    }

    /**
     * {@inheritDoc}
     */
    public function getApi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApi', []);

        return parent::getApi();
    }

    /**
     * {@inheritDoc}
     */
    public function api()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'api', []);

        return parent::api();
    }

    /**
     * {@inheritDoc}
     */
    public function getApiType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiType', []);

        return parent::getApiType();
    }

    /**
     * {@inheritDoc}
     */
    public function apiType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'apiType', []);

        return parent::apiType();
    }

    /**
     * {@inheritDoc}
     */
    public function hasApi(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasApi', []);

        return parent::hasApi();
    }

    /**
     * {@inheritDoc}
     */
    public function getLgAccess()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLgAccess', []);

        return parent::getLgAccess();
    }

    /**
     * {@inheritDoc}
     */
    public function lgAccess()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'lgAccess', []);

        return parent::lgAccess();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuarantine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuarantine', []);

        return parent::getQuarantine();
    }

    /**
     * {@inheritDoc}
     */
    public function quarantine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'quarantine', []);

        return parent::quarantine();
    }

    /**
     * {@inheritDoc}
     */
    public function getBgpLc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBgpLc', []);

        return parent::getBgpLc();
    }

    /**
     * {@inheritDoc}
     */
    public function bgpLargeCommunities()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'bgpLargeCommunities', []);

        return parent::bgpLargeCommunities();
    }

    /**
     * {@inheritDoc}
     */
    public function getRPKI(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRPKI', []);

        return parent::getRPKI();
    }

    /**
     * {@inheritDoc}
     */
    public function rpki(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'rpki', []);

        return parent::rpki();
    }

    /**
     * {@inheritDoc}
     */
    public function getSkipMd5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkipMd5', []);

        return parent::getSkipMd5();
    }

    /**
     * {@inheritDoc}
     */
    public function skipMD5()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'skipMD5', []);

        return parent::skipMD5();
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', []);

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastUpdated', []);

        return parent::getLastUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastUpdatedCarbon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastUpdatedCarbon', []);

        return parent::getLastUpdatedCarbon();
    }

    /**
     * {@inheritDoc}
     */
    public function getVlan()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVlan', []);

        return parent::getVlan();
    }

    /**
     * {@inheritDoc}
     */
    public function vlanId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'vlanId', []);

        return parent::vlanId();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeRouterServer(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeRouterServer', []);

        return parent::isTypeRouterServer();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeRouterCollector(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeRouterCollector', []);

        return parent::isTypeRouterCollector();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeAS112(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeAS112', []);

        return parent::isTypeAS112();
    }

    /**
     * {@inheritDoc}
     */
    public function isTypeOther(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTypeOther', []);

        return parent::isTypeOther();
    }

    /**
     * {@inheritDoc}
     */
    public function isApiNone(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isApiNone', []);

        return parent::isApiNone();
    }

    /**
     * {@inheritDoc}
     */
    public function isApiBirdseye(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isApiBirdseye', []);

        return parent::isApiBirdseye();
    }

    /**
     * {@inheritDoc}
     */
    public function isApiOther(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isApiOther', []);

        return parent::isApiOther();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setHandle($handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandle', [$handle]);

        return parent::setHandle($handle);
    }

    /**
     * {@inheritDoc}
     */
    public function setProtocol($protocol)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProtocol', [$protocol]);

        return parent::setProtocol($protocol);
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setShortName($shortName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortName', [$shortName]);

        return parent::setShortName($shortName);
    }

    /**
     * {@inheritDoc}
     */
    public function setRouterId($router_id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRouterId', [$router_id]);

        return parent::setRouterId($router_id);
    }

    /**
     * {@inheritDoc}
     */
    public function setPeeringIp($peering_ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeeringIp', [$peering_ip]);

        return parent::setPeeringIp($peering_ip);
    }

    /**
     * {@inheritDoc}
     */
    public function setAsn($asn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAsn', [$asn]);

        return parent::setAsn($asn);
    }

    /**
     * {@inheritDoc}
     */
    public function setSoftware($software)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoftware', [$software]);

        return parent::setSoftware($software);
    }

    /**
     * {@inheritDoc}
     */
    public function setSoftwareVersion($software_version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoftwareVersion', [$software_version]);

        return parent::setSoftwareVersion($software_version);
    }

    /**
     * {@inheritDoc}
     */
    public function setOperatingSystem($operating_system)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOperatingSystem', [$operating_system]);

        return parent::setOperatingSystem($operating_system);
    }

    /**
     * {@inheritDoc}
     */
    public function setOperatingSystemVersion($operating_system_version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOperatingSystemVersion', [$operating_system_version]);

        return parent::setOperatingSystemVersion($operating_system_version);
    }

    /**
     * {@inheritDoc}
     */
    public function setMgmtHost($mgmt_host)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMgmtHost', [$mgmt_host]);

        return parent::setMgmtHost($mgmt_host);
    }

    /**
     * {@inheritDoc}
     */
    public function setApi($api)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApi', [$api]);

        return parent::setApi($api);
    }

    /**
     * {@inheritDoc}
     */
    public function setApiType($api_type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiType', [$api_type]);

        return parent::setApiType($api_type);
    }

    /**
     * {@inheritDoc}
     */
    public function setLgAccess($lg_access)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLgAccess', [$lg_access]);

        return parent::setLgAccess($lg_access);
    }

    /**
     * {@inheritDoc}
     */
    public function setQuarantine($quarantine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuarantine', [$quarantine]);

        return parent::setQuarantine($quarantine);
    }

    /**
     * {@inheritDoc}
     */
    public function setBgpLc($bgp_lc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBgpLc', [$bgp_lc]);

        return parent::setBgpLc($bgp_lc);
    }

    /**
     * {@inheritDoc}
     */
    public function setRPKI(bool $rpki): \Entities\Router
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRPKI', [$rpki]);

        return parent::setRPKI($rpki);
    }

    /**
     * {@inheritDoc}
     */
    public function setSkipMd5($skip_md5)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkipMd5', [$skip_md5]);

        return parent::setSkipMd5($skip_md5);
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', [$template]);

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastUpdated(\DateTime $date): \Entities\Router
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastUpdated', [$date]);

        return parent::setLastUpdated($date);
    }

    /**
     * {@inheritDoc}
     */
    public function setVlan(\Entities\Vlan $vlan)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVlan', [$vlan]);

        return parent::setVlan($vlan);
    }

    /**
     * {@inheritDoc}
     */
    public function resolveProtocol(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveProtocol', []);

        return parent::resolveProtocol();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveType', []);

        return parent::resolveType();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveTypeShortName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveTypeShortName', []);

        return parent::resolveTypeShortName();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveSoftware(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveSoftware', []);

        return parent::resolveSoftware();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveApiType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveApiType', []);

        return parent::resolveApiType();
    }

    /**
     * {@inheritDoc}
     */
    public function resolveLgAccess(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resolveLgAccess', []);

        return parent::resolveLgAccess();
    }

    /**
     * {@inheritDoc}
     */
    public function authorise(int $privs): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'authorise', [$privs]);

        return parent::authorise($privs);
    }

    /**
     * {@inheritDoc}
     */
    public function lastUpdatedGreaterThanSeconds(int $threshold)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'lastUpdatedGreaterThanSeconds', [$threshold]);

        return parent::lastUpdatedGreaterThanSeconds($threshold);
    }

}
