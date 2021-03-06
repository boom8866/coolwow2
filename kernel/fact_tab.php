<?php
/*
 * Project Name: MiniManager for Mangos Server
 * Date: 17.10.2006 inital version (0.0.1a)
 * Author: Q.SA
 * Copyright: Q.SA
 * Email: *****
 * License: GNU General Public License v2(GPL)
 */
 
$fact_id = Array(
//              0    1  2       3              4              5           6           7             8            9               10         11
//id => array(name,team,n,reputationListID,BaseRepMask1,BaseRepMask2,BaseRepMask3,BaseRepMask4,BaseRepValue1,BaseRepValue2,BaseRepValue3,BaseRepValue4)
  54 => array("Gnomeregan Exiles","Alliance",1,18,1037,690,64,0,3100,-42000,4000,0),
  72 => array("Stormwind","Alliance",1,19,1100,690,1,0,3100,-42000,4000,0),
  47 => array("Ironforge","Alliance",1,20,1097,690,4,0,3100,-42000,4000,0),
  69 => array("Darnassus","Alliance",1,21,1093,690,8,0,3100,-42000,4000,0),
  930 => array("Exodar","Alliance",1,49,77,946,1024,0,3000,-42000,4000,0),
  
  76 => array("Orgrimmar","Horde",2,14,160,1101,2,528,3100,-42000,4000,500),
  530 => array("Darkspear Trolls","Horde",2,15,34,1101,528,128,3100,-42000,500,4000),
  81 => array("Thunder Bluff","Horde",2,16,130,1101,528,32,3100,-42000,500,4000),
  68 => array("Undercity","Horde",2,17,162,1101,16,512,500,-42000,4000,3100),
  911 => array("Silvermoon City","Horde",2,55,162,1101,512,16,400,-42000,4000,3100),
  
  730 => array("Stormpike Guard","Alliance Forces",3,40,1101,690,0,0,0,-42000,0,0),
  890 => array("Silverwing Sentinels","Alliance Forces",3,45,1101,690,0,0,0,-42000,0,0),
  509 => array("The League of Arathor","Alliance Forces",3,53,1101,690,0,0,0,-42000,0,0),
  
  729 => array("Frostwolf Clan","Horde Forces",4,41,690,1101,0,0,0,-42000,0,0),
  889 => array("Warsong Outriders","Horde Forces",4,46,690,1101,0,0,0,-42000,0,0),
  510 => array("The Defilers","Horde Forces",4,52,690,1101,0,0,0,-42000,0,0),
  
  21 => array("Booty Bay","Steamwheedle Cartel",5,1,1791,0,0,0,500,0,0,0),
  369 => array("Gadgetzan","Steamwheedle Cartel",5,7,1791,0,0,0,500,0,0,0),
  470 => array("Ratchet","Steamwheedle Cartel",5,9,1791,0,0,0,500,0,0,0),
  577 => array("Everlook","Steamwheedle Cartel",5,28,1791,0,0,0,500,0,0,0),
  
  947 => array("Thrallmar","Outland",6,37,690,1101,0,0,0,-42000,0,0),
  946 => array("Honor Hold","Outland",6,38,1101,690,0,0,0,-42000,0,0),
  933 => array("The Consortium","Outland",6,60,2047,0,0,0,0,0,0,0),
  941 => array("The Mag'har","Outland",6,61,690,1101,0,0,-500,-42000,0,0),
  942 => array("Cenarion Expedition","Outland",6,64,2047,0,0,0,0,0,0,0),
  970 => array("Sporeggar","Outland",6,65,2047,0,0,0,-2500,0,0,0),
  978 => array("Kurenai","Outland",6,66,1101,690,0,0,-1200,-42000,0,0),
  1012 => array("Ashtongue Deathsworn","Outland",6,70,1791,0,0,0,0,0,0,0),
  1015 => array("Netherwing","Outland",6,71,1791,0,0,0,-42000,0,0,0),
  1038 => array("Ogri'la","Outland",6,73,1791,0,0,0,0,0,0,0),
  
  935 => array("The Sha'tar","Shattrath City",7,39,1791,0,0,0,0,0,0,0),
  932 => array("The Aldor","Shattrath City",7,58,255,1024,512,0,0,3500,-3500,0),
  934 => array("The Scryers","Shattrath City",7,62,255,1024,512,0,0,-3500,3500,0),
  1011 => array("Lower City","Shattrath City",7,69,32767,0,0,0,0,0,0,0),
  1031 => array("Sha'tari Skyguard","Shattrath City",7,72,1791,0,0,0,0,0,0,0),
  
  87 => array("Bloodsail Buccaneers","Other",8,0,1791,0,0,0,-6500,0,0,0),
  92 => array("Gelkis Clan Centaur","Other",8,2,1791,0,0,0,2000,0,0,0),
  93 => array("Magram Clan Centaur","Other",8,3,1791,0,0,0,2000,0,0,0),
  59 => array("Thorium Brotherhood","Other",8,4,1791,0,0,0,0,0,0,0),
  349 => array("Ravenholdt","Other",8,5,1791,0,0,0,0,0,0,0),
  70 => array("Syndicate","Other",8,6,1791,0,0,0,-10000,0,0,0),
  471 => array("Wildhammer Clan","Other",8,8,1097,690,4,0,150,-42000,500,0),
  169 => array("Steamwheedle Cartel","Other",8,10,1791,0,0,0,500,0,0,0),
  469 => array("Alliance","Other",8,11,1101,690,0,0,3300,-42000,0,0),
  67 => array("Horde","Other",8,12,690,1101,0,0,3500,-42000,0,0),
  529 => array("Argent Dawn","Other",8,13,1791,0,0,0,200,0,0,0),
  86 => array(" Leatherworking - Dragonscale","Other",8,22,1791,0,0,0,2999,0,0,0),
  83 => array(" Leatherworking - Elemental","Other",8,23,1791,0,0,0,2999,0,0,0),
  549 => array(" Leatherworking - Tribal","Other",8,24,1791,0,0,0,2999,0,0,0),
  551 => array(" Engineering - Gnome","Other",8,25,1791,0,0,0,2999,0,0,0),
  550 => array(" Engineering - Goblin","Other",8,26,1791,0,0,0,2999,0,0,0),
  589 => array("Wintersaber Trainers","Other",8,27,690,1101,0,0,-42000,0,0,0),
  46 => array(" Blacksmithing - Armorsmithing","Other",8,29,1791,0,0,0,0,0,0,0),
  289 => array(" Blacksmithing - Weaponsmithing","Other",8,30,1791,0,0,0,0,0,0,0),
  570 => array(" Blacksmithing - Axesmithing","Other",8,31,1791,0,0,0,0,0,0,0),
  571 => array(" Blacksmithing - Swordsmithing","Other",8,32,1791,0,0,0,0,0,0,0),
  569 => array(" Blacksmithing - Hammersmithing","Other",8,33,1791,0,0,0,0,0,0,0),
  574 => array("Caer Darrow","Other",8,34,1791,0,0,0,0,0,0,0),
  576 => array("Timbermaw Hold","Other",8,35,1791,0,0,0,-3500,0,0,0),
  609 => array("Cenarion Circle","Other",8,36,1791,40,0,0,0,2000,0,0),
  749 => array("Hydraxian Waterlords","Other",8,42,1791,0,0,0,0,0,0,0),
  980 => array("Outland","Other",8,43,0,0,0,0,0,0,0,0),
  809 => array("Shen'dralar","Other",8,44,1791,0,0,0,0,0,0,0),
  891 => array("Alliance Forces","Other",8,47,1101,178,0,0,0,-42000,0,0),
  892 => array("Horde Forces","Other",8,48,690,77,0,0,0,-42000,0,0),
  909 => array("Darkmoon Faire","Other",8,50,1791,0,0,0,0,0,0,0),
  270 => array("Zandalar Tribe","Other",8,51,1791,0,0,0,0,0,0,0),
  910 => array("Brood of Nozdormu","Other",8,54,1791,0,0,0,-42000,0,0,0),
  922 => array("Tranquillien","Other",8,56,690,1101,0,0,0,-42000,0,0),
  990 => array("The Scale of the Sands","Other",8,57,1791,0,0,0,0,0,0,0),
  936 => array("Shattrath City","Other",8,59,2047,0,0,0,0,0,0,0),
  967 => array("The Violet Eye","Other",8,63,4095,0,0,0,0,0,0,0),
  989 => array("Keepers of Time","Other",8,67,1791,0,0,0,0,0,0,0),
  1005 => array("Friendly, Hidden","Other",8,68,32767,0,0,0,3000,0,0,0)
);    

