<?php

const UNASSIGNED = 'unassigned';

/** Status Constant */
const STATUS_INCOMPLETE  = 'incomplete';
const STATUS_UNPUBLISHED = 'unpublished';
const STATUS_PUBLISHED   = 'published';

/** Skill Levels Constant */
const SKILL_LVL_BEGINNER = 'Principiante';
const SKILL_LVL_MEDIUM   = 'Intermedio';
const SKILL_LVL_ADVANCED = 'Avanzado';
const SKILL_LVL_EXPERT   = 'Experto';

/** Skill Levels Constant */
const ACTIVITY_LVL_LIGHT     = 'Leve';
const ACTIVITY_LVL_MODERATE  = 'Moderada';
const ACTIVITY_LVL_DEMANDING = 'Exigente';
const ACTIVITY_LVL_EXTREME   = 'Extrema';

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
