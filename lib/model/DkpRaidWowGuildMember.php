<?php


/**
 * Skeleton subclass for representing a row from the 'dkp_raid_wow_guild_member' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.0-dev on:
 *
 * pon, 5 kwi 2010, 17:13:50
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.cre8WowDkpPlugin.lib.model
 */
class DkpRaidWowGuildMember extends BaseDkpRaidWowGuildMember {
  
  public function save(PropelPDO $con = null)
	{
    if($this->isNew()) {
      $this->setDisplayName($this->getWowGuildMember()->getWowCharacter()->getName());
    }
    parent::save($con);
  }
  
} // DkpRaidWowGuildMember
