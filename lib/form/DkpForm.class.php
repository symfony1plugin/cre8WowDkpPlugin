<?php

/**
 * Dkp form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 */
class DkpForm extends BaseDkpForm
{
  public function configure()
  {
    $this->widgetSchema->setLabels(array(
      'wow_guild_id' => _('Guild'),
      'dkp_wow_guild_member_list' => _('Members')
    ));

    if($this->isNew()) {
      unset($this['dkp_wow_guild_member_list']);
    } else {
      $c = new Criteria();
      $c->add(WowGuildMemberPeer::WOW_GUILD_ID, $this->getObject()->getWowGuildId());
      $this->widgetSchema['dkp_wow_guild_member_list']->setOption('criteria', $c);
      $this->widgetSchema['dkp_wow_guild_member_list']->setOption('query_methods', array('getWowCharacterObject', 'sortByWowCharacterName'));
//      $this->widgetSchema['dkp_wow_guild_member_list']->setOption('expanded', true);

    }
  }
}
