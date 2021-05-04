<?php

namespace DeliciousBrains\WPMDB\Container\DI\Proxy;

use DeliciousBrains\WPMDB\Container\ProxyManager\Configuration;
use DeliciousBrains\WPMDB\Container\ProxyManager\Factory\LazyLoadingValueHolderFactory;
use DeliciousBrains\WPMDB\Container\ProxyManager\FileLocator\FileLocator;
use DeliciousBrains\WPMDB\Container\ProxyManager\GeneratorStrategy\EvaluatingGeneratorStrategy;
use DeliciousBrains\WPMDB\Container\ProxyManager\GeneratorStrategy\FileWriterGeneratorStrategy;
/**
 * Creates proxy classes.
 *
 * Wraps Ocramius/ProxyManager LazyLoadingValueHolderFactory.
 *
 * @see ProxyManager\Factory\LazyLoadingValueHolderFactory
 *
 * @since  5.0
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class ProxyFactory
{
    /**
     * If true, write the proxies to disk to improve performances.
     * @var bool
     */
    private $writeProxiesToFile;
    /**
     * Directory where to write the proxies (if $writeProxiesToFile is enabled).
     * @var string
     */
    private $proxyDirectory;
    /**
     * @var LazyLoadingValueHolderFactory|null
     */
    private $proxyManager;
    public function __construct($writeProxiesToFile, $proxyDirectory = null)
    {
        $this->writeProxiesToFile = $writeProxiesToFile;
        $this->proxyDirectory = $proxyDirectory;
    }
    /**
     * Creates a new lazy proxy instance of the given class with
     * the given initializer.
     *
     * @param string   $className   name of the class to be proxied
     * @param \Closure $initializer initializer to be passed to the proxy
     *
     * @return \ProxyManager\Proxy\LazyLoadingInterface
     */
    public function createProxy($className, \Closure $initializer)
    {
        $this->createProxyManager();
        return $this->proxyManager->createProxy($className, $initializer);
    }
    private function createProxyManager()
    {
        if ($this->proxyManager !== null) {
            return;
        }
        if (!\class_exists(\DeliciousBrains\WPMDB\Container\ProxyManager\Configuration::class)) {
            throw new \RuntimeException('The ocramius/proxy-manager library is not installed. Lazy injection requires that library to be installed with Composer in order to work. Run "composer require ocramius/proxy-manager:~1.0".');
        }
        $config = new \DeliciousBrains\WPMDB\Container\ProxyManager\Configuration();
        if ($this->writeProxiesToFile) {
            $config->setProxiesTargetDir($this->proxyDirectory);
            $config->setGeneratorStrategy(new \DeliciousBrains\WPMDB\Container\ProxyManager\GeneratorStrategy\FileWriterGeneratorStrategy(new \DeliciousBrains\WPMDB\Container\ProxyManager\FileLocator\FileLocator($this->proxyDirectory)));
            \spl_autoload_register($config->getProxyAutoloader());
        } else {
            $config->setGeneratorStrategy(new \DeliciousBrains\WPMDB\Container\ProxyManager\GeneratorStrategy\EvaluatingGeneratorStrategy());
        }
        $this->proxyManager = new \DeliciousBrains\WPMDB\Container\ProxyManager\Factory\LazyLoadingValueHolderFactory($config);
    }
}
