<?php


namespace Patterns\Behavioral\Observer;


use SplSubject;

class UserObserver implements \SplObserver
{

    /**
     * @var SplSubject[]
     */
    private $changedUsers = [];

    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}