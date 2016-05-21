<?php

return array(
  'slider_widget_fields' => array(
    'group_name' => 'CiviVolunteer Configurations',
    'group' => 'org.civicrm.volunteer',
    'name' => 'slider_widget_fields',
    'type' => 'Array',
    'default' => NULL,
    'add' => '4.5',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Fields which are configured to use the slider widget',
    'help_text' => 'Which fields should use the slider widget?',
  ),

  'volunteer_default_profiles' => array(
    'group_name' => 'CiviVolunteer Configurations',
    'group' => 'volunteer_defaults',
    'name' => 'volunteer_default_profiles',
    'type' => 'String',
    'default' => '',
    'add' => '4.5',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Default Profiles for new Volunteer Projects',
    'help_text' => '',
  ),

  'volunteer_default_campaign' => array(
    'group_name' => 'CiviVolunteer Configurations',
    'group' => 'volunteer_defaults',
    'name' => 'volunteer_default_campaign',
    'type' => 'Int',
    'default' => '',
    'add' => '4.5',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Default Campaign for new Volunteer Projects',
    'help_text' => '',
  ),
  'volunteer_default_locblock' => array(
    'group_name' => 'CiviVolunteer Configurations',
    'group' => 'volunteer_defaults',
    'name' => 'volunteer_default_locblock',
    'type' => 'Int',
    'default' => '',
    'add' => '4.5',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Default Location for new Volunteer Projects',
    'help_text' => '',
  ),
  'volunteer_default_is_active' => array(
    'group_name' => 'CiviVolunteer Configurations',
    'group' => 'volunteer_defaults',
    'name' => 'volunteer_default_is_active',
    'type' => 'Int',
    'default' => '1',
    'add' => '4.5',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Default Active status for new Volunteer Projects',
    'help_text' => 'Should new Projects default to being active?',
  ),
  'volunteer_default_contacts' => array(
    'group_name' => 'CiviVolunteer Configurations',
    'group' => 'volunteer_defaults',
    'name' => 'volunteer_default_contacts',
    'type' => 'String',
    'default' => '',
    'add' => '4.5',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => '',
    'help_text' => '',
  ),
);