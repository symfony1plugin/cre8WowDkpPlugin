<?php

/**
 * DkpRaid form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class DkpRaidForm extends BaseDkpRaidForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at'], $this['sortable_rank']);
    if($this->isNew()) {
      unset($this['is_archived']);
    }
  }
}
