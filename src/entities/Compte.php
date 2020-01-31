<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="compte")
 **/
class Compte
{
  /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
   private $id;
   /** @ORM\Column(type="string") **/
   private $code;

    /**
     * Many Compte have one client. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;

}
?>
