<?php

/**
 * DkpRaidWowGuildMember form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class DkpRaidWowGuildMemberForm extends BaseDkpRaidWowGuildMemberForm
{
  public function configure()
  {
    unset($this['display_name'], $this['sortable_rank']);
  }
}
