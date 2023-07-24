<?php
function callInstanceUsers ()
{
    $usersInstance = new Users();
    return $usersInstance->index();
}

function callInstancePosts()
{
    $postsInstance = new Posts();
    return $postsInstance->index();
}

function callInstanceComments()
{
    $commentsInstance = new Comments();
    return $commentsInstance->index();
}

function callInstanceForCreateUser()
{
    $createUsersMethod = new Users();
    return $createUsersMethod->signUpMethod();
}