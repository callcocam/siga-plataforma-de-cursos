<?php

namespace App\Models\Traits;

class HasStatus
{

    const DELETED = "deleted";
    const DRAFT = "draft";
    const REVISION = "revision";
    const PUBLISHED = "published";
}