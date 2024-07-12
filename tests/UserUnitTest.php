<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();
        $user ->setEmail("kylea@mail.com")
        ->setFistName("kyle")
        ->setLastName("ahlo")
        ->setPhoneNumber("0603394181")
        ;

        $this->assertTrue($user->getEmail() === "kylea@mail.com");
        $this->assertTrue($user->getFistName() === "kyle");
        $this->assertTrue($user->getLastName() == "ahlo");
        $this->assertTrue($user->getPhoneNumber() == "0603394181");
    }

    public function testIsFalse()
    {
        $user = new User();
        $user ->setEmail("kylea@mail.com")
            ->setFistName("kyle")
            ->setLastName("ahlo")
            ->setPhoneNumber("0603394181")
        ;

        $this->assertFalse($user->getEmail() === "kylea@<sdqsd.com");
        $this->assertFalse($user->getFistName() === "qsd");
        $this->assertFalse($user->getLastName() === "qsdqs");
        $this->assertFalse($user->getPhoneNumber() == "060339418qsdqsd1");
    }

    public function testIsEmpty()
    {
        $user = new User();
        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getFistName());
        $this->assertEmpty($user->getLastName());
        $this->assertEmpty($user->getPhoneNumber());
    }
}
