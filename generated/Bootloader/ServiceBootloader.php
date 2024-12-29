<?php

declare(strict_types=1);

namespace GRPC\Bootloader;

use GRPC\Config\GRPCServicesConfig;
use GRPC\authentication\AuthenticationUserGrpcClient as AuthenticationUserGrpcClient1;
use GRPC\authentication\AuthenticationUserGrpcInterface as AuthenticationUserGrpcInterface1;
use GRPC\user\AuthenticationUserGrpcClient;
use GRPC\user\AuthenticationUserGrpcInterface;
use GRPC\user\UserGrpcClient;
use GRPC\user\UserGrpcInterface;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Boot\EnvironmentInterface;
use Spiral\Config\ConfiguratorInterface;
use Spiral\Core\Container;
use Spiral\Core\InterceptableCore;
use Spiral\RoadRunnerBridge\GRPC\Interceptor\ServiceClientCore;

class ServiceBootloader extends Bootloader
{
    public function __construct(
        private readonly ConfiguratorInterface $config,
    ) {
    }

    public function init(EnvironmentInterface $env): void
    {
        $this->initConfig($env);
    }

    public function boot(Container $container): void
    {
        $this->initServices($container);
    }

    /**
     * Don't edit this method manually, it is generated by GRPC services generator.
     */
    private function initConfig(EnvironmentInterface $env): void
    {
        $this->config->setDefaults(
            GRPCServicesConfig::CONFIG,
            [
                'services' => [
                    AuthenticationUserGrpcClient::class => ['host' => $env->get('AUTHENTICATION_USER_GRPC_HOST', '127.0.0.1:9000')],
                ],
            ]
        );
    }

    /**
     * Don't edit this method manually, it is generated by GRPC services generator.
     */
    private function initServices(Container $container): void
    {
        $container->bindSingleton(
            AuthenticationUserGrpcInterface::class,
            static function(GRPCServicesConfig $config) use($container): AuthenticationUserGrpcInterface
            {
                $service = $config->getService(AuthenticationUserGrpcClient::class);
                $core = new InterceptableCore(new ServiceClientCore(
                    $service['host'],
                    ['credentials' => $service['credentials'] ?? $config->getDefaultCredentials()]
                ));

                foreach ($config->getInterceptors() as $interceptor) {
                    $core->addInterceptor($container->get($interceptor));
                }

                return $container->make(AuthenticationUserGrpcClient::class, ['core' => $core]);
            }
        );
    }
}