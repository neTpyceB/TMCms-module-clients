<?php

namespace TMCms\Modules\Clients\Entity;

use TMCms\Modules\Clients\ModuleClients;
use TMCms\Orm\Entity;

/**
 * Class Client
 * @package TMCms\Modules\Clients\Object
 *
 * @method int getActive()
 * @method string getCompany()
 * @method string getEmail()
 * @method int getGroupId()
 * @method string getHash()
 * @method string getLogin()
 * @method string getName()
 * @method string getPhone()
 *
 * @method setActive(int $flag)
 * @method setGroupId(int $group_id)
 * @method setLogin(string $login)
 * @method setName(string $group_id)
 * @method setHash(string $password)
 * @method setTsCreated(int $ts)
 */
class ClientEntity extends Entity {
    protected $db_table = 'm_clients';

    protected function beforeCreate()
    {
        if (!$this->getGroupId()) {
            $this->setGroupId(ModuleClients::getDefaultGroupId());
        }

        $this->setTsCreated(NOW);

        return $this;
    }
}