<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Contrnt;

/**
 * Class Liste
 * @package AppBundle\Entity
 * @ORM\Table(name="liste")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ListeRepository")
 */
class Liste
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="integer")
     * @Contrnt\NotBlank(message ="veuillez entrer l'age")
     *
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     * @Contrnt\NotBlank(message ="veuillez entrer la famille")
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     * @Contrnt\NotBlank(message ="veuillez entrer la race")
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="nourriture", type="string", length=255)
     * @Contrnt\NotBlank(message ="veuillez entrer la nourriture")
     */
    private $nourriture;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return Liste
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Liste
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Liste
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set nourriture
     *
     * @param string $nourriture
     *
     * @return Liste
     */
    public function setNourriture($nourriture)
    {
        $this->nourriture = $nourriture;

        return $this;
    }

    /**
     * Get nourriture
     *
     * @return string
     */
    public function getNourriture()
    {
        return $this->nourriture;
    }
}
