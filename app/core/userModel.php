<?php

namespace Wise\Core;

abstract class userModel extends dataModel
{
    abstract public function getDisplayName(): string;
}