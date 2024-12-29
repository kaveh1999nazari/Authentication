<?php

namespace App\Domain\Entity;

use App\Domain\Repository\UserRepository;
use Cycle\Annotated\Annotation\Entity;
use Cycle\Annotated\Annotation\Column;

#[Entity(repository: UserRepository::class, table: "users")]
class User
{
    #[Column(type: 'primary')]
    private int $id;
    #[Column(type: 'string')]
    private string $email;
    #[Column(type: 'string')]
    private string $mobile;
    #[Column(type: 'string')]
    private string $password;
    #[Column(type: 'json')]
    private string $roles;
    #[Column(type: 'string', nullable: true)]
    private ?string $otpCode;
    #[Column(type: 'datetime', nullable: true)]
    private ?\DateTimeImmutable $otpExpiredAt;


    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    // Getter and Setter for Password
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

        public function getRoles(): array
    {
        return json_decode($this->roles, true);
    }

    public function setRoles(array $roles): void
    {
        $this->roles = json_encode($roles);
    }

    public function getOtpCode(): ?string
    {
        return $this->otpCode;
    }

    public function setOtpCode(?string $otpCode): void
    {
        $this->otpCode = $otpCode;
    }

    public function getOtpExpiredAt(): ?\DateTimeImmutable
    {
        return $this->otpExpiredAt;
    }

    public function setOtpExpiredAt(?\DateTimeImmutable $otpExpiredAt): void
    {
        $this->otpExpiredAt = $otpExpiredAt;
    }

}
