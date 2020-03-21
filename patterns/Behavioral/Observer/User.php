<?php


namespace Patterns\Behavioral\Observer;


use SplObserver;
use SplObjectStorage;

class User implements \SplSubject
{
    /**
     * @var string
     */
    private $email;
    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}