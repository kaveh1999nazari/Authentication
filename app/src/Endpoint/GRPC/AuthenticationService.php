<?php

namespace App\Endpoint\GRPC;

use App\Domain\Entity\User;
use Cycle\ORM\ORMInterface;
use Google\Rpc\Code;
use GRPC\authentication\AuthenticationUserGrpcInterface;
use GRPC\authentication\LoginEmailRequest;
use GRPC\authentication\LoginEmailResponse;
use GRPC\authentication\LoginMobileRequest;
use GRPC\authentication\LoginMobileResponse;
use Spiral\Auth\TokenStorageInterface;
use Spiral\RoadRunner\GRPC;


class AuthenticationService implements AuthenticationUserGrpcInterface
{
    public function __construct(private readonly ORMInterface $orm,
                                private readonly TokenStorageInterface $token
    )
    {
    }

    public function LoginByMobile(GRPC\ContextInterface $ctx, LoginMobileRequest $in): LoginMobileResponse
    {
        $user = $this->orm->getRepository(User::class)
            ->findByMobile($in->getMobile());

        $response = new LoginMobileResponse();

        if ($user && password_verify($in->getPassword(), $user->getPassword())) {

            $token = $this->token->create(['sub' => $user->getId()]);

            $response->setToken($token->getID());
            $response->setMessage($user->getRoles());


            return $response;
        } else {
            $response->setMessage(["Authentication failed."]);

        }

        return $response;

    }

    public function LoginByEmail(GRPC\ContextInterface $ctx, LoginEmailRequest $in): LoginEmailResponse
    {
        $user = $this->orm->getRepository(User::class)
            ->findOne(['email' => $in->getEmail()]);

        $response = new LoginEmailResponse();

        if ($user &&
            $in->getCode() === $user->getOtpCode() &&
            $user->getOtpExpiredAt() > new \DateTimeImmutable() ) {

            $token = $this->token->create(['sub' => $user->getId()]);

            $response->setMessage($user->getRoles());
            $response->setToken($token->getID());

        } else {
            throw new GRPC\Exception\GRPCException(
                message: 'Authentication failed.',
                code: Code::CANCELLED);
        }

        return $response;
    }

}
