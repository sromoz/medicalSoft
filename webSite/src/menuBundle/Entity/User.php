<?php

// src/AppBundle/Entity/User.php

namespace menuBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser implements UserInterface, \Serializable
{       

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\ManyToMany(targetEntity="menuBundle\Entity\Group")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
    *@var string 
    * @ORM\Column(name="roles", type="json_array")
    */
 
   protected $roles=array();
    
   /**
    * @ORM\Column(type="string")
    */
 
   protected $first_name;
 
    /**
    * @ORM\Column(type="string")
    */
 
   protected $last_name;
   
   /**
    * Set roles
    *
    * @param string $roles
    *
    * @return User
    */
   public function setRoles(array $roles)
   {
       $this->roles=$roles;
       return $this;
   }
   
       

      /**
    * Set firstName
    *
    * @param string $firstName
    *
    * @return User
    */
 
   public function setFirstName($firstName)
 
   {
       $this->first_name = $firstName;
       return $this;
   }
   public function getRoles()
   {
       return $this->roles;
   }
   /**
    * Get firstName
    *
    * @return string
    */
 
   public function getFirstName()
 
   {
       return $this->first_name;
   }
 
   /**
    * Set lastName
    *
    * @param string $lastName
    *
    * @return User
    */
 
   public function setLastName($lastName)
 
   {
       $this->last_name = $lastName;
       return $this;
   }
 
   /**
    * Get lastName
    *
    * @return string
    */
 
   public function getLastName()
 
   {
       return $this->last_name;
   }   
   
    
    public function __construct()
    {
        parent::__construct();
        $this->isActive=true;//todos los usuarios se autentifican siempre y cuando esten activos
        // your own logic
    }
 
    
}
