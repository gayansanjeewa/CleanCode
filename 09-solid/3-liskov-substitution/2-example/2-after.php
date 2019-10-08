<?php

interface LessonRepositoryInterface
{
    /**
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAll()
    {
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getAll()
    {
        return DB::table('lessons')->all()->toArray();
    }
}