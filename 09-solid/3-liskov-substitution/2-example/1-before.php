<?php

interface LessonRepositoryInterface
{
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return DB::table('lessons')->all(); // all() method returns CollectionObject
    }
}