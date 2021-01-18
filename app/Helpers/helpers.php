<?php

const UNASSIGNED = 'unassigned';

/** Status Constant */
const STATUS_INCOMPLETE  = 'INCOMPLETE';
const STATUS_UNPUBLISHED = 'UNPUBLISHED';
const STATUS_PUBLISHED   = 'PUBLISHED';
const STATUS_LIST        = 'INCOMPLETE,UNPUBLISHED,PUBLISHED';

/** Skill Levels Constant */
const SKILL_LVL_BEGINNER = 'BEGINNER';
const SKILL_LVL_MEDIUM   = 'MEDIUM';
const SKILL_LVL_ADVANCED = 'ADVANCED';
const SKILL_LVL_EXPERT   = 'EXPERT';
const SKILL_LVL_LIST     = "BEGINNER,MEDIUM,ADVANCED,EXPERT";

/** Skill Levels Constant */
const ACTIVITY_LVL_LIGHT     = 'MILD';
const ACTIVITY_LVL_MODERATE  = 'MODERATE';
const ACTIVITY_LVL_DEMANDING = 'DEMANDING';
const ACTIVITY_LVL_EXTREME   = 'EXTREME';
const ACTIVITY_LVL_LIST      = 'MILD,MODERATE,DEMANDING,EXTREME';

const TYPE_SERVICE    = 'services';
const TYPE_EXPERIENCE = 'experiences';

const MIN_PRICE = 2500;


function isActiveRoute($path)
{
    return Route::is($path) ? 'active' : '';
}

function isSelected($currentKey, $compareKey)
{
    return ($currentKey == $compareKey) ? 'selected' : '';
}