$reputation_rank_length = array(36000, 3000, 3000, 3000, 6000, 12000, 21000, 999);
$reputation_cap    =  42999;
$reputation_bottom = -42000;
$reputation_rank = array( 0 => "Hated", 1 => "Hostile", 2 => "Unfriendly", 3 => "Neutral", 4 => "Friendly", 5 => "Honored", 6 => "Revered", 7 => "Exalted");
$MIN_REPUTATION_RANK = 0;
$MAX_REPUTATION_RANK = 8;

function get_faction_name($fid){
 global $lang_id_tab, $fact_id;
	if( isset($fact_id[$fid])) return $fact_id[$fid][0];
		else  return($lang_id_tab['unknown']);
}

function get_faction_tree($fid){
 global $fact_id;
	if( isset($fact_id[$fid])) return $fact_id[$fid][2];
		else  return 0;
}

function get_base_reputation($fid, $race) 
{
  global $fact_id;

  if(!isset($fact_id[$fid])) return 0;
  
  for ($i = 0; $i < 4; $i++)
  {
      if ($fact_id[$fid][4 + $i] & (1 << ($race-1)))
          return $fact_id[$fid][8 + $i];
  }
  // in faction.dbc exist factions with (RepListId >=0, listed in character reputation list) with all BaseRepMask[i]==0
  return 0;
}
       
