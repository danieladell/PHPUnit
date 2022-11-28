<?php
namespace Test\Unit;

use PHPUnit\Framework\TestCase;
use Model\User;

class UserTest extends TestCase {
    
    public function testUserIsAnAdultReturnsFalseForMinors() {
        $user = new User(17);
        $this->assertEquals(false, $user->IsAnAdult());
        
    }

    public function testUserIsAnAdultReturnsTrueForPeopleOlderThanThresshold() {
        $user = new User(19);
        $this->assertTrue($user->IsAnAdult());

        $user = new User(54);
        $this->assertTrue($user->IsAnAdult());

        $user = new User(111);
        $this->assertTrue($user->IsAnAdult());

    }

    public function testUserIsAnAdultReturnsTrueForThresshold() {
        $user = new User(18);
        $this->assertTrue($user->IsAnAdult());

    }
}