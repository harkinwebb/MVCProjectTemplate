<?php
namespace App\Model;

use App\Model\Model;

/**
 * @Entity
 * @Table(name="profile")
 */
class Profile extends Model
{
    /**
     * @Id
     * @Column(type="integer", name="user_id")
     * @GeneratedValue
     */
    private $userId;
    /**
     * @Column(type="string", name="user_name")
     */
    private $name;
    

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
}

?>