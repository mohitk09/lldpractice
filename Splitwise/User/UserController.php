<?php

namespace Splitwise\User;

class UserController
{
    /** @var array<string, User> */
    public $userList;

    public function __construct()
    {
        $this->userList = array();
    }

    public function addUser(User $user): void
    {
        array_push($this->userList, [$user->getUserID() => $user]);
    }

    public function getUser(string $user_id): User
    {
        return $this->userList[$user_id];
    }
}
