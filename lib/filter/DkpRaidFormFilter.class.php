<?php

/**
 * DkpRaid filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
class DkpRaidFormFilter extends BaseDkpRaidFormFilter
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at'], $this['sortable_rank']);
  }
}
