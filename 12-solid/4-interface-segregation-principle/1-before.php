<?php

interface WorkerInterface
{
    public function work();

    public function sleep();
}

class HumanWorker implements WorkerInterface
{
    public function work()
    {
        return 'Human working.';
    }

    public function sleep()
    {
        return 'Human sleeping.';
    }
}

class AndroidWorker implements WorkerInterface
{
    public function work()
    {
        return 'Android working.';
    }

    public function sleep()
    {
        return null; // forced upon due to the interface contract!
    }
}

class Captain
{
    public function manage(WorkerInterface $worker)
    {
        $worker->work();

        if ($worker instanceof HumanWorker) { // when you see this, you know you're doing something wrong!
            $worker->sleep();
        }
    }
}