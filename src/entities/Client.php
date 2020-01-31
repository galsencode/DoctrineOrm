<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity @ORM\Table(name="client")
 **/
class Client
{

  /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
   private $id;
   /** @ORM\Column(type="string") **/
   private $nom;
   /** @ORM\Column(type="string") **/
   private $prenom;
   /** @ORM\Column(type="integer") **/
   private $tel;

    /**
     * One client has many comptes. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Compte", mappedBy="client")
     */
    private $comptes;


    public function __construct() {
        $this->$comptes = new ArrayCollection();
    }
}
?>