function get_reputation($fid, $standing, $race)
{
   return get_base_reputation($fid, $race) + $standing;
}
       
function get_reputation_rank($fid,  $standing, $race) 
{
    $reputation = get_reputation($fid, $standing, $race);
    return reputation_to_rank($reputation);
}

function get_reputation_at_rank($fid,  $standing, $race) 
{
    $reputation = get_reputation($fid, $standing, $race);
    return reputation_at_rank($reputation);
}

function get_base_reputation_rank($fid, $race) 
{
    $reputation = get_base_reputation($fid, $race);
    return reputation_to_rank($reputation);
}         
       
function reputation_to_rank($standing) 
{
    global $reputation_rank_length, $reputation_cap, $reputation_bottom, $reputation_rank, $MIN_REPUTATION_RANK, $MAX_REPUTATION_RANK;

    $limit = $reputation_cap;
    for ($i = $MAX_REPUTATION_RANK-1; $i >= $MIN_REPUTATION_RANK; --$i)
    {
        $limit -= $reputation_rank_length[$i];
        if ($standing >= $limit )
            return $i;
    }
    return $MIN_REPUTATION_RANK;
}

function reputation_at_rank($standing) 
{
    global $reputation_rank_length, $reputation_cap, $reputation_bottom, $reputation_rank, $MIN_REPUTATION_RANK, $MAX_REPUTATION_RANK;

    $limit = $reputation_cap;
    for ($i = $MAX_REPUTATION_RANK-1; $i >= $MIN_REPUTATION_RANK; --$i)
    {
        $limit -= $reputation_rank_length[$i];
        if ($standing >= $limit )
            return $standing - $limit;
    }
    return 0;
}
?>