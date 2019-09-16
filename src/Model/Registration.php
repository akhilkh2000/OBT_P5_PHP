<?php


namespace App\Model;


class Registration
{

    /**
     * @Var string
     */
    protected $pseudo;

    /**
     * @Var string
     */
    protected $email;

    /**
     * @Var string
     */
    protected $confEmail;

    /**
     * @Var string
     */
    protected $password;

    /**
     * @Var string
     */
    protected $confPassword;

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this -> pseudo;
    }

    /**
     * @param mixed $pseudo
     * @return Registration
     */
    public function setPseudo($pseudo)
    {
        $this -> pseudo = $pseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this -> email;
    }

    /**
     * @param mixed $email
     * @return Registration
     */
    public function setEmail($email)
    {
        $this -> email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfEmail()
    {
        return $this -> confEmail;
    }

    /**
     * @param mixed $confEmail
     * @return Registration
     */
    public function setConfEmail($confEmail)
    {
        $this -> confEmail = $confEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this -> password;
    }

    /**
     * @param mixed $password
     * @return Registration
     */
    public function setPassword($password)
    {
        $this -> password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConfPassword()
    {
        return $this -> confPassword;
    }

    /**
     * @param mixed $confPassword
     * @return Registration
     */
    public function setConfPassword($confPassword)
    {
        $this -> confPassword = $confPassword;

        return $this;
    }
}