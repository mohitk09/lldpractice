<?php

namespace Splitwise\Group;

use Splitwise\User\User;

class GroupController
{

    /** @var array<Group> */
    public $group_list;

    // getter and setter methods

    public function createNewGroup(string $group_id, string $group_name, User $created_by): void
    {
        $group = new Group();
        // do rest of the trivial operations here
    }
}
