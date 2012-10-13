<?php

/**
 * Dkp filter form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
class DkpFormFilter extends BaseDkpFormFilter
{
  public function configure()
  {
    unset($this['dkp_wow_guild_member_list']);
  }
}
