<?php

interface LessonRepositoryInterface {
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // returh through filesystem
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface {
    public function getAll()
    {
        // returh through database
        // return Lesson::all(); // violates the LSP
        return Lesson::all()->toArray();
    }
}

function foo(LessonRepositoryInterface $lesson)
{
    $lessons = $lesson->getAll();
}