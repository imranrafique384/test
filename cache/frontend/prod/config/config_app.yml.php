<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2011/05/13 13:11:40
sfConfig::add(array(
  'app_recaptcha_enabled' => false,
  'app_sfForkedApply_applyForm' => 'sfApplyApplyForm',
  'app_sfForkedApply_resetForm' => 'sfApplyResetForm',
  'app_sfForkedApply_resetRequestForm' => 'sfApplyResetRequestForm',
  'app_sfForkedApply_settingsForm' => 'sfApplySettingsForm',
  'app_sfForkedApply_editEmailForm' => 'sfApplyEditEmailForm',
  'app_sfForkedApply_mail_editable' => false,
  'app_sfForkedApply_confirmation' => NULL,
  'app_sfForkedApply_routes' => array (
  'apply' => '/user/new',
  'reset' => '/user/password-reset',
  'resetRequest' => '/user/reset-request',
  'resetCancel' => '/user/reset-cancel',
  'validate' => '/user/confirm/:validate',
  'settings' => '/user/settings',
),
  'app_sfForkedApply_reset' => false,
  'app_sfForkedApply_apply' => false,
  'app_sfForkedApply_email' => false,
));
