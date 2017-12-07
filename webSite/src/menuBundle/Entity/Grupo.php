<?php
// Change the namespace according to the path in your project
namespace menuBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_group")
 */
class Grupo extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;
      /**
    *@var string 
    * @ORM\Column(name="roles", type="json_array")
    */
 
   protected $roles=array();
    public function getRoles()
   {
       return $this->roles;
   }
   public function setRoles(array $roles)
   {
       $this->roles=$roles;
       return $this;
   }
}