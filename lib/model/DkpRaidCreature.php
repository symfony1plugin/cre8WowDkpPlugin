<?php


/**
 * Skeleton subclass for representing a row from the 'dkp_raid_creature' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.1-dev on:
 *
 * czw, 29 kwi 2010, 01:40:18
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.plugins.cre8WowDkpPlugin.lib.model
 */
class DkpRaidCreature extends BaseDkpRaidCreature {
  public function  __toString() {
    return $this->getWowInstanceCreature()->getWowNpc()->getName();
  }
} // DkpRaidCreature
