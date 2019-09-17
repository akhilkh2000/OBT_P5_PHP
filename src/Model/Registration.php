<?php


namespace App\Model;


class Registration extends AbstractModel
{

    /**
     * @var integer
     */
    protected $id;

    /**
     * @Var string
     */
    protected $username;

    /**
     * @Var string
     */
    protected $mail;


    /**
     * @Var string
     */
    protected $password;

    /**
     * @Var \DateTime
     */
    protected $registrationDate;


public function __construct(array $data = [])
{
    $this->registrationDate =  new \DateTime();
    parent::__construct($data);
}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Registration
     */
    public function setId(int $id): Registration
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Registration
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     * @return Registration
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Registration
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDate(): \DateTime
    {
        return $this->registrationDate;
    }

    /**
     * @param \DateTime $registrationDate
     * @return Registration
     */
    public function setRegistrationDate(\DateTime $registrationDate): Registration
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }



}